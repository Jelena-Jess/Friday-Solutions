@extends('layouts.app')

@section('title', 'Blog Home | Friday Solutions Blog')

@section('content')
<main role="main" class="m-auto">

  <section class="py-5 back-light">
    <div class="main">
      <div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column justify-content-center align-items-center">
        <div class="animate-left center-split px-lg-5 px-md-4">
          <p>We have a collection of articles on websites, video, infographics and small business marketing. Please choose from any category or see all the latest articles.</p>
        </div>
        <div class="animate-right center-split">
          <img src="/images/blog.png" alt="">
        </div>
      </div>
    </div>
  </section>

   <section id="services" class="py-5 text-left back-dark">
      <div class="main py-5">

        <div class="d-flex flex-lg-row flex-md-row flex-sm-column flex-column justify-content-center">

          <div class="project align-self-center">
            <div class="front">
              <p class="text-center"><i class="fas fa-palette fa-5x text-light pb-4"></i></p>
              <h2 class="text-center text-light py-4">Web Design & Development</h2>
            </div>

            <div class="back">
              <p class="text-center font-italic pb-2 text-dark">One of a kind web design solutions. Each line of code is not just pure code, but art.</p>
              <div class="text-center">
                <a href="" class="btn">Learn more</a>
              </div>
            </div>
          </div>

          <div class="project align-self-center">
            <div class="front">
              <p class="text-center"><i class="fas fa-palette fa-5x text-light pb-4"></i></p>
              <h2 class="text-center text-light py-4">Web Design & Development</h2>
            </div>

            <div class="back">
              <p class="text-center font-italic pb-2 text-dark">One of a kind web design solutions. Each line of code is not just pure code, but art.</p>
              <div class="text-center">
                <a href="" class="btn">Learn more</a>
              </div>
            </div>
          </div>

          <div class="project align-self-center">
            <div class="front">
              <p class="text-center"><i class="fas fa-palette fa-5x text-light pb-4"></i></p>
              <h2 class="text-center text-light py-4">Web Design & Development</h2>
            </div>

            <div class="back">
              <p class="text-center font-italic pb-2 text-dark">One of a kind web design solutions. Each line of code is not just pure code, but art.</p>
              <div class="text-center">
                <a href="" class="btn">Learn more</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

  <section id="plans" class="py-5 back-dark">
    <div class="main my-5">
      <div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column text-align-center justify-content-center">

        <div class="blog-card m-3 mx-auto bg-very-light-pink">
          <a href="/blog/coding"><img src="/images/blog.png" alt=""></a>
        </div>
        <div class="blog-card m-3 mx-auto bg-pink">
          <a href="/blog/design"><img src="/images/blog.png" alt=""></a>
        </div>
        <div class="blog-card m-3 mx-auto bg-light-pink">
          <a href="/blog/inspiration"><img src="/images/blog.png" alt=""></a>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-light">
    <div class="mx-5 py-5">
      <h1 class="text-center">LATEST POSTS</h1>
      
      <div class="separator">
        <div class="line line-left"></div>
        <div class="asterisk"><i class="fas fa-circle"></i></div>
        <div class="line line-right"></div>
      </div>

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
        {{$posts->links()}}
        @else
          <p>No posts to show</p>
        @endif

    </div>
  </section>
  
  </main>
    
@endsection