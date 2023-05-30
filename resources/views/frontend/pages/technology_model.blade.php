
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
        <h2>Technology and commercialization Models</h2>
      </div>

      <div class="container margin_60_35 add_bottom_30">
        <div class="row justify-content-center align-items-center" style="background-color: #f1f7fd;border-radius:14pt">
            <div class="col-lg-5 pr-lg-5 text-center d-none d-lg-block">
                    <img src="{{asset('frontend/img/Technology Transfer Model_page-0001.jpg')}}" alt="" class="img-fluid" width="400" height="450" style="border-radius:14px">
            </div>
            <div class="col-lg-7">
                <div class="box_about">
                    <p class="lead"> <b>Technology Model:</b></p>
                   
                   <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                     text ever since the 1500s, 
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
        </div>
        <br>
    
        <br>
        <div class="row justify-content-center align-items-center" style="border-radius:14pt">
            <div class="col-lg-7">
                <div class="box_about">

                    <p class="lead"> <b>Commercialization Model:</b></p>
                 
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                         took a galley of type and scrambled it to make a type specimen book.</p>
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