@extends('layouts.app')

@section('title', 'Blog-Inspiration')

@section('content')
<main role="main" class="m-auto">

  <section class="bg-light-pink">
    <div class="blog-link text-center pt-4">
      <a href="/blog" class="text-dark">Blog Home</a>
    </div>
  </section>

  <section class="text-justify bg-light-pink">
    <div class="main">
      <div class="py-5 d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column align-items-center">
        <div class="center-split px-lg-5 px-md-4">
          <p>Check out our articles covering all facets of websites. We write about topics that business owners often ask us about and hope you find them helpful too.</p>
          <p class="mt-5">If you’re interested in web maintenance, here’s a link to our managed plans.</p>
          <div class="text-center">
            <a href="" class="btn">GET IN TOUCH</a>
          </div>
        </div>
        <div class="center-split">
          <img src="/images/blog.png" alt="">
        </div>
      </div>
    </div>
  </section>

  <section class="bg-grey">
    <div class="mx-5 py-5">

      <div class="pt-4 d-flex flex-wrap text-align-center justify-content-center">
        @if(count($posts) > 0)
        @foreach($posts as $post)
          <div class="blog">
            <div class="blog-image inner">
              <a href="{{ route('posts.show', ['post' => $post]) }}"><img src="/storage/cover_images/{{$post->cover_image}}" alt=""></a>
            </div>
            <div class="blog-text p-3">
              <p>{{$post->category->name}}</p>
            <h3 class="pt-3"><a href="/posts/{{$post->id}}" class="text-dark">{{$post->title}}</a></h3>
              <p>{!!$post->body!!}</p>
              <p class="small">Author: {{$post->user->name}}</p>
              <p class="small">{{$post->created_at}}</p>
            </div>
          </div>
        @endforeach
        </div> 
        @else
          <p>No posts to show</p>
        @endif
    </div>
  </section>
  
  </main>
    
@endsection