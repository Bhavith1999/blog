<html>
<head>
    <title>Blog Details</title>
</head>
<body>
    <h1>{{ $blog->title }}</h1>
    <p>{!! $blog->description !!}</p>
    <img src="{{ asset('storage/blog_images/' . $blog->image_file) }}" alt="{{ $blog->title }}" style="width: 100%; height: 100%; object-fit: cover;">
</body>
</html>
