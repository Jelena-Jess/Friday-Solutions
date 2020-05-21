@extends('layouts.app')

@section('content')
<main role="main" class="m-auto">

  <section class="py-5 text-justify bg-light">
    <div class="main">
      <div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column align-items-center">
        <div class="animate-left center-split px-lg-5 px-md-4">
          <p class="p-big text-center text-dark">We're a small web developing studio studio based in Novi Sad, Serbia. You'll always deal with an owner of the company.</p>
        </div>
        <div class="animate-right center-split">
          <img src="/images/about.png" alt="">
        </div>
      </div>
    </div>
  </section>

  <section class="py-5 bg-dark">
    <div class="main">
      <div class="contact-form d-flex flex-column align-items-center justify-content-center m-auto">
        <div class="d-flex flex-row py-5 border-bottom">
          <div>
            <svg class="text-light bi bi-house-fill" width="6em" height="6em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 01-1.5 1.5h-9A1.5 1.5 0 012 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 011.414 0l6.647 6.646a.5.5 0 01-.708.708L8 2.207 1.354 8.854a.5.5 0 11-.708-.708L7.293 1.5z" clip-rule="evenodd"/>
            </svg>
          </div>
          <div class="ml-4">
            <h2 class="pink-text">WHO WE ARE</h2>
            <p class="text-light">Owner-run means every call and email is answered by us. Superior productivity and quality are maintained by doing all work in-house.</p>
          </div>
        </div>
        <div class="d-flex flex-row py-5 border-bottom">
          <div>
            <svg class="text-light bi bi-chat-dots-fill" width="6em" height="6em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 01-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 11-2 0 1 1 0 012 0zm4 0a1 1 0 11-2 0 1 1 0 012 0zm3 1a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
            </svg>
            </div>
          <div class="ml-4">
            <h2 class="pink-text">WHY WE'RE DIFFERENT</h2>
            <p class="text-light">We cut through the BS. You won’t get jargon and buzz words thrown at you, instead we use easy to understand language to get our point across.</p>
          </div>
        </div>
        <div class="d-flex flex-row py-5 border-bottom">
          <div>
            <svg class="text-light bi bi-clock-fill" width="6em" height="6em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M16 8A8 8 0 110 8a8 8 0 0116 0zM8 3.5a.5.5 0 00-1 0V9a.5.5 0 00.252.434l3.5 2a.5.5 0 00.496-.868L8 8.71V3.5z" clip-rule="evenodd"/>
            </svg>
            </div>
          <div class="ml-4">
            <h2 class="pink-text">HOW YOU'LL BENEFIT</h2>
            <p class="text-light">Our full-service solutions require minimum time commitments from you, which makes working with us easier and less stressful.</p>
          </div>
        </div>
        <div class="d-flex flex-row py-5">
          <div>
            <svg class="text-light bi bi-x-diamond-fill" width="6em" height="6em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M9.05.435c-.58-.58-1.52-.58-2.1 0L4.047 3.339 8 7.293l3.954-3.954L9.049.435zm3.61 3.611L8.708 8l3.954 3.954 2.904-2.905c.58-.58.58-1.519 0-2.098l-2.904-2.905zm-.706 8.615L8 8.707l-3.954 3.954 2.905 2.904c.58.58 1.519.58 2.098 0l2.905-2.904zm-8.615-.707L7.293 8 3.339 4.046.435 6.951c-.58.58-.58 1.519 0 2.098l2.904 2.905z" clip-rule="evenodd"/>
            </svg>
          </div>
          <div class="ml-4">
            <h2 class="pink-text">WHAT YOU’LL GET</h2>
            <p class="text-light">The truth. We don’t make promises we can’t keep and won’t tell you just anything to make the sale but instead, offer the best solution to your problem.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  
  <section class="py-5 bg-light">
    <div class="main py-5">
      <h1 class="text-center text-dark">WHAT DO WE BELIEVE IN?</h1>
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
                    <h2 class="py-2">LISTENING</h2>
                    <h3>We believe listening is the key to solving your problems.</h3>
                  </div>
                </div>
              </div>
              <div class="slide slide_2">
                <div class="slide-content">
                  <div>
                    <h2 class="py-2">RELATIONSHIPS</h2>
                    <h3>We believe in building long-term relationships with you.</h3>
                  </div>
                </div>
              </div>
              <div class="slide slide_3">
                <div class="slide-content">
                  <div>
                    <h2 class="py-2">WEBSITES ROCK</h2>
                    <h3>We believe your website is the centerpiece of all your marketing.</h3>
                  </div>
                </div>
              </div>
              <div class="slide slide_4">
                <div class="slide-content">
                  <h2 class="py-2">YOUR SUCCESS</h2>
                  <h3>We believe our success is tied to your success.</h3>
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

  <section id="bio" class="p-5 text-justify back-pink">
    <div class="main py-5">
      <div class="d-flex flex-column justify-content-center">
        <h1 class="text-dark text-center">START YOUR PROJECT WITH US</h1>
        <div class="separator">
          <div class="line line-left"></div>
          <div class="asterisk"><i class="fas fa-circle"></i></div>
          <div class="line line-right"></div>
        </div>
        <p class="p-big text-dark text-center mt-4 mb-5">Our engineers are ready to help you. Contact us now and we will answer you today.</p>
        <div class="text-center">
          <a href="" class="btn">GET IN TOUCH</a>
        </div>
      </div>
    </div>
  </section>

  </main>
    
@endsection