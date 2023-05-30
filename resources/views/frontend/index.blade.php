@extends('layouts.frontend.homemaster')


@section('content')
      <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>AgriFi Kenya Climate Smart Agricutural Productivity Project</h1>
      <h2>Welcome to the Unified Technology Transfer Platform  </h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main why">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us why">
      <div class="container">

     
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">

              <div class="row">
                <div class="col-xl-2 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-store-alt"></i>
                   <a href="{{route('about')}}"><h4>About us</h4></a>
                    
                  </div>
                </div>
                <div class="col-xl-2 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-briefcase"></i>
      
                    <a href=""><h4>Project Components</h4></a>
                  
                  </div>
                </div>

                <div class="col-xl-2 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-leaf"></i>
                    <a href="{{route('valuechains')}}"><h4>Valuechains</h4></a>
                    
                  </div>
                </div>

                <div class="col-xl-2 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-info-circle"></i>
                    <a href="{{route('resources')}}"><h4>Resources</h4></a>
                    
                  </div>
                </div>

                <div class="col-xl-2 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-video-recording"></i>
                    <a href="{{route('media')}}"><h4>Media</h4></a>
                 
                  </div>
                </div>

                <div class="col-xl-2 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-phone-call"></i>
                    <a href=""><h4>Contact us</h4></a>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

    </section><!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-6 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
          
          </div>

          <div class="col-xl-6 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>Project Implementation</h3>
            <p> The Kenya Agricultural and Livestock Research Organization (KALRO) is the premier research organization, charged with the main mandate of promoting, streamlining, coordinating, and regulating research in crops, livestock, genetic resources, and biotechnology in Kenya. </p>
            <p>KALRO received a funding grant from the European Union (EUR 5m) and Government of Kenya (EUR 1.5m) to implement the AgriFI Kenya support to KALRO for Climate Smart Agricultural Productivity Project (AgriFI Kenya CS APP) at a tune of EUR 6.5m, a five-year project under the AgriFI Development Programme. </p>
            <h3>AgriFi Program Steering Committee</h3>
            <p> The CS-APP reports to  the overall Kenya AgriFI Steering Committee. The KALRO Director-General and the Coordinator will attend on behalf of the CS-APP. CS-APP  periodically reports to the AKSC</p>
            <h3>Project Implementation Committee</h3>
            <p>A PIC chaired by the Director- General KALRO is made up of the PCU, one Deputy Director General, a representative of implementing partners (on rotating basis), representative of relevant
               local University, MOAI AgriFI Focal Point (Coordinator), and Private sector representative.  
            The EC Delegation and the National Treasury will have representative(s) as observers. PIC  provide oversight and guidance to the PCU in implementing the project. PIC meet once a year. </p>
            
            {{-- <h3>Project Coordination Unit</h3>

             <p>CS APP have a project coordination unit, which is responsible for the day to day operation of the project. The unit is lean with the following full time dedicated staff;</p>

            
            <div class="front-box">
            <ul>
                  <li>National Project Coordinator</li>
                  <li>Agribusiness Officer</li>
                  <li>M & E Officer </li>
                  <li>Programme Accounts Manager</li>
                  <li>Office Manager/Secretary</li>
                  <li>Driver</li>
                </ul>
            </div>
          <p>At the institutional level, the National Project Coordinator  reports to the KALRO Director General. The project draws support from the technical domain managers at KALRO. CS APP hired officers with agribusiness and M & E expertise to support the project.</p> --}}
      <br>
      <div><a href="{{route('about')}}"><input type="button" value="Read More" class="btn btn-block btn-success"></a></div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box meme">
              <i class="fas fa-handshake"></i>

              <span data-purecounter-start="0" data-purecounter-end="{{App\Models\Partner::count()}}" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong> Partners</strong> </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box meme">
              <i class="bx bx-leaf"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{App\Models\ValueChain::count()}}" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong> Valuechains</strong> </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box meme">
              <i class="bi bi-book"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{App\Models\Research::count()}}" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong> Research Models</strong> </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0" >
            <div class="count-box meme">
              <i class="fas fa-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Impact Areas</strong> </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <div id="resources" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Resources</h2>
        </div>

        <div class="row">
         

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-leaf"></i></div>
              <h4><a href="{{route('valuechains')}}">Valuechains</a></h4>
              <p>Get understanding in optimizing agricultural valuechins and improving productivity, efficiency, and sustainability.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-cloud-sun-rain"></i></div>
              <h4><a href="https://www.kaop.co.ke/" target="blank">Climate Information Advisories</a></h4>
              <p></p>
              <p style="text-align: justify">Proper planning using up to date climate information could minimize negative impact of climate change on people's livelihoods and economy. Accurate & decision-relevant climate
                 information is critical to plan & minimize negative impact of climate variability.</p>
             
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-cart"></i></div>

              <h4><a href="https://amis.co.ke/" target="blank">Market place</a></h4>
              <p style="text-align: justify">Access a wide range of multimedia content, including images, videos, and press releases,
                 showcasing our KALRO's latest news, updates, and events.  </p>

            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" >
            <div class="icon-box">
              <div class="icon"><i class="fas fa-book"></i></div>
              <h4><a href="">Project publications </a></h4>
              <p> Here you can explore the  projects dissemination materials.</p>
            </div>
          </div> 
  
           <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"> <i class="bx bx-video-recording"></i></div>
              <h4><a href="{{route('media')}}">Medias </a></h4>
              <p style="text-align: justify"> Access a wide range of multimedia content, 
                including images, videos, and press releases, showcasing our KALRO's latest news, updates, and events.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"> <i class="bx bx-video-recording"></i></div>
              <h4><a href="{{route('map')}}">Analytics Map </a></h4>
              <p style="text-align: justify"> The map provides an overview of the results achieved.Data contained in the map has been quality assesed and aligns with project objectives.</p>
            </div>
          </div>
        </div>

      </div>
    </div><!-- End Services Section -->
<br>
  <!-- ======= Partners Section ======= -->


  {{-- <div class="bg_gray">
    <div class="container margin_30">
      <div id="brands" class="owl-carousel owl-theme">
        <div class="item">
          <a href="#0"><img src="img/brands/placeholder_brands.png" data-src="{{asset('frontend/img/brands/logo_1.png')}}" alt="" class="owl-lazy"></a>
        </div><!-- /item -->
        <div class="item">
          <a href="#0"><img src="img/brands/placeholder_brands.png" data-src="{{asset('frontend/img/brands/logo_2.png')}}" alt="" class="owl-lazy"></a>
        </div><!-- /item -->
        <div class="item">
          <a href="#0"><img src="img/brands/placeholder_brands.png" data-src="img/brands/logo_3.png" alt="" class="owl-lazy"></a>
        </div><!-- /item -->
        <div class="item">
          <a href="#0"><img src="img/brands/placeholder_brands.png" data-src="img/brands/logo_4.png" alt="" class="owl-lazy"></a>
        </div><!-- /item -->
        <div class="item">
          <a href="#0"><img src="img/brands/placeholder_brands.png" data-src="img/brands/logo_5.png" alt="" class="owl-lazy"></a>
        </div><!-- /item -->
        <div class="item">
          <a href="#0"><img src="img/brands/placeholder_brands.png" data-src="img/brands/logo_6.png" alt="" class="owl-lazy"></a>
        </div><!-- /item --> 
      </div><!-- /carousel -->
    </div><!-- /container -->
  </div> --}}
  <!-- /bg_gray -->

  {{-- <div id="partners" class="partners">    
    <h2 style="display:flex;justify-content:center"><u> AgriFi CS APP Partners </u></h2>
    <br>
    <div class="container">

      <div class="owl-carousel owl-theme" id="brands">
        @foreach ($partners as $partner)
        <div class="item">
          <a href="{{route('partner',$partner->id)}}"><img src="{{asset('backend/uploads/'.$partner->image)}}" data-src="{{asset('backend/uploads/'.$partner->image)}}" alt="" class="owl-lazy" height="100" width="30"></a>
        </div><!-- /item -->
        @endforeach

      </div>

    </div>
  </div> --}}
  <!-- End partners Section -->

  </main><!-- End #main -->
@endsection

<style>
 .meme{
  box-shadow: 
   5px 5px 10px 5px rgba(126,126,126),
   -5px 0px  rgb(158, 158, 158);
      border-radius: 12px; 
     }
     .card-title{
      color: aliceblue;
     }
</style>