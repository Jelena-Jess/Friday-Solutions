@extends('layouts.app')

@section('title', 'Contact us')

@section('content')
  <main role="main" class="bg-light mx-auto pb-5">

    <section class="mb-5 text-justify">
      <div class="bg-very-light-pink">
        <div class="main d-flex flex-column align-items-center justify-content-center mx-auto">
          {{-- <div class="animate-top">
            <img src="/images/contact.png" alt="">
          </div> --}}
          <div class="px-lg-5 px-md-4">
          </div>
        </div>
      </div>
      <div id="triangle"></div>
    </section>

   

    <section class="contact-form project_plan py-4 text-justify mx-auto">
      
    @if(session()->has('message'))
      <div class="alert alert-secondary" role="alert">
        <h1 class="pink-text">Thank you!</h1> <h4 class="text-dark">{{ session()->get('message') }}</h4>
      </div>
    @endif

    <h3 class="text-center pt-4">Have a question?</h3>
  
    <div class="p-3 m-3">
      <form method="POST" action="{{ route('contact.store') }}">

        <div class="form-group">
          <label for="name" class="col-form-label">Name</label>
          <div class="">
          <input name="name" type="text" class="form-control" value="{{old('name')}}" placeholder="Required field" data-parsley-required-message="Name is required" required autofocus>
          </div>
          <div>{{$errors->first('name')}}</div>
        </div>
    
        <div class="form-group">
          <label for="email" class="col-form-label">Email</label>
          <div class="">
          <input name="email" type="text" class="form-control{{$errors->has('email')}}" value="{{old('email')}}" placeholder="Required field" data-parsley-required-message="Email is required" required autofocus>
          </div>
          <div>{{$errors->first('email')}}</div>
        </div>
    
        <div class="form-group">
          <label for="phone" class="col-form-label">Phone number</label>
          <div class="">
          <input name="phone" type="text" class="form-control{{$errors->has('phone')}}" value="{{old('phone')}}" placeholder="Required field" data-parsley-required-message="Phone number is required" required autofocus>
          </div>
          <div>{{$errors->first('phone')}}</div>
        </div>
    
        <div class="form-group">
        <label for="message" class="col-form-label">Message</label>
        <div class="">
        <textarea name="message" class="form-control z-depth-1 {{$errors->has('message') ? ' is-invalid' : ''}}" value="{{old('message')}}" placeholder="Required field" data-parsley-required-message="Please write the message" required autofocus rows="7"></textarea>
        </div>
        </div>
    
        @csrf

        <div class="text-center pt-4">
          <button type="submit" class="btn">Submit</button>
        </div>
  
      </form>
    </div>
    </section>
  </main>
    
@endsection