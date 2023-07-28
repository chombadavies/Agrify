

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
                        <img src="{{asset( $project->image)}}" alt="" height="350" width="100%" style="border-radius: 12px;">
                      </div>
                      <br>
                      
                        <div> <span ><i>{{$project->title}}</i> </span></div>
                        
                        </div>

                        {{-- <span class="vl"></span> --}}
                         <div class="col-md-6">
                          <div class="container">
                            <p><b>Upscalling $ Implemetation Details : </b>{!!$project->description!!}</p>
                          </div> 

                          {{-- <div class="container">
                            <input type="button" value="{{$valuechain->title }} dissemination materials" class="btn btn-block" style="background-color: #85AE46;color:whitesmoke">
                          
                            <br> <br>
                            @if ($valuechain->title=="Mangoes-IPM" 
                             || $valuechain->title=="KALRO improved indigenous chicken (KIIC)"
                             || $valuechain->title=="Sorghum" )

                             @foreach ($valuechain->materials as $material)
                              <div class="row">
                            <div class="col-md-6">
                              <img src="{{asset('frontend/img/Untitled.png')}}" alt="" height="60">
                            </div>
                            <div class="col-md-6">
                              <a href ="{{asset('file uploads/'.$material->title)}}" download = "{{$material->title}}"> {{$material->title}} </a> 
                              
                            </div>
                           
                          </div>
                          <hr>
                      
                      @endforeach
                          @else
                              
                            @foreach ($valuechain->materials as $material)
                                 <div>
                              <img src="{{asset('frontend/img/Untitled.png')}}" alt="" height="80">
                            </div>
                            <div>
                              <a href ="{{asset('file uploads/'.$material->title)}}" download = "{{$material->title}}"> {{$material->title}} </a> 
                              
                            </div>
                            <hr>
                            <br>
                            @endforeach
                            @endif
                         
                           
                          </div> --}}
                
                        </div>
                        </div>
                  </div>
                  <!-- /container -->
</div> <!-- end grid---->
 



</main><!-- End #main -->
@endsection