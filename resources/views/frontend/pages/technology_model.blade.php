
@extends('layouts.frontend.innermaster')


@section('content')
<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center" style="margin-top: 12px">
   
        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          <li><a href="#">Upscalling Models</a></li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs Section -->

  <section id="resources" class="services">
    <div class="container">

      <div class="section-title">
        <h2><?=$page_title?></h2>
      </div>

      <div class="container margin_60_35 add_bottom_30">
        <div class="row justify-content-center align-items-center" style="background-color: #f1f7fd;border-radius:14pt">
            <div class="col-lg-5 pr-lg-5 text-center d-none d-lg-block">
              <br>
                    <img src="{{asset('frontend/img/Technology Transfer Model_page-0001.jpg')}}" alt="" class="img-fluid" width="400" height="500" style="border-radius:14px">
                    <br>
            </div>
            <div class="col-lg-6">
                <div class="box_about">
                    <p class="lead"> <b>Technology Transfter Model</b></p>
                   
              <p>The Technology Transfer Model was developed to support partners to effectively plan a pathway for disseminating technologies. The model demonstrates how KALRO technologies are disseminated and upscaled to the farmers through demonstration farms, Pastoral field schools, and Farmer field schools.</p> <p> The model helps to plan, identifying project sites, defining number of farmers that will be reached directly and indirectly, their location, and the strategies for mobilizing the farmers.</p>
                </div>
            </div>
            <br>
        </div>
        <br>
    
        <br>
        <div class="row justify-content-center align-items-center" style="border-radius:14pt">
            <div class="col-lg-7">
                <div class="box_about">

                    <p class="lead"> <b>Commercialization Model</b></p>
                 
                      <p>The Commercialization Model was developed to support partners to develop a business plan for upscaling the technologies. The model outlines the value chain approach that include; the chain actors, and their functions.</p> <p> It shows how KALRO technologies are being commercialized through commercial multipliers of seed inputs, organization of the farmer to produce, aggregate, and participate in the commodity market. It also shows the extension and financial support services required.</p>
                    <img src="" alt="" h  class="">
                </div>
            </div>
            <div class="col-lg-5 pl-lg-5 text-center d-none d-lg-block">
                    <img src="{{asset('frontend/img/Commercialization Model_page-0001.jpg')}}" alt="" class="img-fluid" width="400" height="350" style="border-radius:14px">
            </div>
        </div>

           

    </div>
  </section><!-- End Services Section -->



</main><!-- End #main -->
@endsection