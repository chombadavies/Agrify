

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
            <h4><a href="https://www.kaop.co.ke/" target="blank">Climate Information Advisories</a></h4>
            <p></p>
            <p style="text-align: justify">Proper planning using up to date climate information could minimize negative impact of climate change on people's livelihoods and economy. Accurate & decision-relevant climate
               information is critical to plan & minimize negative impact of climate variability.</p>
           
          </div>
        </div>
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-cart"></i></div>

            <h4><a href="https://amis.co.ke/" target="blank">Market place</a></h4>
            <p style="text-align: justify">Access a wide range of multimedia content, including images, videos, and press releases,
               showcasing our KALRO's latest news, updates, and events.  </p>

          </div>
        </div>
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-dna"></i></div>
            <h4><a href="">Project publications </a></h4>
            <p> Here you can explore the  projects dissemination materials.</p>
          </div>
        </div> 

         <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-wheelchair"></i></div>
            <h4><a href="{{route('media')}}">Medias </a></h4>
            <p style="text-align: justify"> Access a wide range of multimedia content, 
              including images, videos, and press releases, showcasing our KALRO's latest news, updates, and events.</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Services Section -->

</main><!-- End #main -->
@endsection