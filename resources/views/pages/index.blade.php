@extends('layouts.app')

@section('content')

  <main id="main" role="main" class="m-auto">
  
    <section id="bio" class="p-5 text-justify bg-light">
      <div class="main bio p-5 d-flex justify-content-center">
        <div class="align-self-center">
          <div class="text-center">
          </div>
          <p class="text-center">There are tons of books, free online material, YouTube videos that can help you pass Cambridge Exams.</p>
          <h1 class="pt-5 text-center">SO, WHY CHOOSE ME?</h1>
          <div class="separator">
            <div class="line line-left"></div>
            <div class="asterisk"><i class="fas fa-circle"></i></div>
            <div class="line line-right"></div>
          </div>
          <h1 class="pb-5 text-center">WELL... TRY TO IMAGINE THIS...</h1>
          
          <p class="text-center mt-3 mb-5">Try to imagine the piece of mind you'll have when you everything you need to study lands right in front of you. No need to dig through a ton of websites. No need to dig for materials you are not sure if they will be enough for you to get ready for the exam. All this is feasible with my simple program.</p>
          <p class="text-center"></p>
          <p class="text-center">My final goal is two things: the <span class="pink-text font-weight-bold">HAPPY LEARNER</span> and an <span class="pink-text font-weight-bold">PASSED EXAM</span>.</p> 
        </div>
      </div>
    </section>

    <section id="" class="p-5 bg-dark-color">
      <div class="main py-5">
        <div class="d-flex flex-column justify-content-center">
          <div class="">
            <h1 class="text-center">LEARN MORE ABOUT THE EXAMS</h1>
            <div class="separator">
              <div class="line line-left"></div>
              <div class="asterisk"><i class="fas fa-circle"></i></div>
              <div class="line line-right"></div>
            </div>
            <p class="p-big text-center mt-3 mb-5">Read about the exam format, etc.</p>
          </div>
          <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column justify-content-around">
            
            <div class="reveal plan-box align-self-center border m-3 p-3">
              <a href="{{ route('website') }}">
              <h2 class="text-center mt-4 mb-3">B2 First</h2>
              <p class="text-center">We’re here to help you expand your business. Talk to us to see how we can help.</p>
              </a>
            </div>
            
            <div class="reveal plan-box align-self-center border m-3 p-3">
              <a href="{{ route('website') }}">
              <h2 class="text-center mt-4 mb-3">C1 Advanced</h2>
              <p class="text-center">We’ll define your goals together and create a plan to help you get the most of your website.</p>
              </a>
            </div>
            <div class="reveal plan-box align-self-center border m-3 p-3">
              <a href="{{ route('website') }}">
              <h2 class="text-center mt-4 mb-3">C2 Proficiency</h2>
              <p class="text-center">We’ll execute on our strategy and continue to refine and evolve to get more ROI from your website.</p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5 bg-light">
      <div class="main py-5">
        <div class="">
          <h1 class="text-center">LEARN FOR FREE</h1>
          <div class="separator">
            <div class="line line-left"></div>
            <div class="asterisk"><i class="fas fa-circle"></i></div>
            <div class="line line-right"></div>
          </div>
          <p class="p-big text-center mt-3 mb-5">Every Tuesday morning, you'll get a fresh newsletter with explanations, exercises.</p>
        </div>
        <div class="d-flex flex justify-content-center">


         <!-- Begin Mailchimp Signup Form -->

          <div id="mc_embed_signup" class="subscribe">
          <form action="https://gmail.us7.list-manage.com/subscribe/post?u=59244673bb68bbdd4fe2f1de9&amp;id=1c613830c5" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
              <div id="mc_embed_signup_scroll" class="form-group">
          <div class="mc-field-group">
            <input type="email" value="" name="EMAIL" placeholder="email address" class="required email" id="mce-EMAIL">
          </div>
            <div id="mce-responses" class="clear">
              <div class="response" id="mce-error-response" style="display:none"></div>
              <div class="response" id="mce-success-response" style="display:none"></div>
            </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
              <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_59244673bb68bbdd4fe2f1de9_1c613830c5" tabindex="-1" value=""></div>
              <div class="clear text-center pt-1"><input type="submit" value="Subscribe" name="subscribe" id="" class="btn"></div>
              </div>
          </form>
          </div>
          <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
          <!--End mc_embed_signup-->


        
          {{-- @if(session()->has('message'))
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
                <button type="submit" class="btn">Subscribe</button>
              </div>
          
            </form>
          </div> --}}
        </div>
      </div>
    </section>
    
    {{-- <section id="services" class="split-screen">
      <div class="split left">
        <div class="p-5 align-self-center">
          <p class="text-center"><i class="fas fa-code fa-4x"></i></p>
          <h2 class="text-center font-weight-bold py-4 border-bottom">Learning Diary</h2>
          <div class="d-flex flex-column">
            <h3 class="text-center font-weight-bold pb-2">A good story is the beginning of everything.</h3>
            <div class="text-center pt-3">
              <a href="{{ route('website') }}" class="btn">READ MORE</a>
            </div>
          </div>
        </div>
      </div>

      <div class="split center">
        <div class="p-5 align-self-center">
          <p class="text-center"><i class="fab fa-pied-piper fa-4x"></i></p>
           <h2 class="text-center font-weight-bold py-4 border-bottom">E-Books</h2>
          <div class="d-flex flex-column">
            <h3 class="text-center font-weight-bold pb-2">A good story is the beginning of everything.</h3>
            <div class="text-center pt-3">
              <a href="{{ route('logo') }}" class="btn">READ MORE</a>
            </div>
          </div>
        </div>
      </div>

      <div class="split right">
        <div class="p-5 align-self-center">
          <p class="text-center"><i class="fas fa-pencil-alt fa-4x"></i></p>
          <h2 class="text-center font-weight-bold py-4 border-bottom">Online Course</h2>
          <h3 class="text-center font-weight-bold pb-2">A good story is the beginning of everything.</h3>
          <div class="text-center pt-3">
            <a href="{{ route('content') }}" class="btn">READ MORE</a>
          </div>
        </div>
      </div>
    </section> --}}

    {{-- <section id="" class="py-5 bg-light">
      <div class="bio p-5 mx-auto">
        <div class="d-flex flex-column align-items-center justify-content-center">
          <h1 class="text-center">MY MISSION</h1>
          <div class="separator">
            <div class="line line-left"></div>
            <div class="asterisk"><i class="fas fa-circle"></i></div>
            <div class="line line-right"></div>
          </div>
          <h4 class="text-center mt-4 mb-5">I have been a Cambridge Exams trainer for 10 years. I have over 100 people I have helped to pass the exam successfully.</h4>
          <div class="text-center">
            <a href="{{ route('about') }}" class="btn">ABOUT ME</a>
          </div>
        </div>
      </div>
    </section> --}}

    <section id="" class="p-5 text-justify bg-very-light-pink">
      <div class="main py-5">
        <div class="d-flex flex-column justify-content-center">
          <h1 class="text-center">START LEARNING WITH ME</h1>
          <div class="separator">
            <div class="line line-left"></div>
            <div class="asterisk"><i class="fas fa-circle"></i></div>
            <div class="line line-right"></div>
          </div>
          <h4 class="text-center mt-4 mb-5">Our team is ready to help you. Contact us now and we will answer you today.</h4>
          <div class="text-center">
            <a href="{{ route('contact.create') }}" class="btn">Contact me today</a>
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
                    <p class="small-text-blog">Topic: <a href="/blog-{{$post->category->name}}" >{{$post->category->name}}</a></p>
                  </div>
                  <div class="mb-auto">
                    <h4 class="font-weight-bold pt-3"><a href="{{ route('posts.show', ['post' => $post]) }}">{{$post->title}}</a></h4>
                    <p class="blog-description">{{$post->description}}</a></p>
                  </div>
                  <div class="d-flex justify-content-between align-items-end">
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
