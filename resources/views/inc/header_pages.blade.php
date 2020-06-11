<header class="header">

  <section class="section-all bd-highlight">
    <img src="/images/header.jpg" alt="" class="parallax-all">
    <div class="section-blur d-flex flex-column">
      <div class="pt-1">
        <div class="align-items-start">

        @if(!Auth::guest()) 
          @include('inc.navbar_admin')
        @else
          @include('inc.navbar')
        @endif

        </div>
        <div class="position-fixed container-fluid d-lg-none d-xl-none">
          <div class="row row-content d-flex justify-content-end mt-1"> 
            <button class="openbtn navbar-toggler p-3" onclick="openNav()" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            <i class="fas fa-bars fa-lg"></i>
            </button>
          </div>
        </div>
        <div class="logo">
          <a class="align-self-start d-lg-none d-xl-none pt-4 pl-5" href="{{ route('home') }}">FRIDAY SOLUTIONS</a>
        </div>
         
      </div>
      <div class="header-title mt-auto mx-auto">
        <h1 class="animate-top title-pages">{{$title ?? ''}}</h1> 
      </div>
    </div>
  </section>
</header>

</div>
<a class="gotop" href=""><i class="fa fa-arrow-up"></i></a>
</div>