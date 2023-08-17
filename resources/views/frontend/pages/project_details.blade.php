

@extends('layouts.frontend.innermaster')


@section('content')
<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
      <h1>{{$project->title}}</h1>
        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs Section -->

  
    <div class="container">


    <div class="grid">
    <div class="container">
                  <div class="content">
                      <div class="row">
                     
                     <div class="col-md-6">
                      <div style="display: flex;justify-content:center;border-radius: 12px;">
                        <img src="{{asset( $project->image)}}" alt="" height="auto" width="100%" style="border-radius: 12px;">
                      </div>
                      <br>
                      
                        <div> <span ><i>{{$project->title}}</i> </span></div>
                        
                        </div>

                        {{-- <span class="vl"></span> --}}
                         <div class="col-md-6">
                          <div class="container">
                            <p><b>Upscalling & Implemetation Details: </b>{!!$project->description!!}</p>
                          </div> 
                          <div>
                            <a  style="cursor:pointer;cursor:pointer;background-color: #20b15e;color:whitesmoke" class="reject-modal btn" data-title="Edit Marial" data-url="''">Read More</a>
                          </div>
                          <br>
                        </div>
                        </div>
                  </div>
                  <!-- /container -->
</div> <!-- end grid---->
 



</main><!-- End #main -->
@endsection
