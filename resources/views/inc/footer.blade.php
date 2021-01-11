<footer class="footer bg-dark-color">
    <div class="main">
      
      <div class="footer-bottom d-flex flex-wrap justify-content-between pb-4 mt-3">
        <div class="mx-2 my-0">
          <div class="logo-footer">
            <a href="{{ route('home') }}"> <img src="/images/logo-foot.png" alt="Logo">
            </a>
          </div>
          <p>Jelena Petkov</p>
          <p>Novi Sad, Serbia</p>
          <p>t +381-62-964-5599</p>
          <p>cambridgeenglishellen@gmail.com</p>
        </div>
        <div class="mx-2 my-5">
          <h4>COMPANY</h4>
          <p class=""><a href="{{ route('home') }}" class="">Home</a></p>
          <p><a href="{{ route('about') }}">About Me</a></p>
          <p><a href="{{ route('contact.create') }}">Contact</a></p> 
        </div>
        <div class="mx-2 my-5">
          <h4>EXAMS</h4>
          <p><a href="{{ route('website') }}" class="">B2 First</a></p>
          <p><a href="{{ route('logo') }}">C1 Advanced</a></p>
          <p><a href="{{ route('content') }}">C2 Proficiency</a></p> 
        </div>
        <div class="mx-2 my-5">
          <h4>BLOG TOPICS</h4>
          <p><a href="{{ route('blog.development') }}">Exams Information</a></p>
          <p><a href="{{ route('blog.design') }}">Exams Preparation</a></p>
          <p><a href="{{ route('blog.inspiration') }}">Miscellaneous</a></p>
        </div>
      </div>

    </div>
    <div class="d-flex justify-content-center bg-footer py-4">
      <small>English with Ellen &copy; 2021 All rights reserved</small>
    </div>
</footer>