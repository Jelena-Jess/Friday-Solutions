@extends('layouts.app')

@section('content')

  <main id="main" role="main" class="m-auto">
  
    <section id="bio" class="p-5 text-justify bg-dark-color">
      <div class="main bio p-5 d-flex justify-content-center">
        <div class="align-self-center">
          <div class="text-center">
            {{-- <img src="/images/computer.png" alt="" class="w-50"> --}}
          </div>
          <h3 class="text-center">Looking for a super-slick way to present yourself? Would you like to make your business stand out in the crowd? How about a professional-looking website that works on all devices?</h3>
        </div>
      </div>
    </section>

    <section id="" class="pt-5 text-justify bg-light">
      <div class="main bio py-5 d-flex flex-column justify-content-center">
        <div class="align-self-center">
          <h1 class="text-center pb-4">You have come to the right place!</h1>
          <p class="text-center">Imagine the free time you'll have when Friday Solutions takes care of your website, updates and blogging. All this is feasible with a simple monthly fee rather than large upfront design costs.</p>
          <p class="text-center">We build websites from scratch, and provide template websites, as well. We strive to be impeccable in all aspects, from creative design to flawless code.</p>
          <p class="text-center">Our final goal is two things: the <span class="pink-text font-weight-bold">PERFECT PRODUCT</span> and a <span class="pink-text font-weight-bold">HAPPY CUSTOMER</span>.</p> 
        </div>
      </div>
    </section>

    <section class="pb-5 bg-light">
      <div class="main pb-5">
        <div class="d-flex flex-column justify-content-center">
          @if(session()->has('message'))
            <div class="alert alert-secondary" role="alert">
              <h3 class="pink-text text-center">Thank you!</h3> 
              <p class="p-big text-dark text-center">{{ session()->get('message') }}</p>
            </div>
          @endif
        
          <div class="subscribe mx-auto">
            <form method="POST" action="{{ route('subscribe.store') }}">
          
              <div class="form-group">
                <div class="">
                <input name="email" type="text" class="form-control{{$errors->has('email')}}" value="{{old('email')}}" placeholder="Your email address" data-parsley-required-message="Email is required" required autofocus>
                </div>
                <div>{{$errors->first('email')}}</div>
              </div>
            
              @csrf
  
              <div class="text-center pt-1">
                <button type="submit" class="btn">Subscribe to our newsletter</button>
              </div>
          
            </form>
          </div>
        </div>
      </div>
    </section> 
    
    <section id="services" class="split-screen">
      <div class="split left">
        <div class="p-5 align-self-center">
          <p class="text-center"><i class="fas fa-code fa-4x"></i></p>
          <h2 class="text-center font-weight-bold py-4 border-bottom">B2 First</h2>
          <div class="d-flex flex-column">
            <p class="p-big text-center font-weight-bold pb-2">User experience is our main guide.</p>
            <p class="text-justify">What we offer is cutting-edge web design and branding solutions. We strive to go an extra mile in order to provide our clients with a perfect digital experience.</p>
            <div class="text-center pt-3">
              <a href="{{ route('website') }}" class="btn">FIND OUT MORE</a>
            </div>
          </div>
        </div>
      </div>

      <div class="split center">
        <div class="p-5 align-self-center">
          <p class="text-center"><i class="fab fa-pied-piper fa-4x"></i></p>
           <h2 class="text-center font-weight-bold py-4 border-bottom">C1 Advanced</h2>
          <div class="d-flex flex-column">
            <p class="p-big text-center font-weight-bold pb-2">We see logo as your personal stamp.</p>
            <p class="text-justify">By using appropriate and effective images, colors and fonts, we define your brand identity and create inspiring narratives which transmit the message and arouse emotions.</p>
            <div class="text-center pt-3">
              <a href="{{ route('logo') }}" class="btn">FIND OUT MORE</a>
            </div>
          </div>
        </div>
      </div>

      <div class="split right">
        <div class="p-5 align-self-center">
          <p class="text-center"><i class="fas fa-pencil-alt fa-4x"></i></p>
          <h2 class="text-center font-weight-bold py-4 border-bottom">C2 Proficiency</h2>
        
          <p class="p-big text-center font-weight-bold pb-2">A good story is the beginning of everything.</p>
          <p class="text-justify">Copywriting goes hand in hand with your website’s SEO, which enables Google to find your website when potential customers search for your products or services.</p>
          <div class="text-center pt-3">
            <a href="{{ route('content') }}" class="btn">FIND OUT MORE</a>
          </div>
        </div>
      </div>
    </section>

    <section id="" class="py-5 bg-light">
      <div class="bio p-5 mx-auto">
        <div class="d-flex flex-column align-items-center justify-content-center">
          <h1 class="text-center">ABOUT ME</h1>
          <h4 class="text-center mt-4 mb-5">Making your business grow online is the driving force behind Friday Solutions. We’re enthusiastic and hard-working, and most of all, eager to help our clients do amazing things.</h4>
          <div class="text-center">
            <a href="{{ route('about') }}" class="btn">Learn more</a>
          </div>
        </div>
      </div>
    </section>

    <section id="" class="p-5 bg-dark-color">
      <div class="main py-5">
        <div class="d-flex flex-column justify-content-center">
          <div class="">
            <h1 class="text-center">EXPAND YOUR BUSINESS ONLINE</h1>
            <div class="separator">
              <div class="line line-left"></div>
              <div class="asterisk"><i class="fas fa-circle"></i></div>
              <div class="line line-right"></div>
            </div>
            <p class="p-big text-center mt-3 mb-5">The digital world is changing rapidly, and your business should keep pace. Ready to work together on a great website that gets results?</p>
          </div>
          <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column justify-content-around">
            <div class="reveal plan-box align-self-center border m-3 p-3">
              <div><i class="icon fas fa-mobile-alt fa-2x"></i></div>
              <h2 class="text-center mt-4 mb-3">Schedule a call</h2>
              <p class="text-center">We’re here to help you expand your business. Talk to us to see how we can help.</p>
            </div>
            <div class="reveal plan-box align-self-center border m-3 p-3">
              <div><i class="icon far fa-map fa-2x"></i></div>
              <h2 class="text-center mt-4 mb-3">Create a strategy</h2>
              <p class="text-center">We’ll define your goals together and create a plan to help you get the most of your website.</p>
            </div>
            <div class="reveal plan-box align-self-center border m-3 p-3">
              <div><i class="icon fas fa-globe fa-2x"></i></div>
              <h2 class="text-center mt-4 mb-3">Grow online</h2>
              <p class="text-center">We’ll execute on our strategy and continue to refine and evolve to get more ROI from your website.</p>
            </div>
          </div>
          <div class="text-center mt-5">
            <a href="{{ route('contact.create') }}" class="btn">Contact us today</a>
          </div>
        </div>
      </div>
    </section>

    <section id="" class="p-5 text-justify bg-grey">
      <div class="main py-5">
        <div class="d-flex flex-column justify-content-center">
          <h1 class="text-center">START YOUR PROJECT WITH US</h1>
          <div class="separator">
            <div class="line line-left"></div>
            <div class="asterisk"><i class="fas fa-circle"></i></div>
            <div class="line line-right"></div>
          </div>
          <h4 class="text-center mt-4 mb-5">Our team is ready to help you. Contact us now and we will answer you today.</h4>
          <div class="text-center">
            <a href="{{ route('contactproject.create') }}" class="btn">LET'S DISCUSS A PROJECT</a>
          </div>
        </div>
      </div>
    </section> 

    <section class="bg-light py-5">
      <div class="py-5">
        <h1 class="text-center">LATEST BLOG POSTS</h1>
        
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
      </div>
    </section>

  </main>
  
@endsection
