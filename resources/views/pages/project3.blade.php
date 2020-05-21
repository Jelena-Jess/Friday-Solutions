@extends('layouts.app')

@section('content')
  <main role="main" class="m-auto px-5 main">
  <div class="row">
  <section class="col-lg-8 col-sm-12 pt-5 pb-3 text-justify">
  <h3>{{$title}}</h3>
      <p>A simple WordPress website with gluten-free recipes.</p>
  
    <div class="project-page-img pt-4">
        <img class="wide mb-5" src="images/wp_big.png" alt="">
        <img class="narrow mb-5" src="images/wp_small.png" alt=""> 
    </div>
  </section> 
  <section class="col-lg-3 offset-lg-1 col-sm-12 offset-sm-0 pt-5 pb-3"> 
    <div class="row">
      <div class="col-lg-12 col-sm-6 pb-3"> 
        <h3>Technologies used</h3>
        <ul>
          <li>WordPress CMS</li>
        </ul> 
      </div>
    </div>
  </section>
  </div>
  <section class="row"> 
    <div class="col-lg-8 col-sm-12 py-3 border-top">
      <h6 class="nav-link float-left"><i class="fas fa-angle-left"></i><a class="nav-page" href="/project2">ChocoTale</a></h6>
    </div>
  </section>
  </main>
  @endsection