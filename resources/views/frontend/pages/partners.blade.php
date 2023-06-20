
@extends('layouts.frontend.innermaster')


@section('content')
<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
      <h4>AgriFi CS APP Partners</h4>
        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
         
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs Section -->

  <section id="resources" class="services">
    <div class="container">

      <div class="container margin_60_35 add_bottom_30">
            <br>
            <div class="section-title">
                <h2>AgriFI CS APP Partners</h2>
              </div>
      <div class="meme card-success card-outline">
                    <br>
                    <div style="padding: 40px;background-color:#f1f7fd;border-radius:24px">
                  {{-- <input type="button" value="Partners Mandate" style="cursor:ew-resize"> --}}
                      <p >Technologies for upscaling were identified by KALRO and other NARS institutions. The upscaling component is implemented through a competitive call for proposals.  
                        The Call for Proposals (CfP) for Sub-Grants Guidelines provided the manner in which KALRO selected 21 organizations  competitively for 38 subgrants. Part of the 38 Sub-grantees work plans target capacity building of the beneficiaries, 
                        linkage to markets, financial service providers, and input suppliers. Each subgrants successful subgrant was awarded Euros 60,000.00 (KES 6,813,000). </p>
         
                    </div>
                  
                 
                  <div class="row justify-content-center align-items-center " style="grid:fluid !important">
                @foreach ($partners as $partner)
              
                <div class="col-lg-4 pl-lg-5 text-center  d-lg-block">
                  <a href="{{route('partner',$partner->id)}}">
                  <img src="{{asset('backend/uploads/'.$partner->image)}}" alt="" class="img-fluid"  >
                  <div>
                    <span>{{$partner->title}}</span></a>
                  </div>
          </div>
                @endforeach
                </div>


                </div>
            
    </div>
    </div>
  </section><!-- End Services Section -->
</main><!-- End #main -->
@endsection

<style>
           .meme{
  box-shadow: 
   5px 5px 10px 5px rgba(126,126,126),
   -5px 0px  rgb(158, 158, 158);
      border-radius: 5px; 
      /* height: 500px; */
      border-radius:12px;
     }

</style>