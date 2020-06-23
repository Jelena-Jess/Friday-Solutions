@extends('layouts.app')

@section('title', 'Blog-Coding')

@section('content')
<main role="main" class="m-auto">

  <section>
    <div class="blog-link text-center bg-light-pink pt-4">
      <a href="/posts" class="text-dark">Blog Home</a> &rarr; Coding
    </div>
  </section>

  <section class="py-5 text-justify bg-light-pink">
    <div class="main mt-3 mb-5">
      <div class="d-flex flex-column justify-content-center align-items-center">
        <div class="w-75 mx-auto">
          <h4 class="text-center">Read about:</h4>
          <p class="text-center">Front and back end <span class="pink-text">development</span>. Markup, style, scripting, and server-side techniques and technologies. Cross-browser HTML, CSS, and JavaScript. Frameworks and preprocessors. Creating websites and applications. Optimization and performance. Hacks and workarounds.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-light py-5">
    <div class="py-5">

      <div class="d-flex flex-wrap justify-content-center">
        @if(count($posts) > 0)
        @foreach($posts as $post)
          <div class="blog">
            <div class="blog-image inner">
              <a href="{{ route('posts.show', ['post' => $post]) }}"><img src="/storage/cover_images/{{$post->cover_image}}" alt=""></a>
            </div>
            <div class="blog-text p-3">
              <div class="mb-auto">
                <p class="small-text-blog"><a href="/blog-{{$post->category->name}}" >{{$post->category->name}}</a></p>
              </div>
              <div class="mb-auto">
                <h4 class="font-weight-bold pt-3"><a href="{{ route('posts.show', ['post' => $post]) }}">{{$post->title}}</a></h4>
                <p class="blog-description">{{$post->description}}</a></p>
              </div>
              <div class="d-flex justify-content-between align-items-end">
                <p class="small-text-blog">Author: {{$post->user->name}} </p>
                <p class="small-text-blog">{{$post->created_at->format('d/m/Y')}}</p>
              </div>
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