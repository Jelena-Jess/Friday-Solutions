@extends('layouts.app')

@section('title', 'Contact us')

@section('content')
  <main role="main" class="bg-light mx-auto pb-5">

    <section class="mb-5 text-justify">
      <div class="bg-very-light-pink">
        <div class="main d-flex flex-column align-items-center justify-content-center mx-auto">
          <div class="px-lg-5 px-md-4">
          </div>
        </div>
      </div>
      <div id="triangle"></div>
    </section>

    <section class="my-4 text-justify">
      <div class="contact py-5 bg-grey d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column mx-auto">
        <div class="py-5 text-center">
          <h3 class="pb-3">Location</h3>
          <p>21000 Novi Sad, Serbia</p>
          <p class="pb-3">Tel: +381 (0)62 964 5599</p>
          <p class="pb-3"><a href="" class="pink-link">cambridgeenglish.ellen@gmail.com</a></p>
          <h3>Follow me</h3>
          <div>
            <a href="https://www.facebook.com/cambridgeenglish.ellen"><img src="https://img.icons8.com/ios-filled/50/000000/facebook-new.png" class="fa-icon"/></a> 
            <a href="https://www.linkedin.com/in/jelena-p-25813a10b/"><img src="https://img.icons8.com/ios-filled/50/000000/linkedin-circled.png" class="fa-icon"/></a>
            <a href="https://www.instagram.com/cambridgeenglish.ellen/"><img src="https://img.icons8.com/ios-filled/50/000000/instagram-new.png" class="fa-icon"/></a>
          </div>
        </div>
        <div class="py-5 mx-auto">
          <form method="POST" action="{{ route('contact.store') }}">

            @if(session()->has('message'))
              <div class="py-5 alert alert-secondary" role="alert">
                <h1 class="pink-text">Thank you!</h1> <h4 class="text-dark">{{ session()->get('message') }}</h4>
              </div>
            @endif

            <div class="form-group">
              <div class="">
              <input name="name" type="text" class="form-control" value="{{old('name')}}" placeholder="Name" data-parsley-required-message="Name is required" required autofocus>
              </div>
              <div>{{$errors->first('name')}}</div>
            </div>
        
            <div class="form-group">
              <div class="">
              <input name="email" type="text" class="form-control{{$errors->has('email')}}" value="{{old('email')}}" placeholder="Email" data-parsley-required-message="Email is required" required autofocus>
              </div>
              <div>{{$errors->first('email')}}</div>
            </div>
        
            {{-- <div class="form-group">
              <div class="">
              <input name="phone" type="text" class="form-control{{$errors->has('phone')}}" value="{{old('phone')}}" placeholder="Phone number" data-parsley-required-message="Phone number is required" required autofocus>
              </div>
              <div>{{$errors->first('phone')}}</div>
            </div> --}}
        
            <div class="form-group">
            <div class="">
            <textarea name="message" class="form-control z-depth-1 {{$errors->has('message') ? ' is-invalid' : ''}}" value="{{old('message')}}" placeholder="Your message" data-parsley-required-message="Please write the message" required autofocus rows="7"></textarea>
            </div>
            </div>
            @csrf

            <div class="text-center pt-2">
              <button type="submit" class="btn">Send a message</button>
            </div>
          </form>
        </div>
      </div>
      <div class="mapouter mx-auto d-flex justify-content-center">
        <div class="gmap_canvas">
          <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=novi%20sad%20janka%20veselinovica&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
          <a href="https://thevpndeal.com/nordvpn-coupon/">nordvpn coupon</a>
        </div>
      </div>

    </section>
  </main>
    
@endsection
