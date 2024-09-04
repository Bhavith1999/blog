<?php

namespace App\Http\Controllers;

use App\Models\BlogModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class BlogController extends Controller
{
    public function blog(Request $request)
    {
        $filters = $request->only(['id', 'username', 'title', 'is_publish', 'status']);
        $data['getRecord'] = BlogModel::getRecord($filters);
        return view('backend.blog.list', $data);
    }

    public function add_blog()
    {
        return view('backend.blog.add');
    }

    public function insert_blog(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image_file' => 'required|image',
            'description' => 'required',
            'tags' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'is_publish' => 'required|boolean',
            'status' => 'required|boolean',
        ]);

        $blog = new BlogModel();
        $blog->title = $request->input('title');
        $blog->description = $request->input('description');
        $blog->meta_description = $request->input('meta_description');
        $blog->meta_keywords = $request->input('meta_keywords');
        $blog->is_publish = $request->input('is_publish');
        $blog->status = $request->input('status');
        
        if ($request->hasFile('image_file')) {
            $imagePath = $request->file('image_file')->store('public/blog_images');
            $blog->image_file = basename($imagePath); 
        }                 

        $blog->save();
       
        return redirect()->route('panel.blog.list')->with('success', 'Blog added successfully');
    }

    public function edit_blog($id)
    {
        $data['blog'] = BlogModel::findOrFail($id);
        return view('backend.blog.edit', $data);
    }

    public function update_blog(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image_file' => 'nullable|image',
            'description' => 'required',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'is_publish' => 'required|boolean',
            'status' => 'required|boolean',
        ]);

        $blog = BlogModel::findOrFail($id);
        $blog->title = $request->input('title');
        $blog->description = $request->input('description');
        $blog->meta_description = $request->input('meta_description');
        $blog->meta_keywords = $request->input('meta_keywords');
        $blog->is_publish = $request->input('is_publish');
        $blog->status = $request->input('status');

        if ($request->hasFile('image_file')) {
            if ($blog->image_file && Storage::exists('public/blog_images/' . $blog->image_file)) {
                Storage::delete('public/blog_images/' . $blog->image_file);
            }
            $imagePath = $request->file('image_file')->store('public/blog_images');
            $blog->image_file = basename($imagePath);
        }

        $blog->save();

        return redirect()->route('panel.blog.list')->with('success', 'Blog updated successfully');
    }


    public function delete_blog($id)
    {
        $blog = BlogModel::findOrFail($id);
        $blog->is_delete = 1;
        $blog->save();

        return redirect()->route('panel.blog.list')->with('success', 'Blog deleted successfully');
    }

    public function blog_front()
    {
        $blogs = BlogModel::where('is_publish', 1)->where('status', 1)->orderBy('created_at', 'desc')->get();
        return view('frontend.index', compact('blogs'));
    }

    public function show_blog($id)
    {
        $blog = BlogModel::findOrFail($id);
        return view('frontend.show', compact('blog'));
    }
}
