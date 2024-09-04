@extends('backend.layouts.app')

@section('content')
<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Blog List</h5>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>#</th>
                <th>Title</th>
                <th>Image</th>
                <th>Publish</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($getRecord as $blog)
                <tr>
                  <td>{{ $blog->id }}</td>
                  <td>{{ $blog->title }}</td>
                  <td><img src="{{ asset('storage/blog_images/' . $blog->image_file) }}" alt="Image" style="width: 100px; height: 100px;"></td>
                  <td>{{ $blog->is_publish ? 'Yes' : 'No' }}</td>
                  <td>{{ $blog->status ? 'Active' : 'Inactive' }}</td>
                  <td>
                    <a href="{{ route('panel.blog.edit', $blog->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="{{ route('panel.blog.delete', $blog->id) }}" class="btn btn-danger btn-sm">Delete</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
          {{ $getRecord->links() }}
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
