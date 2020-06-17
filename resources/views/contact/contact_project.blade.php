@extends('layouts.app')

@section('title', 'Project Plan')

@section('content')
  <main role="main" class="bg-light mx-auto pb-5">

    <section class="mb-5 text-justify">
      <div class="back-light">
        <div class="main contact-form d-flex flex-column align-items-center justify-content-center mx-auto">
          <div class="px-lg-5 px-md-4">
          </div>
        </div>
      </div>
      <div id="triangle"></div>
      <div class="pt-5 mx-auto w-75">
        <h1 class="text-center pb-4">Let’s talk about your project</h1>
        <p class="text-center">Fill out the fields important to you. After we examine your proposal, I will contact you to set up a time and discuss your project in further detail.</p>
        <p class="text-center">You should expect to hear from me in a few days.</p> 
      </div>
    </section>

   

    <section class="contact-form project_plan py-4 text-justify mx-auto">

    @if(session()->has('message'))
      <div class="alert alert-secondary" role="alert">
        <h1 class="pink-text">Thank you!</h1> <h4 class="text-dark">{{ session()->get('message') }}</h4>
      </div>
    @endif

    <div class="p-3 m-3">
        <form method="POST" action="{{ route('contactproject.store') }}">
    
          <div>
            <h3 class="text-center m-3 py-3">Basic information</h3>
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
            </div>
          
            <div class="my-5">
              <h3 class="text-center m-3 pt-5 pb-3">About Your Company/Product</h3>
              <div class="form-group">
                <label for="" class="col-form-label">Company/Product name</label>
                <div class="">
                <input name="company_name" type="text" class="form-control" id="" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-form-label">Desired web address</label>
                <div class="">
                <input name="web_address" type="text" class="form-control" id="" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-form-label">Describe your company/product</label>
                <div class="">
                <textarea name="description" class="form-control z-depth-1" rows="7" placeholder=""></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-form-label">What do you want to achieve with this website?</label>
                <div class="">
                <textarea name="achieve" class="form-control z-depth-1" rows="7" placeholder=""></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-form-label">What are the long-term goals for the website?</label>
                <div class="">
                <textarea name="goals" class="form-control z-depth-1" rows="7" placeholder=""></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-form-label">What are the aims and objectives of the project?</label>
                <div class="">
                <textarea name="aims" class="form-control z-depth-1" rows="7" placeholder=""></textarea>
                </div>
              </div>
                <div class="form-group">
                <label for="" class="col-form-label">Budget</label>
                <div class="">
                <input name="budget" type="text" class="form-control" id="" placeholder="">
                </div>
              </div>
                <div class="form-group">
                <label for="" class="col-form-label">Deadline</label>
                <div class="">
                <input name="deadline" type="text" class="form-control" id="" placeholder="">
                </div>
              </div>
            </div>
          
            <div class="my-5">
              <h3 class="text-center m-3 pt-5 pb-3">Audience</h3>
              <div class="form-group">
                <label for="" class="col-form-label">Who are your target audience?</label>
                <div class="">
                <textarea name="audience" class="form-control z-depth-1" rows="7" placeholder=""></textarea>
                </div>
              </div>
                <div class="form-group">
                <label for="" class="col-form-label">How will your audience interact with the website? <br><small>Read content, watch video, enroll in a course, post data etc.</small>
                </label>
                <div class="">
                <textarea name="interact" class="form-control z-depth-1" rows="7" placeholder=""></textarea>
                </div>
              </div>
            </div>
          
            <div class="my-5">
              <h3 class="text-center m-3 pt-5 pb-3">Your competition</h3>
              <div class="form-group">
                <label for="" class="col-form-label">List your main competitors.</label>
                <div class="">
                <textarea name="competitors" class="form-control z-depth-1" rows="7" placeholder=""></textarea>
                </div>
                </div>
                <div class="form-group">
                <label for="" class="col-form-label">What makes your company/product different and unique?
                </label>
                <div class="">
                <textarea name="uniqueness" class="form-control z-depth-1" rows="7" placeholder=""></textarea>
              </div>
              </div>
              </div>
                
              <div class="my-5">
              <h3 class="text-center m-3 pt-5 pb-3">Content</h3>
              <div class="form-group">
                <label for="" class="col-form-label">Do you have your website's content ready? <br><small>E.g. Text for each page, photos etc.</small></label>
              <div class="">
                <textarea name="content" class="form-control z-depth-1" rows="7" placeholder=""></textarea>
              </div>
              </div>
            </div>
          
            <div class="my-5">
              <h3 class="text-center m-3 pt-5 pb-3">Design</h3>
              <div class="form-group">
                <label for="" class="col-form-label">Do you have brand guidelines? <br><small>Logo, colour scheme, fonts etc.</small></label>
          
                <textarea name="brand" class="form-control z-depth-1" rows="7" placeholder=""></textarea>
                </div>

                <div class="form-group">
                <label for="" class="col-form-label">What is your desired look and feel for the website? <br><small>Modern, minimal, colourful etc. </small>
                </label>
                <div class="">
                <textarea name="look" class="form-control z-depth-1" rows="7" placeholder=""></textarea>
                </div>
                </div>
                <div class="form-group">
                <label for="" class="col-form-label">List 5 websites you like and explain why?
                </label>
                <div class="">
                <textarea name="preference" class="form-control z-depth-1" rows="7" placeholder=""></textarea>
                </div>
              </div>
            </div>
          
            <div class="my-5">
              <h3 class="text-center m-3 pt-5 pb-3">Development</h3>
              <div class="form-group">
                <label for="" class="col-form-label">List the pages that you require?<br><small>E.g. Home, About Us, Services, Blog, Contact Us</small></label>
                <div class="">
                <textarea name="pages" class="form-control z-depth-1" rows="7" placeholder=""></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-form-label">What features do you want to include on the website? <br><small>E.g. Twitter feed, contact form, photo gallery </small>
                </label>
                <div class="">
                <textarea name="features" class="form-control z-depth-1" rows="7" placeholder=""></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-form-label">Do you have a current domain name and hosting package?
                </label>
                <div class="">
                <textarea name="domain" class="form-control z-depth-1" rows="7" placeholder=""></textarea>
              </div>
              </div>
            </div>
          
            @csrf

            <div class="text-center py-3">
              <button type="submit" class="btn" name="send_plan">Submit</button>
            </div>

        </form>
      </div>
    </section>
  </main>
    
@endsection