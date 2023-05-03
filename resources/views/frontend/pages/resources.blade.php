

@extends('layouts.frontend.innermaster')


@section('content')
<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h1><?=$page_title?></h1>
        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          
         
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs Section -->

  <section id="resources" class="services">
    <div class="container">

      <div class="section-title">
        <h2>Resources</h2>
      </div>

      <div class="row">
       

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-pills"></i></div>
            <h4><a href="{{route('valuechains')}}">Valuechains</a></h4>
            <p>Get understanding in optimizing agricultural valuechins and improving productivity, efficiency, and sustainability.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-hospital-user"></i></div>
            <h4><a href="">Project publications </a></h4>
            <p> Here you can explore the  projects dissemination materials.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-hospital-user"></i></div>
            <h4><a href="{{route('media')}}">Media </a></h4>
            <p> Access a wide range of multimedia content, including images, videos, and press releases, showcasing our KALRO's latest news, updates, and events..</p>
          </div>
        </div>

        {{-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-dna"></i></div>
            <h4><a href="">Mobile Apps</a></h4>
            <p>Whether you're using a smartphone or tablet, our mobile apps provide a seamless experience, allowing you to access our content and services with ease.</p>
          </div>
        </div> --}}

        {{-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-wheelchair"></i></div>
            <h4><a href="">Media</a></h4>
            <p>Access a wide range of multimedia content, including images, videos, and press releases, showcasing our KALRO's latest news, updates, and events.  </p>
          </div>
        </div> --}}

        {{-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-notes-medical"></i></div>
            <h4><a href="">Reports</a></h4>
            <p> From market trends to crop forecasts, our comprehensive reports are meticulously curated to provide you with valuable information for informed decision-making.</p>
          </div>
        </div> --}}

      </div>

    </div>
  </section><!-- End Services Section -->

</main><!-- End #main -->
@endsection