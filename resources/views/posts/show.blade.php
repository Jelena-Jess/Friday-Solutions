@extends('layouts.app')

@section('content')
<main role="main">

  <section>
    <div class="blog-link text-center bg-light pt-4">
      <a href="/posts" class="text-dark">Blog Home</a> &rarr; <a href="" class="text-dark">Blog Category</a>
    </div>
  </section>

  <section class="py-5 bg-light">
    <div class="main border-bottom">
      <div class="blog-post mx-auto d-flex flex-column align-items-center justify-content-center">
        <h1 class="align-self-start pink-text">{{$post->title}}</h1>
        <div class="mt-3 align-self-start">
          <p class="blog-author">Author: {{$post->user->name}}</p>
          <p>{{$post->created_at}}</p>
        </div>
        <div class="mt-2 mb-5">
          <img src="/storage/cover_images/{{$post->cover_image}}" alt="">
        </div>

        <div class="px-xl-5 px-lg-4 px-md-3 px-sm-3 px-3">
          <p class="p-big">{!!$post->body!!}</p>
        </div>

      </div>
    </div>
  </section>

  <section class="py-5 bg-light d-none d-sm-none d-md-block">
    <div class="main">
      <div class="blog-post mx-auto px-xl-5 px-lg-4 px-md-3 px-sm-3 px-3">
        <div class="related-posts">
          <h2 class="related pink-text">SOME RELATED POSTS</h2>
          <div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column justify-content-around mt-4">
            @foreach($posts as $post)
              
            <div class="cards">
              <div class="inner">
                <a href="/posts/{{$post->id}}"><img src="/storage/cover_images/{{$post->cover_image}}" alt=""></a>
              </div>
              <div class="card-body blog-text">
                <h3 class="pt-3"><a href="/posts/{{$post->id}}" class="text-dark">{{$post->title}}</a></h3>
                <p class="card-text">{!! $post->body !!}</p>
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