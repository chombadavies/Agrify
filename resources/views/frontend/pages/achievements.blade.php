
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
        <h2> AgriFI CS APP Project Achievements</h2>
      </div>

      <div class="container margin_60_35 add_bottom_30">
        <div class="row justify-content-center align-items-center" style="background-color: #f1f7fd;border-radius:14pt">
            <div class="col-lg-5 pr-lg-5 text-center d-none d-lg-block">
                    <img src="{{asset('frontend/img/Capture.png')}}" alt="" class="img-fluid" width="400" height="450" style="border-radius:14px">
            </div>
            <div class="col-lg-7">
                <div class="box_about">
                    <p class="lead"> <b>ACHIEVEMENTS RESULT:</b></p>
                   
                     <p>The project has awarded 38 subgrantees drawn from Non-profit organizations (NGOs), Community-Based Organizations (CBOs) and Faith-based Organizations (FBOs. The subgrantees has exposed KALRO technologies to the network of the subgrantees spread across 22 counties (Kwale, Kilifi, , Marsabit, Isiolo, Tharaka Nithi, Kitui, Machakos, Makueni, Nyandarua, Kirinyaga, Murang’a, West Pokot,  Baringo, Laikipia, Narok, Kajiado, Bomet, Kakamega, Siaya, Kisumu, Homa Bay, Migori). </p><p> This will have a ripple 
                      effect for adoption of the technologies beyond the life of the project.</p>

                </div>
            </div>
        </div>
        <br>
    
        <br>
        <div class="row justify-content-center align-items-center" style="border-radius:14pt">
            <div class="col-lg-7">
                <div class="box_about">

                    <p class="lead"> <b>Upscalled Farmers:</b></p>
                 
                        <p>Further, partners have reached over 9 million farmers indirectly through mass media campaigns against a target of 500,000 while 53,000 farmers have been reached directly through meetings and trainings. Moreover, our partners have linked 23,374 farmers to the financial services (10,194 farmers in the formal financial institutions-banks, Saccos, 13,063 farmers in informal savings groups/village banks). Since the start of project in 2019 the farmers have accessed loans worth KES 12,471,305 through formal (banks, SACCOS) and informal financial service providers village savings and loans. </p>
                       
                    <img src="" alt="" h  class="">
                </div>
            </div>
            <div class="col-lg-5 pl-lg-5 text-center d-none d-lg-block">
                    <img src="{{asset('frontend/img/Capture1.png')}}" alt="" class="img-fluid" width="400" height="350" style="border-radius:14px">
            </div>
        </div>
        <!-- /row -->
        <div class="row justify-content-center align-items-center" style="background-color: #f1f7fd;border-radius:14px">
          
          <p> The project has created impact along the value chain to both implementing partners and the farmer. AgriFI CS APP partners are non-profit organization that implements charity-oriented projects. AgriFI CS APP project introduced partners to Agricultural Value Chain approach that involves working with actors along the value chain (Input suppliers, financial service providers, off-takers and policy makers). 
          </p>
  </div>
 <br>
           

    </div>
  </section><!-- End Services Section -->



</main><!-- End #main -->
@endsection