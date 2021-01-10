 <header class="header">
 
  <section class="d-flex section flex-column bd-highlight">
    <img src="/images/header2.jpg" alt="" class="parallax">
    <div class="section-blur">
      <div class="align-items-start">

        @include('inc.navbar')

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
     
      <div class="header-fix">
        <div class="main">
          <div class="pb-5">
            <h2 class="title">You want to pass your Cambridge English Exam?</h2>
            <h3 class="subtitle title">Why not ACE it with me?</h3>
            <div class="float-left"><a href="{{ route('contact.create') }}" class="button header-subscribe mt-4">Contact me</a></div>
          </div>
        </div>
      </div>
    </div>
  </section>

</header>

</div>
  <a class="gotop" href=""><i class="fa fa-arrow-up"></i></a>
</div>