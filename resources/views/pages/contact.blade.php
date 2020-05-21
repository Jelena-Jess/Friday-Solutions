@extends('layouts.app')

@section('content')
  <main role="main" class="m-auto">

    <section class="mb-5 text-justify">
      <div class="back-light">
        <div class="main contact-form d-flex flex-column align-items-center justify-content-center mx-auto">
          <div class="animate-top">
            <img src="/images/contact.png" alt="">
          </div>
          <div class="px-lg-5 px-md-4">
          </div>
        </div>
      </div>
      <div id="triangle"></div>
    </section>

     
    


    <section class="contact-form project_plan pt-5 text-justify m-auto">
    <h3 class="text-center pb-4">Have a question?</h3>

    @if(Session::has("success"))
      <div class="alert alert-success">
        <b>Success</b>, your email has been sent.
      </div>
      @endif
  
      <div class="p-3 m-3">
        <form method="POST" action="{{url('send')}}">
          @csrf

          <div class="form-group">
            <label for="" class="col-form-label">Name</label>
            <div class="">
            <input name="name" type="text" class="form-control{{$errors->has('name') ? ' is-invalid' : ''}}" value="{{old('name')}}" placeholder="Required field" data-parsley-required-message="Name is required" required autofocus>
            </div>
          </div>
      
          <div class="form-group">
            <label for="" class="col-form-label">Email</label>
            <div class="">
            <input name="email" type="text" class="form-control{{$errors->has('email') ? ' is-invalid' : ''}}" value="{{old('email')}}" placeholder="Required field" data-parsley-required-message="Email is required" required autofocus>
            </div>
          </div>
      
          <div class="form-group">
            <label for="" class="col-form-label">Phone number</label>
            <div class="">
            <input name="phone" type="text" class="form-control{{$errors->has('phone') ? ' is-invalid' : ''}}" value="{{old('phone')}}" placeholder="Required field" data-parsley-required-message="Phone number is required" required autofocus>
            </div>
          </div>
      
          <div class="form-group">
          <label for="" class="col-form-label">Message</label>
          <div class="">
          <textarea name="message" class="form-control z-depth-1 {{$errors->has('message') ? ' is-invalid' : ''}}" value="{{old('message')}}" placeholder="Required field" data-parsley-required-message="Please write the message" required autofocus rows="7"></textarea>
          </div>
          </div>
      
          <div class="pb-3 mb-3 text-center">
            <button type="submit" class="btn" name="send">Submit</button>
          </div>
    
        </form>
      </div>
    </section>
  </main>
    
@endsection