@extends('layouts.app')

@section('title', 'Blog Home | Friday Solutions Blog')

@section('content')
<main role="main" class="m-auto">

  <section class="p-5 back-light">
    <div class="main p-5">
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

   <section id="services" class="p-5 text-left bg-grey">
      <div class="main py-5"> 
        
        <h1 class="text-center">BLOG CATEGORIES</h1>
        <div class="separator pb-4">
          <div class="line line-left"></div>
          <div class="asterisk"><i class="fas fa-circle"></i></div>
          <div class="line line-right"></div>
        </div>

        <div class="pt-4 d-flex flex-lg-row flex-md-row flex-sm-column flex-column justify-content-center">

          <div class="project align-self-center">
            <div class="front bg-light-pink">
              <h2 class="text-center pink-text py-4">Coding</h2>
            </div>

            <div class="back">
              <p class="text-center font-italic pb-2 text-dark">One of a kind web design solutions. Each line of code is not just pure code, but art.</p>
              <div class="text-center">
                <a href="/blog/coding" class="btn">Learn more</a>
              </div>
            </div>
          </div>

          <div class="project align-self-center">
            <div class="front bg-very-light-pink">
              <h2 class="text-center pink-text py-4">Design</h2>
            </div>

            <div class="back">
              <p class="text-center font-italic pb-2 text-dark">One of a kind web design solutions. Each line of code is not just pure code, but art.</p>
              <div class="text-center">
                <a href="/blog/design" class="btn">Learn more</a>
              </div>
            </div>
          </div>

          <div class="project align-self-center">
            <div class="front grey">
              <h2 class="text-center pink-text py-4">Inspiration</h2>
            </div>

            <div class="back">
              <p class="text-center font-italic pb-2 text-dark">One of a kind web design solutions. Each line of code is not just pure code, but art.</p>
              <div class="text-center">
                <a href="/blog/inspiration" class="btn">Learn more</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

  <section class="bg-light py-5">
    <div class="mx-5 py-5">
      <h1 class="text-center">LATEST POSTS</h1>
      
      <div class="separator">
        <div class="line line-left"></div>
        <div class="asterisk"><i class="fas fa-circle"></i></div>
        <div class="line line-right"></div>
      </div>

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
        {{$posts->links()}}
        @else
          <p>No posts to show</p>
        @endif

    </div>
  </section>
  
  </main>
    
@endsection