@extends('layouts.app')

@section('title', 'Blog-Design')

@section('content')
<main role="main" class="m-auto">

  <section>
    <div class="blog-link text-center bg-very-light-pink pt-4">
      <a href="/posts" class="text-dark">Blog Home</a> &rarr; Design
    </div>
  </section>

  <section class="py-5 text-justify bg-very-light-pink">
    <div class="main my-3">
      <div class="d-flex flex-column justify-content-center align-items-center">
        <div class="w-75 mx-auto">
          <p class="text-center"><span class="pink-text">Visual</span> communication, art direction. Web layouts and typography. Graphic design, interface design, user experience design, illustration, photography, artwork. Creative, strategic, and technical approaches to crafting great interfaces. Visual styles, influences, and trends.</p>
          <div class="text-center">
            <a href="" class="btn">SUBSCRiBE</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-light py-5">
    <div class="py-5">

      <div class="pt-4 d-flex flex-wrap justify-content-center">
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