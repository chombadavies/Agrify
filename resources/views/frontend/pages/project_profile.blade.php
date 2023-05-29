
@extends('layouts.frontend.innermaster')


@section('content')
<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
      <h1>About AgrFi CS APP</h1>
        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
         
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs Section -->

  <section id="resources" class="services">
    <div class="container">

      <div class="section-title">
        <h2>AgriFI CS APP Kenya Project Profile</h2>
      </div>

      <div class="container margin_60_35 add_bottom_30">
        <div class="row justify-content-center align-items-center" style="background-color: #f1f7fd;border-radius:14pt">
            <div class="col-lg-5 pr-lg-5 text-center d-none d-lg-block">
                    <img src="{{asset('frontend/img/lounch.jpg')}}" alt="" class="img-fluid" width="400" height="350" style="border-radius:14px">
            </div>
            <div class="col-lg-7">
                <div class="box_about" style="text-align: justify;">
                    <p class="lead"> <b>Project Implementation:</b></p>
                    <p>The Kenya Agricultural and Livestock Research Organization (KALRO) is the premier research organization, charged with the main mandate of promoting, 
                        streamlining, coordinating, and regulating research in crops, livestock, genetic resources, and biotechnology in Kenya. </p> <p>It is also mandated to expedite
                         equitable access to research information, resources, and technology and to promote the application of the research findings and technology in the field of agriculture. 
                         In the execution of this mandate, KALRO is supported by a network of 16 research institutes and over 30 centers spread across the country.</p>
                </div>
            </div>
        </div>
        <br>
        <div class="row justify-content-center align-items-center" style="text-align: justify;">
            <p> KALRO works directly with farmers,
                livestock keepers, the private sector, development partners,
               and other stakeholders involved in the agricultural research and development space </p>
<p>KALRO received a funding grant from the European Union (EUR 5m) and Government of Kenya (EUR 1.5m) to implement the
     AgriFI Kenya support to KALRO for Climate Smart Agricultural Productivity Project (AgriFI Kenya CS APP) at a tune of EUR 6.5m, a five-year project under the AgriFI Development Programme.
      This action seeks to support KALRO’s research on climate-smart agricultural technologies and promote the adoption of these technologies by adopting a Public-Private Partnership approach. </p>
      <p> The primary beneficiaries of this project are an estimated 500,000 smallholder farmers, pastoralists, and their groups that are occasional market players with the potential to become 
        full players in specific value chains. The project is implemented nationally.</p>
        </div>
        <br>
       
       
       
             
         
            
    </div>

    </div>
  </section><!-- End Services Section -->



</main><!-- End #main -->
@endsection