@extends('layouts.app')

@section('style')
@endsection

@section('content')
<div class="container-fluid bg-primary px-0 px-md-5 mb-5">
  <div class="row align-items-center px-3">
    <div class="col-lg-6 text-center text-lg-left"> 
      <h1 class="display-2 font-weight-bold text-white">DESIGN A BLOG</h1>                
        <p class="text-white mb-4">
          You’ve got the technical and practical tidbits down — now it’s time to write your very first blog post. And nope, this isn’t the space to introduce yourself and your new blog (i.e. “Welcome to my blog! This is the topic I’ll be covering. Here are my social media handles. Will you please follow?”).
          Start with “low-hanging fruit,” writing about a highly specific topic that serves a small segment of your target audience.
          That seems unintuitive, right? If more people are searching for a term or a topic, that should mean more readers for you.
          But that’s not true. If you choose a general and highly searched topic that’s been covered by major competitors or more established brands, it’s unlikely that your post will rank on the first page of search engine results pages (SERPs). Give your newly born blog a chance by choosing a topic that few bloggers have written about.
        </p>
      </div>
      <div class="col-lg-6 text-center text-lg-right">
        <img class="img-fluid mt-5" src="{{ asset('front/img/blog.jpg') }}" alt="" /><br>
      </div>
    </div>
  </div>
     
  <div class="container-fluid pt-5">
    <div class="container">
      <div class="text-center pb-2">
        <p class="section-title px-5">
          <span class="px-2">Latest Blog</span>
        </p>
        <h1 class="mb-4">Latest Articles From Blog</h1>
      </div>
      <div class="row pb-3">
        @foreach($getRecentPost as $blog)
          <div class="col-lg-4 mb-4">
            <div class="card border-0 shadow-sm mb-2">
              <img class="card-img-top mb-2" src="{{ $blog->getImage() }}" style="height:233px; width:100%; object-fit:cover;" alt="{{ $blog->title }}" />
              <div class="card-body bg-light text-center p-4">
                <h4 class="">{{ $blog->title }}</h4>
                <div class="d-flex justify-content-center mb-3">
                  <small class="mr-3"><i class="fa fa-user text-primary"></i> {{ $blog->user_name }}</small>
                  <small class="mr-3"><i class="fa fa-folder text-primary"></i> {{ $blog->category_name }}</small>
                  <small class="mr-3"><i class="fa fa-comments text-primary"></i> {{ $blog->getCommentCount() }}</small>
                </div>
                <p>{!! Str::limit($blog->description, 150, '...') !!}</p>
                <a href="{{ url($blog->slug) }}" class="btn btn-primary px-4 mx-auto my-2">Read More</a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>

  <div class="container-fluid pt-5">
    <div class="container">
      <div class="text-center pb-2">
        <p class="section-title px-5">
          <span class="px-2">Our Teams</span>
        </p>
          <h1 class="mb-4">bloggers</h1>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3 text-center team mb-5">
          <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
            <img class="img-fluid w-100" src="{{ asset('front/img/team-1.jpg') }}" alt="" />
            <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
              <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-twitter"></i></a>
              <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#" ><i class="fab fa-facebook-f"></i></a>
              <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
          <h4>Julia Smith</h4>
        </div>
        <div class="col-md-6 col-lg-3 text-center team mb-5">
          <div class="position-relative overflow-hidden mb-4"style="border-radius: 100%">
            <img class="img-fluid w-100" src="{{ asset('front/img/team-2.jpg') }}" alt="" />
          <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-twitter"></i></a>
            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
        <h4>Jhon Doe</h4>
      </div>
      <div class="col-md-6 col-lg-3 text-center team mb-5">
        <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
          <img class="img-fluid w-100" src="{{ asset('front/img/team-3.jpg') }}" alt="" />
        <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
          <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-twitter"></i></a>
          <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-facebook-f"></i></a>
          <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
      <h4>Mollie Ross</h4>
    </div>
    <div class="col-md-6 col-lg-3 text-center team mb-5">
      <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
        <img class="img-fluid w-100" src="{{ asset('front/img/team-4.jpg') }}" alt="" />
        <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
          <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#" ><i class="fab fa-twitter"></i ></a>
          <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-facebook-f"></i></a>
          <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
      <h4>Donald John</h4>
    </div>
  </div>
</div>

@endsection

@section('stcipt')
@endsection
