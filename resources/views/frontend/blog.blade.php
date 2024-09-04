@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Our Blog</h1>
        <div class="row pb-3">
            @forelse($blogs as $blog)
                <div class="col-md-4" >
                    <div class="card mb-4">
                        @if($blog->image_file)
                            <img src="{{ asset('storage/blog_images/' . $blog->image_file) }}" class="card-img-top" alt="{{ $blog->title }}" style="width: 10px; height: 20px; object-fit: cover;">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $blog->title }}</h5>
                            <p class="card-text">{!! strip_tags(Str::limit($blog->description, 150, '...')) !!}</p>
                            <a href="{{ route('blog.show', $blog->id) }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            @empty
                <p>No blogs available at the moment.</p>
            @endforelse
        </div>
    </div>
@endsection
