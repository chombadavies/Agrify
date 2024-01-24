

@extends('layouts.frontend.innermaster')


@section('content')
<main id="main" style="vertical-height:">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center" style="margin-top: 12px">
        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          <li><a href="{{route('coapplicants')}}">Co-Applicants</a></li>
          
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs Section -->

 
    <div class="container">
      <div class="section-title">
        <h2>{{$coapplicant->title}}</h2>
      </div>

    <div class="grid">
    <div class="container">
                  <div class="content">

                    
                      <div class="row">
                     
                     <div class="col-md-12">

                      <div class="" style="display:flex;justify-content:center">
                        <a href="{{$coapplicant->url}}" target="blank"> 
                         <img src="{{asset('backend/uploads/'.$coapplicant->image)}}" class="img-fluid" alt="" height="130" width="100">
                         <br></div>

                         <div style="display:flex;justify-content:center">
                             <span>{{$coapplicant->title}}</span></a>
                             
                         </div>
                      <br>
                      <div class="container meme card-success card-outline" style="background-color:#f1f7fd;">
                        <br>
                        <p></b>  {!!$coapplicant->description!!}</p>
                        <br>
                      </div>

                    </div>
                </div>
                
<br>
                <div class="row">
                  <div class="col-md-6">
                      <div class="container meme card-success card-outline">
                        <br>
                        <p><b><input type="button" value="Mandate"></b>{!!$coapplicant->mandate!!}</p>
                      </div> 

                    </div>
                   <div class="col-md-6">
                      <div class="container meme card-success card-outline" >
                        <br>
                        <p><b> <input type="button" value="AgriFI CS APP Project Description"> </b>{!!$coapplicant->relationship!!}</p>
                      </div> 
                    </div>
                    </div>

        
                         
                        
                  
                  <!-- /container -->
</div> <!-- end grid---->
<br>



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
     .card-title{
      color: aliceblue;
     }
    
</style>