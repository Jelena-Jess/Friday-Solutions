 <header class="header">
 
  <section class="d-flex section flex-column bd-highlight">
    <img src="/images/header.jpg" alt="" class="parallax">
    <div class="section-blur">
      <div class="align-items-start">

        @include('inc.navbar')

      </div>
       <div class="position-fixed container-fluid d-lg-none d-xl-none">
        <div class="row row-content d-flex justify-content-end mt-1"> 
          <button class="openbtn navbar-toggler p-3" onclick="openNav()" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
          <i class="fas fa-bars fa-lg"></i>
          </button>
        </div>
      </div>
      <div class="logo align-self-start d-lg-none d-xl-none pt-2 pl-5">
        <a href="{{ route('home') }}">FRIDAY SOLUTIONS</a>
      </div>
      <div class="header-fix">
        <div class="main">
          <div class="py-5">
            <h1 class="title">The solution to your digital problems</h1>
            <h3 class="">Creative? Sure we are, but we're here to listen and solve your problems. Our main goals are to help you bring in more clients and give you more time to run your business. You'll gain peace of mind knowing we have your digital presence covered. Welcome to Friday Solutions.</h3>
            <div class="float-left"><a href="{{ route('contact.create') }}" class="button mt-4">Contact us</a></div>
          </div>
        </div>
      </div>
    </div>
  </section>

</header>

</div>
<a class="gotop" href=""><i class="fa fa-arrow-up"></i></a>
</div>