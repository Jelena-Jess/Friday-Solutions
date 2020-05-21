@extends('layouts.app')

@section('content')

  <main id="main" role="main" class="m-auto">
  
    <section id="bio" class="p-5 text-justify bg-dark">
      <div class="main bio py-5 d-flex justify-content-center">
        <div class="animate-right align-self-center">
          <div><img src="/images/computer.png" alt="">
          </div>
          <p class=" animate-left p-big text-light text-center">Looking for a super-slick way to present yourself? Would you like to make your business stand out in the crowd? How about a professional-looking website that works on all devices?</p>
        </div>
      </div>
    </section>

    <section id="bio" class="p-5 text-justify bg-light">
      <div class="main bio py-5 d-flex flex-column justify-content-center">
        <div class="align-self-center">
          <h1 class="text-center text-dark pb-4">Problem Solved!</h1>
          <p class="p-big text-center text-dark">You have come to a place where we turn your ideas into reality. With a simple monthly fee rather than large upfront design costs. Your new mobile-friendly website also includes updates, blogging and more.</p>
          <p class="p-big text-center text-dark">We build websites from scratch. In addition, we can upgrade your old web pages, fix bugs, or add extra functionality to your current website.</p>
          <p class="p-big text-center text-dark">Our final goal is two things: the PERFECT PRODUCT and a HAPPY CUSTOMER. We strive to be impeccable in all aspects, from creative design to flawless code.</p> 
        </div>
      </div>
    </section>
    
    <section id="services" class="footer-upper">
      <div class="split left">
        <div class="px-3 align-self-center">
          <p class="text-center"><i class="pt-4 fas fa-code fa-4x text-dark"></i></p>
          <h2 class="text-center font-weight-bold text-dark py-4 border-bottom">Web Design & Development</h2>
          
          <p class="p-big text-center font-weight-bold pb-2 text-dark">One of a kind web design solutions. Each line of code is not just pure code, but art.</p>
          <p>What we offer is cutting-edge web design and branding solutions. We strive to go an extra mile in order to provide our clients with a perfect digital experiences.</p>
          <div class="text-center">
            <a href="/website" class="btn">Learn more</a>
          </div>
        </div>
      </div>

      <div class="split center">
        <div class="px-3 align-self-center">
          <p class="text-center"><i class="pt-4 fab fa-pied-piper fa-4x text-dark"></i></p>
           <h2 class="text-center font-weight-bold text-dark py-4 border-bottom">Logo Design</h2>
          
           <p class="p-big text-center font-weight-bold pb-2 text-dark">We see logo as your personal stamp.</p>
           <p>We see logo as your personal stamp. By using appropriate and effective colors, we define your brand identity and create inspiring narratives which transmit the message and arouse emotions.</p>
           <div class="text-center">
             <a href="/logo" class="btn">Learn more</a>
           </div>
        </div>
      </div>

      <div class="split right">
        <div class="px-3 align-self-center">
          <p class="text-center"><i class="pt-4 fas fa-pencil-alt fa-4x text-dark"></i></p>
          <h2 class="text-center font-weight-bold text-dark py-4 border-bottom">SEO & Content Management</h2>
        
          <p class="p-big text-center font-weight-bold pb-2 text-dark">A good story is the beginning of everything.</p>
          <p>Copywriting goes hand in hand with your website’s SEO (search engine optimisation), which enables Google to find your website when potential customers search for your products or services.</p>
          <div class="text-center">
            <a href="/content" class="btn">Learn more</a>
          </div>
        </div>
      </div>
    </section>

    <section id="" class="py-5 bg-dark">
      <div class="main bio py-5">
        <div class="d-flex flex-column align-items-center justify-content-center">
          <h1 class="text-light text-center">ABOUT US</h1>
          <h4 class="text-light  text-center mt-4 mb-5">Grow your business online is the driving force behind Atilus. We’ve been in business for 13 years and have worked on thousands of projects. We’re passionate, hard-working, and most of all, we love helping our clients do great things on the web.</h4>
          <div class="text-center">
            <a href="" class="btn">Learn more</a>
          </div>
        </div>
      </div>
    </section>

    <section id="" class="p-5 bg-light">
      <div class="main py-5">
        <div class="d-flex flex-column justify-content-center">
          <div class="">
            <h1 class="text-dark text-center">GROW YOUR BUSINESS ONLINE</h1>
            <div class="separator">
              <div class="line line-left"></div>
              <div class="asterisk"><i class="fas fa-circle"></i></div>
              <div class="line line-right"></div>
            </div>
            <p class="p-big text-center text-dark mt-3 mb-5">The digital world is changing fast, and your business should be ready to embrace what's next. Ready to work together on a great website that gets results?</p>
          </div>
          <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column justify-content-around">
            <div class="reveal plan-box align-self-center border m-3 p-3">
              <div><i class="icon fas fa-mobile-alt fa-2x"></i></div>
              <h2 class="text-center mt-4 mb-3">Schedule a Call</h2>
              <p class="text-center">We’re here to help you grow your business. Talk to us to see how we can help.</p>
            </div>
            <div class="reveal plan-box align-self-center border m-3 p-3">
              <div><i class="icon far fa-map fa-2x"></i></div>
              <h2 class="text-center mt-4 mb-3">Plan it</h2>
              <p class="text-center">We’ll outline your goals together and create a plan to help you get the most of your website</p>
            </div>
            <div class="reveal plan-box align-self-center border m-3 p-3">
              <div><i class="icon fas fa-globe fa-2x"></i></div>
              <h2 class="text-center mt-4 mb-3">Grow online</h2>
              <p class="text-center">We’ll execute on our strategy and continue to refine and evolve to get more ROI from your website.</p>
            </div>
          </div>
          <div class="text-center mt-5">
            <a href="/contact" class="btn">Schedule a call today</a>
          </div>
        </div>
      </div>
    </section>

    <section id="bio" class="p-5 text-justify bg-grey">
      <div class="main py-5">
        <div class="d-flex flex-column justify-content-center">
          <h1 class="text-dark text-center">START YOUR PROJECT WITH US</h1>
          <div class="separator">
            <div class="line line-left"></div>
            <div class="asterisk"><i class="fas fa-circle"></i></div>
            <div class="line line-right"></div>
          </div>
          <h4 class="text-dark text-center mt-4 mb-5">Our engineers are ready to help you. Contact us now and we will answer you today.</h4>
          <div class="text-center">
            <a href="" class="btn">GET IN TOUCH</a>
          </div>
        </div>
      </div>
    </section>

    <section id="bio" class="p-5 text-justify bg-light">
      <div class="py-5">
        <div class="main d-flex flex-column justify-content-center">
          <h1 class="text-center">LATEST BLOG POSTS</h1>
          <div class="separator">
            <div class="line line-left"></div>
            <div class="asterisk"><i class="fas fa-circle"></i></div>
            <div class="line line-right"></div>
          </div>
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
    </section>

  </main>
  
@endsection
