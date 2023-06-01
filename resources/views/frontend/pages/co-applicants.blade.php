
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

      <div class="container margin_60_35 add_bottom_30">
            <br>
            <div class="section-title">
                <h2>AgriFI CS APP Co-Applicants</h2>
              </div>

              <div class="row justify-content-center align-items-center" >
             
                @foreach ($coapplicants as $coapplicant)
              
                <div class="col-lg-4 pl-lg-5 text-center d-none d-lg-block">
                  <a href="{{route('coapplicant',$coapplicant->id)}}">
                  <img src="{{asset('backend/uploads/'.$coapplicant->image)}}" alt="" class="img-fluid"  height="30">
                  <div> <span>{{$coapplicant->title}}</span></div>
                 
                {{-- <div>{{strip_tags(str_limit($coapplicant->title,$limit=110,$end='...'))}}</div> --}}
                </a>
                  
          </div>
                @endforeach
           


            </div>
           
            <!-- /row -->



     
      
    </div>

    </div>
  </section><!-- End Services Section -->



</main><!-- End #main -->
@endsection