<nav class="mb-1 navbar navbar-expand-lg bg-blue d-none d-sm-none d-md-none d-lg-block">
  <div class="main d-flex justify-content-between">
    <div class="logo my-auto">
      <a href="{{ route('home') }}"> <img src="/images/logo.png" alt="Logo">
      </a>
    </div>
    <div class="row">
      <ul class="align-self-center nav navbar-nav d-flex bd-highlight mb-7">
        
        <li class="dropdown px-xl-2 px-lg-0 nav-item nav">
          <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EXAMS
          </a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item nav-link-small hvr-underline-from-center" href="{{ route('website') }}">B1 FIRST</a>
            <a class="dropdown-item nav-link-small hvr-underline-from-center" href="{{ route('logo') }}">C1 ADVANCED</a>
            <a class="dropdown-item nav-link-small hvr-underline-from-center" href="{{ route('content') }}">C2 PROFICIENCY</a>
          </div>
        </li>
        <li class="px-xl-2 px-lg-0 nav-item bd-highlight nav">
          <a class="nav-link hvr-underline-from-center" href="{{ route('posts.index') }}">BLOG</a>
        </li>
        <li class="px-xl-2 px-lg-0 nav-item bd-highlight nav">
          <a class="nav-link hvr-underline-from-center" href="{{ route('posts.index') }}">BOOTCAMP</a>
        </li>
        <li class="px-xl-2 px-lg-0 nav-item bd-highlight nav">
          <a class="nav-link hvr-underline-from-center" href="{{ route('posts.index') }}">EBOOKS</a>
        </li>
        <li class="px-xl-2 px-lg-0 nav-item bd-highlight nav">
          <a class="nav-link hvr-underline-from-center" href="{{ route('about') }}">ABOUT ME</a>
        </li>
        <li class="px-xl-2 px-lg-0 nav-item bd-highlight nav hvr-underline-from-center">
          <a class="nav-link" href="{{ route('contact.create') }}">CONTACT</a>
        </li>
        
      </ul>
    </div>
    
  </div>
</nav>