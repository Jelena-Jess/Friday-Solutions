@extends('layouts.app')

@section('title', 'About | English with Ellen')


@section('content')
<main role="main" class="m-auto">

  <section class="py-5 text-justify bg-light">
    <div class="main">
      <div class="d-flex flex-column justify-content-center">
        <div class="py-5 w-75 mx-auto">
          <h3 class="text-center">
            </h3>
          <a href="{{ route('home') }}"><img src="/images/about.jpg" alt="Logo"></a>
        </div>
          {{-- <img src="/images/about.png" alt="" class="animate-right mx-auto"> --}}
      </div>
    </div>
  </section>

  <section class="py-5 bg-dark-color">
    <div class="main">
      <div class="d-flex flex-column align-items-start justify-content-center px-5 m-auto">
        <div class="d-flex flex-row py-5 border-bottom">
          <div>
            <svg class="text-light bi bi-house-fill" width="6em" height="6em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 01-1.5 1.5h-9A1.5 1.5 0 012 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 011.414 0l6.647 6.646a.5.5 0 01-.708.708L8 2.207 1.354 8.854a.5.5 0 11-.708-.708L7.293 1.5z" clip-rule="evenodd"/>
            </svg>
          </div>
          <div class="ml-4">
            <h2 class="pink-text">WHO I AM</h2>
            <p class="text-light">I'm Jelena Petkov. I help people ace Cambridge English exams. For more than a decade
              I've been an exams trainer, helping more than 150 people pass their Cambridge English.
              exams.</p>
          </div>
        </div>
        <div class="d-flex flex-row py-5 border-bottom">
          <div>
            <svg class="text-light bi bi-chat-dots-fill" width="6em" height="6em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 01-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 11-2 0 1 1 0 012 0zm4 0a1 1 0 11-2 0 1 1 0 012 0zm3 1a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
            </svg>
            </div>
          <div class="ml-4">
            <h2 class="pink-text">WHY I AM DIFFERENT</h2>
            <p class="text-light"></p>
          </div>
        </div>
        <div class="d-flex flex-row py-5 border-bottom">
          <div>
            <svg class="text-light bi bi-clock-fill" width="6em" height="6em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M16 8A8 8 0 110 8a8 8 0 0116 0zM8 3.5a.5.5 0 00-1 0V9a.5.5 0 00.252.434l3.5 2a.5.5 0 00.496-.868L8 8.71V3.5z" clip-rule="evenodd"/>
            </svg>
            </div>
          <div class="ml-4">
            <h2 class="pink-text">HOW YOU WILL BENEFIT</h2>
            <p class="text-light">Many people who have got their  Cambridge English certificate with me have entered their desired universities, some needed the certificate to move
              abroad, others have built successful international careers.</p>
          </div>
        </div>
        <div class="d-flex flex-row py-5">
          <div>
            <svg class="text-light bi bi-x-diamond-fill" width="6em" height="6em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M9.05.435c-.58-.58-1.52-.58-2.1 0L4.047 3.339 8 7.293l3.954-3.954L9.049.435zm3.61 3.611L8.708 8l3.954 3.954 2.904-2.905c.58-.58.58-1.519 0-2.098l-2.904-2.905zm-.706 8.615L8 8.707l-3.954 3.954 2.905 2.904c.58.58 1.519.58 2.098 0l2.905-2.904zm-8.615-.707L7.293 8 3.339 4.046.435 6.951c-.58.58-.58 1.519 0 2.098l2.904 2.905z" clip-rule="evenodd"/>
            </svg>
          </div>
          <div class="ml-4">
            <h2 class="pink-text">HOW I CAN HELP YOU</h2>
            <p class="text-light">Have the world at your feet.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  
  <section class="py-5 bg-grey">
    <div class="main py-5">
      <h1 class="text-center">MY CORE VALUES</h1>
      <div class="separator">
        <div class="line line-left"></div>
        <div class="asterisk"><i class="fas fa-circle"></i></div>
        <div class="line line-right"></div>
      </div>
      <div id="slider" class="pt-4">
        <input type="radio" name="slider" id="slide1" checked>
        <input type="radio" name="slider" id="slide2">
        <input type="radio" name="slider" id="slide3">
        <input type="radio" name="slider" id="slide4">
        <div id="slides">
          <div id="overflow">
            <div class="inner">
              <div class="slide slide_1">
                <div class="slide-content">
                  <div>
                    <h3 class="py-2">THINKING DEEPLY BEFORE WE ACT</h3>
                    <h5>Your project needs are deeply researched to ensure that your future website provides value to your end users.</h5>
                  </div>
                </div>
              </div>
              <div class="slide slide_2">
                <div class="slide-content">
                  <div>
                    <h3 class="py-2">RELATIONSHIPS</h3>
                    <h5>We believe in building long-term relationships with our clients.</h5>
                  </div>
                </div>
              </div>
              <div class="slide slide_3">
                <div class="slide-content">
                  <div>
                    <h3 class="py-2">RELIABILITY IS MY TOP PRIORITY</h3>
                    <h5>We provide reliable software products and services at competitive prices and deliver them on time.</h5>
                  </div>
                </div>
              </div>
              <div class="slide slide_4">
                <div class="slide-content">
                  <h3 class="py-2">YOUR SUCCESS</h3>
                  <h5>My success is tied to Your success.</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="controls">
          <label for="slide1"></label>
          <label for="slide2"></label>
          <label for="slide3"></label>
          <label for="slide4"></label>
        </div>
        <div id="bullets">
          <label for="slide1"></label>
          <label for="slide2"></label>
          <label for="slide3"></label>
          <label for="slide4"></label>
        </div>
      </div>
    </div>
  </section>

  <section id="bio" class="p-5 text-justify bg-light">
    <div class="main py-5">
      <div class="d-flex flex-column justify-content-center">
        <h1 class="text-dark text-center">START LEARNING WITH ME</h1>
        <div class="separator">
          <div class="line line-left"></div>
          <div class="asterisk"><i class="fas fa-circle"></i></div>
          <div class="line line-right"></div>
        </div>
        <p class="p-big text-dark text-center mt-4 mb-5">Ready to learn? Contact me today. Can't wait to hear from you!</p>
        <div class="text-center">
          <a href="{{ route('contact.create') }}" class="btn">CONTACT ME</a>
        </div>
      </div>
    </div>
  </section>

  </main>
    
@endsection