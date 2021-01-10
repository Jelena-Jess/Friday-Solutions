<header class="header">

  <section class="section-all bd-highlight">
    <img src="/images/header2.jpg" alt="" class="parallax-all">
    <div class="section-blur d-flex flex-column">
      <div class="pt-1">
        <div class="align-items-start">

        @if(!Auth::guest()) 
          @include('inc.navbar_admin')
        @else
          @include('inc.navbar')
        @endif

        </div>
        <div class="row">
          <div class="logo-sm-screen align-self-start d-lg-none d-xl-none pt-3 pl-5">
            <a href="{{ route('home') }}"><img src="/images/logo.png" alt="Logo"></a>
          </div>
          <div class="align-self-center position-fixed container-fluid d-lg-none d-xl-none">
            <div class="row row-content d-flex justify-content-end mt-1"> 
              <button class="openbtn navbar-toggler p-3" onclick="openNav()" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
              <i class="fas fa-bars fa-lg"></i>
              </button>
            </div>
          </div>
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