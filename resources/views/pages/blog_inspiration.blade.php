@extends('layouts.app')

@section('title', 'Blog-Inspiration')

@section('content')
<main role="main" class="m-auto">

  <section>
    <div class="blog-link text-center grey pt-4">
      <a href="/posts" class="text-dark">Blog Home</a> &rarr; Inspiration
    </div>
  </section>

  <section class="py-5 text-justify grey">
    <div class="main my-3">
      <div class="d-flex flex-column justify-content-center align-items-center">
        <div class="w-75 mx-auto">
          <p class="text-center">Check out our articles covering all facets of websites. We write about topics that business owners often ask us about and hope you find them helpful too.</p>
          <p class="text-center">If you’re interested in web maintenance, here’s a link to our managed plans.</p>
          <div class="text-center">
            <a href="" class="btn">GET IN TOUCH</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-light">
    <div class="mx-5 py-5">

      <div class="pt-4 d-flex flex-wrap justify-content-center">
        @if(count($posts) > 0)
        @foreach($posts as $post)
          <div class="blog">
            <div class="blog-image inner">
              <a href="{{ route('posts.show', ['post' => $post]) }}"><img src="/storage/cover_images/{{$post->cover_image}}" alt=""></a>
            </div>
            <div class="blog-text p-3">
              <p class="mb-auto"><a href="" class="text-dark">{{$post->category->name}}</a></p>
              <h3 class="mb-auto"><a href="{{ route('posts.show', ['post' => $post]) }}" class="text-dark">{{$post->title}}</a></h3>
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