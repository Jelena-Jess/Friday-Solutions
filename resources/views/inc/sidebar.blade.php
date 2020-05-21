<div id="mySidebar" class="sidebar">
  <div class="mobile side-nav fixed d-lg-none d-xl-none">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="far fa-window-close fa-sm"></i></a>
    <ul class="custom-scrollbar nav flex-column text-center ml-auto mr-auto">
      <li class="nav-item mt-5 mb-3">
            <a class="mt-5 nav-link hvr-underline-from-center" href="{{ route('home') }}">
            HOME
            </a>
        </li>
        <li class="dropdown show nav-item mt-2 mb-2">
            <a class="nav-link dropdown-toggle" href="" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            SERVICES
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="pb-2 nav-link-small-sidebar hvr-underline-from-center" href="{{ route('website') }}">
                WEBSITE DESIGN
                </a> 
                <a class="pb-2 nav-link-small-sidebar hvr-underline-from-center" href="{{ route('logo') }}">
                  LOGO DESIGN
                </a>
                <a class="pb-2 nav-link-small-sidebar hvr-underline-from-center" href="{{ route('content') }}"> CONTENT MANAGEMENT
                </a>
            </div>
        </li>
        
        <li class="nav-item my-3">
          <a class="nav-link hvr-underline-from-center" href="{{ route('portfolio') }}">
        PORTFOLIO
        </a>
        </li>
        <li class="nav-item my-3">
            <a class="nav-link hvr-underline-from-center" href="{{ route('about') }}">
            ABOUT
            </a>
            </li>
        <li class="nav-item my-3">
            <a class="nav-link hvr-underline-from-center" href="{{ route('posts.index') }}">
            BLOG
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