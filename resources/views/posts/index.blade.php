@extends('layouts.app')

@section('title', 'Blog Home | Friday Solutions Blog')

@section('content')
<main role="main" class="m-auto">

  <section class="p-5 bg-light">
    <div class="main p-5">
      <div class="d-flex flex-column justify-content-center">
        <div class="animate-left w-75 mx-auto">
          <h5 class="text-center">We have a collection of articles on coding, web design, and some which are here only to inspire you. Choose from any category or see all the latest articles.</h5>
        </div>
          <img src="/images/blog.png" alt="" class="animate-right mx-auto">
      </div> 
      <div class="d-flex flex-column justify-content-center">
        @if(session()->has('message'))
          <div class="alert alert-secondary" role="alert">
            <h3 class="pink-text text-center">Thank you!</h3> 
            <p class="p-big text-dark text-center">{{ session()->get('message') }}</p>
          </div>
        @endif
      
        <div class="pt-5 w-50 mx-auto">
          <form method="POST" action="{{ route('subscribe.store') }}">
        
            <div class="form-group">
              <div class="">
              <input name="email" type="text" class="form-control{{$errors->has('email')}}" value="{{old('email')}}" placeholder="Your email address" data-parsley-required-message="Email is required" required autofocus>
              </div>
              <div>{{$errors->first('email')}}</div>
            </div>
          
            @csrf

            <div class="text-center pt-4">
              <button type="submit" class="btn">Subscribe</button>
            </div>
        
          </form>
        </div>
      </div>
    </div>
  </section>

     

  <section id="services" class="p-5 text-left bg-grey">
    <div class="main py-5"> 
    
      <div class="d-flex flex-lg-row flex-md-row flex-sm-column flex-column justify-content-center">

        <div class="project">
          <div class="front bg-light-pink d-flex justify-content-center">
            <h2 class="pink-text py-4 align-self-center">Coding</h2>
          </div>

          <div class="back bg-light-pink d-flex flex-column justify-content-center">
            <p class="text-center align-self-center font-italic pb-2"><span class="pink-text">Learn about:</span> front and back end development for the web; markup, style, scripting, and server-side techniques and technologies; creating websites and applications.</p>
            <div class="text-center">
              <a href="{{ route('blog.development') }}" class="btn">Read posts</a>
            </div>
          </div>
        </div>

        <div class="project">
          <div class="front bg-very-light-pink d-flex justify-content-center">
            <h2 class="pink-text py-4 align-self-center">Design</h2>
          </div>

          <div class="back bg-very-light-pink d-flex flex-column justify-content-center">
            <p class="text-center align-self-center font-italic pb-2"><span class="pink-text">Learn about:</span> visual communication, art direction; web layouts and typography; graphic design, interface design, user experience design, illustration, photography, artwork.</p>
            <div class="text-center">
              <a href="{{ route('blog.design') }}" class="btn">Read posts</a>
            </div>
          </div>
        </div>

        <div class="project">
          <div class="front grey d-flex justify-content-center">
            <h2 class="pink-text py-4 align-self-center">Inspiration</h2>
          </div>

          <div class="back grey d-flex flex-column justify-content-center">
            <p class="text-center align-self-center font-italic pb-2"><span class="pink-text">Learn about:</span> inspirational websites, photography and artwork; web design styles, website types, web design trends, and collections that focus on a particular area of a web page.</p>
            <div class="text-center">
              <a href="{{ route('blog.inspiration') }}" class="btn">Read posts</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="bg-light py-5">
    <div class="py-5">
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