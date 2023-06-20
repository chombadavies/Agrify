
@extends('layouts.frontend.innermaster')


@section('content')
<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center dada">
      {{-- <h1> AgriFI CS APP Co-aplicants</h1> --}}
        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          <li><a href="{{route('coapplicants')}}">Co-Applicants</a></li>
         
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs Section -->

  <section id="resources" class="services">
    <div class="container">
      <div class="section-title">
        <h3>AgriFI CS APP Co-Applicants</h3>
      </div>
      <div class="container margin_60_35 add_bottom_30">

              <div class="row justify-content-center align-items-center" >
                <div style="padding: 40px;background-color:#f1f7fd;border-radius:24px">
                  {{-- <input type="button" value="Partners Mandate" style="cursor:ew-resize"> --}}
                      <p >The project is managed by a Coordinator within the KALRO establishment and setup. It is managed as a KALRO activity with financial support from the EU. 
                        The coordinator works closely with line technical domain managers and directors in KALRO to provide the technical backstopping to the Project Coordination Unit (PCU). 
                        The PCU draws technical staff from KALRO and use its facilities in the field to carry out project work as necessary.</p>
                      <p> Where KALRO does not have the capacity to fully address the identified problem, it enters into Sub-grant contracts with identified specialised partners in the NARS for 
                        implementation of these components (i.e. KMFRI for fish, ICIPE for the bee component and KEVEVAPI for PPR vaccine batch A production). The Three Specialised institutions (KEVEVAPI, KMFRI and ICIPE) 
                        are coapplicants in this Action and KALRO is the lead Applicant. These institutions have a  De jure or de facto monopoly in the specific research mandates. </p> 
<ol>
  <li>
   <p> KEVEVAPI is a Kenyan registered parastatal is the only institution mandated to undertake development and commercialisation of animal vaccines in Kenya.</p>
  </li>
  <li> <p> KMFRI is a Kenyan registered parastatal is the only institution mandated to undertake aquaculture research in Kenya.</p></li>
  <li> <p> icipe is an internationally registered organisation; and it's the only international institution in Africa working primarily on arthropods including bees and through EU support has the only Bee health facility in Africa for both research and quality control. </p>  </li>
</ol>
                       
                      	
                       
                        {{-- <div  style="margin-left: 40% ">
                          <input type="button" value="List Of AgriFI CS APP Kenya Partners" style="cursor:ew-resize;margin-right:50%" >
                        </div> --}}
         
                    </div>
             
                @foreach ($coapplicants as $coapplicant)
              
                <div class="col-lg-4 pl-lg-5 text-center  d-lg-block">
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