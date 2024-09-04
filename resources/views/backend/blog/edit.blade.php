@extends('backend.layouts.app')

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/tag_input/bootstrap-tagsinput.css') }}">
@endsection

@section('content')
<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Edit Blog</h5>
          <form class="row g-3" action="{{ route('panel.blog.update', $blog->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-12">
              <label class="form-label">Title*</label>
              <input type="text" class="form-control" name="title" value="{{ $blog->title }}" required>
            </div>
            <div class="col-12">
              <label class="form-label">Image</label>
              <input type="file" class="form-control" name="image_file">
              @if ($blog->image_file)
                <img src="{{ asset('storage/blog_images/' . $blog->image_file) }}" alt="Current Image" style="width: 100px; height: 100px;">
              @endif
            </div>
            <div class="col-12">
              <label class="form-label">Description*</label>
              <textarea class="form-control tinymce-editor" name="description">{{ $blog->description }}</textarea>
            </div>
            <div class="col-12">
              <label class="form-label">Meta Description</label>
              <textarea class="form-control" name="meta_description">{{ $blog->meta_description }}</textarea>
            </div>
            <hr>
            <div class="col-12">
              <label class="form-label">Meta Keywords</label>
              <input type="text" class="form-control" value="{{ $blog->meta_keywords }}" name="meta_keywords">
            </div>
            <hr>
            <div class="col-12">
              <label class="form-label">Publish*</label>
              <select class="form-control" name="is_publish">
                <option value="1" {{ $blog->is_publish == 1 ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ $blog->is_publish == 0 ? 'selected' : '' }}>No</option>
              </select>
            </div>
            <hr>
            <div class="col-12">
              <label class="form-label">Status*</label>
              <select class="form-control" name="status">
                <option value="1" {{ $blog->status == 1 ? 'selected' : '' }}>Active</option>
                <option value="0" {{ $blog->status == 0 ? 'selected' : '' }}>Inactive</option>
              </select>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('scripts')
<script src="{{ asset('assets/tag_input/bootstrap-tagsinput.js') }}"></script>
@endsection
