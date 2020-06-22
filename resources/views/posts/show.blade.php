@extends('layouts.app')

@section('title', $post->title.' | Friday Solutions Blog')

@section('content')
<main role="main">

  <section>
    <div class="blog-link text-center bg-light pt-4 px-2">
      <a href="{{ route('posts.index') }}" class="text-dark">Blog Home</a> &rarr; <a href="/blog-{{$post->category->name}}" class="text-dark">{{$post->category->name}}</a> &rarr; {{$post->title}}
    </div>
  </section>

  <section class="py-5 bg-light">
      <div class="blog-post mx-auto d-flex flex-column align-items-center justify-content-center px-xl-5 px-lg-4 px-md-3 px-sm-3 px-3">
        <h1 class="align-self-start pink-text">{{$post->title}}</h1>
        <div class="mt-3 align-self-start">
          <p class="blog-author">Author: {{$post->user->name}}</p>
          <p>{{$post->created_at}}</p>
        </div>
        <div class="mt-2 mb-5">
          <img src="/storage/cover_images/{{$post->cover_image}}" alt="">
        </div>

        <div class="align-self-start">
          <p class="p-big">{!!$post->body!!}</p>
        </div>
    </div>
  </section>

  <section class="py-5 bg-grey">
    <div class="">
      <div class="mx-auto px-xl-5 px-lg-5 px-md-0 px-sm-0 px-0">
        <div class="related-posts mx-auto">
          <h2 class="related pink-text">MORE POSTS</h2>
          <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column justify-content-around mt-4">
            @foreach($posts as $post)
              
            <div class="cards">
              <div class="inner">
                <a href="{{ route('posts.show', ['post' => $post]) }}"><img src="/storage/cover_images/{{$post->cover_image}}" alt=""></a>
              </div>
              <div class="blog-text p-3">
                <div class="mb-auto">
                  <p class="small-text-blog"><a href="/blog-{{$post->category->name}}" >{{$post->category->name}}</a></p>
                </div>
                <div class="mb-auto">
                  <h4 class="font-weight-bold pt-3"><a href="{{ route('posts.show', ['post' => $post]) }}">{{$post->title}}</a></h4>
                </div>
                <div>
                  <p class="small-text-blog">Author: {{$post->user->name}} </p>
                  <p class="small-text-blog">{{$post->created_at->format('d/m/Y')}}</p>
                </div>
              </div>
            </div>
            @endforeach
            </div>
            
          </div>      
        </div>
      </div>

  </section>

</main>
    
@endsection