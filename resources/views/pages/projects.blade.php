@extends('layouts.app')

@section('content')
  <main role="main" class="m-auto">

    <section class="col-12 py-5 text-justify back-light">
      <div class="main py-5">
        <div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column align-items-center">
          <div class="animate-left center-split px-lg-5 px-md-4">
            <h3 class="text-center text-dark">Your personal stamp</h3>
            <p>A successful logo is simple and representative of the company it stands for.</p>
            <p>Designing a small visual representation of an entire company can be a daunting task, but if the process is done correctly, a logo can be a very effective marketing device.</p>
          </div>
          <div class="animate-right center-split">
            <img src="/images/portfolio.png" alt="">
          </div>
        </div>
      </div>
    </section>

    <section id="projects" class="py-5 back-dark">
      <div class="main py-5">
        <h2 class="text-center text-light pb-5"><a id="projects">PROJECTS</a></h2>
        <div class="p-lg-4 p-md-4 py-4 pb-md-0 pb-sm-0 pb-0 d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column  justify-content-xl-around justify-content-lg-around justify-content-md-around justify-content-sm-center justify-content-center">
          <div class="reveal projects m-2 py-4 align-self-center">
            <div class="text pr-3">
              <div class="container">
                <div class="row justify-content-end">
                  <h4 class="col-6 project-title">Electronic diary for schools</h4>
                </div>
              </div>
            </div>
            <div class="projects-img">
              <img class="" src="images/diary_big.png" alt="">
            </div>
            <div class="btn-readmore">
              <a href="" class="btn">Read more</a>
            </div>
          </div>
          <div class="reveal projects m-2 py-4 align-self-center">
            <div class="text pr-3">
              <div class="container">
                <div class="row justify-content-end">
                  <h4 class="col-6 project-title">Electronic diary for schools</h4>
                </div>
              </div>
            </div>
            <div class="projects-img">
              <img class="" src="images/choco_big.png" alt="">
            </div>
            <div class="btn-readmore">
              <a href="" class="btn">Read more</a>
            </div>
          </div>

        </div>

      <div class="p-lg-4 p-md-4 py-4 py-sm-0 d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column  justify-content-xl-around justify-content-lg-around justify-content-md-around justify-content-sm-center justify-content-center">
        <div class="reveal projects m-2 py-4 align-self-center">
          <div class="text pr-3">
            <div class="container">
              <div class="row justify-content-end">
                <h4 class="col-6 project-title">Electronic diary for schools</h4>
              </div>
            </div>
          </div>
          <div class="projects-img">
            <img class="" src="images/wp_big.png" alt="">
          </div>
          <div class="btn-readmore">
            <a href="" class="btn">Read more</a>
          </div>
        </div>
      <div class="reveal projects m-2 py-4 align-self-center">
        <div class="text pr-3">
          <div class="container">
            <div class="row justify-content-end">
              <h4 class="col-6 project-title">Electronic diary for schools</h4>
            </div>
          </div>
        </div>
        <div class="projects-img">
          <img class="" src="images/diary_big.png" alt="">
        </div>
        <div class="btn-readmore">
          <a href="" class="btn">Read more</a>
        </div>
      </div>
    </div>
  </div>


</section>



    {{-- <section id="projects" class="py-5 back-light">
      <div class="main py-5">
        <h2 class="text-center text-dark pb-5"><a id="projects">PROJECTS</a></h2>
        <div class="p-lg-4 p-md-4 py-4 pb-md-0 pb-sm-0 pb-0 d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column  justify-content-xl-around justify-content-lg-around justify-content-md-around justify-content-sm-center justify-content-center">

          <div class="reveal projects m-2 py-4 align-self-center">
            <div class="text pr-3">
              <div class="container">
                <div class="row justify-content-end">
                  <h4 class="col-6 project-title">Electronic diary for schools</h4>
                </div>
              </div>
            </div>
            <div class="projects-img">
              <img class="" src="images/diary_big.png" alt="">
            </div>
            <div class="btn-readmore">
              <a href="/project1" class="btn">Learn more</a>
            </div>
          </div>
          
          <div class="reveal projects m-2 py-4 align-self-center">
            <div class="text pr-3">
              <div class="container">
                <div class="row justify-content-end">
                  <h4 class="col-6 project-title">ChocoTale</h4>
                </div>
              </div>
            </div>
            <div class="projects-img">
              <img class="" src="images/choco_big.png" alt="">
            </div>
            <div class="btn-readmore">
              <a href="/project2" class="btn">Learn more</a>
            </div>
          </div>
          
        </div>

        <div class="p-lg-4 p-md-4 py-4 py-sm-0 d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column  justify-content-xl-around justify-content-lg-around justify-content-md-around justify-content-sm-center justify-content-center">

          <div class="reveal projects m-2 py-4 align-self-center">
            <div class="text pr-3">
              <div class="container">
                <div class="row justify-content-end">
                  <h4 class="col-6 project-title">Sonya's Kitchen</h4>
                </div>
              </div>
            </div>
            <div class="projects-img">
              <img class="" src="images/wp_big.png" alt="">
            </div>
            <div class="btn-readmore">
              <a href="" class="btn">Learn more</a>
            </div>
          </div>

          <div class="reveal projects m-2 py-4 align-self-center">
            <div class="text pr-3">
              <div class="container">
                <div class="row justify-content-end">
                  <h4 class="col-6 project-title">Electronic diary for schools</h4>
                </div>
              </div>
            </div>
            <div class="projects-img">
              <img class="" src="images/diary_big.png" alt="">
            </div>
            <div class="btn-readmore">
              <a href="" class="btn">Learn more</a>
            </div>
          </div>
        </div>
      </div>
    </section> --}}

  </main>

@endsection