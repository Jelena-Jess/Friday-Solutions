<footer class="footer bg-dark">
    <div class="main">
      
      <div class="footer-bottom d-flex flex-wrap justify-content-around pt-5 pb-4 mt-5">
        <div class="mx-2 my-0">
          <h4 class="logo mb-3">FRIDAY SOLUTIONS</h4>
          <p>Jelena Petkov</p>
          <p>Novi Sad, Serbia</p>
          <p>t +381-62-964-5599</p>
          <p>petkovjelena@gmail.com</p>
        </div>
        <div class="mx-2 my-5">
          <h4>COMPANY</h4>
          <p class=""><a href="{{ route('home') }}" class="">Home Page</a></p>
          <p><a href="{{ route('about') }}">About Us</a></p>
          <p><a href="{{ route('contact.create') }}">Contact Us</a></p> 
        </div>
        <div class="mx-2 my-5">
          <h4>SERVICES</h4>
          <p><a href="{{ route('website') }}" class="">Web Design&Dev</a></p>
          <p><a href="{{ route('logo') }}">Logo Design</a></p>
          <p><a href="{{ route('content') }}">Content Creation</a></p> 
        </div>
        <div class="mx-2 my-5">
          <h4>BLOG TOPICS</h4>
          <p><a href="{{ route('blog.development') }}">Coding</a></p>
          <p><a href="{{ route('blog.design') }}">Web Design</a></p>
          <p><a href="{{ route('blog.inspiration') }}">Inspiration</a></p>
        </div>
      </div>

    </div>
    <div class="d-flex justify-content-center bg-footer py-4">
      <small>All rights reserved 	&copy; 2019-2020 Friday Solutions</small>
    </div>
</footer>