
@extends('layouts.frontend.innermaster')


@section('content')
<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
      {{-- <h1>About AgriFI CS APP</h1> --}}
        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          <li ><a href="{{route('project_profile')}}">Project Profile</a></li>
         
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs Section -->

  <section id="resources" class="services">
    <div class="container">

      <div class="section-title">
        <h2>AgriFI CS APP Project Profile</h2>
      </div>

      <div class="container margin_60_35 add_bottom_30">
        <div class="row justify-content-center align-items-center" style="background-color: #f1f7fd;border-radius:14pt">
            <div class="col-lg-5 pr-lg-5 text-center d-none d-lg-block">
                    <img src="{{asset('frontend/img/lounch.jpg')}}" alt="" class="img-fluid" width="400" height="350" style="border-radius:14px">
                    <div> <span ><i>insert caption here</i> </span></div>
            </div>
            <div class="col-lg-7">
                <div class="box_about" style="text-align: justify;padding-top:10px">
                
                    <p class="lead"> <b> <strong> About Kenya Agricultural and Livestock Research Organization (KALRO) </strong></b></p>
                 <p> <a href="https://www.kalro.org/" target="blank"> The Kenya Agricultural and Livestock Research Organization (KALRO), </a> is the premier research organization,
                     charged with the mandate of promoting, streamlining, coordinating, and regulating research in crops, 
                     livestock, genetic resources, and biotechnology in Kenya. <p> It is also mandated to expedite equitable access 
                     to research information, resources, and technology and to promote the application of the research findings 
                     and technology in the field of agriculture. In the execution of this mandate, KALRO is supported by a network
                      of 16 research institutes and over 30 centers spread across the country. KALRO works directly with farmers, 
                      livestock keepers, the private sector, development partners, and other stakeholders involved in the agricultural
                       research and development space. KALRO is also the lead applicant of the AgriFI Kenya CS APP.
                </div>
            </div>
        </div>
        <br>
        <div class="row justify-content-center align-items-center" style="text-align: justify;background-color: #f1f7fd;border-radius:14pt;padding-top:10px" >
          <p class="lead"> <b><strong> About AgriFI Kenya Climate Smart Agricultural Productivity Project (AgriFI Kenya CS APP)</strong></b></p>
       <p>  The AgriFI Kenya support to KALRO for Climate Smart Agricultural Productivity Project (AgriFI Kenya CS APP),
           is a five-year project under the AgriFI Development Programme implemented by KALRO. This project is co-funded by 
           the European Union and Government of Kenya to the tune of EUR 6.5M. </p> <p>This action seeks to support KALRO’s research on 
           climate-smart agricultural technologies and promote the uptake of these technologies by adopting a Public-Private 
           Partnership approach. The primary beneficiaries of this project are an estimated 500,000 smallholder farmers, pastoralists, 
           and their groups. The target beneficiaries are occasional market players with the potential to become full players in the specific 
           value chains. The project is implemented nationally.</p> 
           <div>
            <ul>
            
              <li> <p> Result area 1(a): New drought-resistant and more yielding climate smart technologies developed </p></li>
              <li> <p> Result area 1(b): Smallholder farmers adopt existing technologies developed by KALRO in value chains in Kenya to enhance production and value addition.</p></li>
            </ul>
           </div>
        </div>
        <br>
 
    </div>

    </div>
  </section><!-- End Services Section -->



</main><!-- End #main -->
@endsection