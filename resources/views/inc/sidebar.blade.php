<div id="mySidebar" class="sidebar">
  <div class="mobile side-nav fixed d-lg-none d-xl-none">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="far fa-window-close fa-sm"></i></a>
    <ul class="custom-scrollbar nav flex-column text-center ml-auto mr-auto">
      <li class="nav-item mt-5 mb-3">
        <div class="logo-sm-screen align-self-start d-lg-none d-xl-none pt-3">
          <a href="{{ route('home') }}"><img src="/images/logo.png" alt="Logo"></a>
        </div>
        </li>
       
        <li class="dropdown show nav-item mt-2 mb-2">
            <a class="nav-link dropdown-toggle" href="" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            EXAMS
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item nav-link-small-sidebar hvr-underline-from-center" href="{{ route('website') }}">B1 FIRST</a>
              <a class="dropdown-item nav-link-small-sidebar hvr-underline-from-center" href="{{ route('logo') }}">C1 ADVANCED</a>
              <a class="dropdown-item nav-link-small-sidebar hvr-underline-from-center" href="{{ route('content') }}">C2 PROFICIENCY</a>
            </div>
        </li>
        
       
        <li class="nav-item my-3">
            <a class="nav-link hvr-underline-from-center" href="{{ route('posts.index') }}">
            BLOG
            </a>
        </li>
        {{-- <li class="nav-item my-3">
          <a class="nav-link hvr-underline-from-center" href="{{ route('posts.index') }}">
          SHOP
          </a>
        </li> --}}
        <li class="nav-item my-3">
          <a class="nav-link hvr-underline-from-center" href="{{ route('about') }}">
          ABOUT ME
          </a>
        </li>
        <li class="nav-item mt-3">
            <a class="nav-link hvr-underline-from-center" href="{{ route('contact.create') }}">
            CONTACT
            </a>
        </li>
    </ul>
  </div>
</div> 