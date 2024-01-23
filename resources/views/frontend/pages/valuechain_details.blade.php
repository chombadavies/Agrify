

@extends('layouts.frontend.innermaster')
@section('content')
<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center" style="margin-top: 12px">
     
        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          <li><a href="{{route('valuechains')}}">valuechains</a></li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs Section -->

  <section class="inner-page">
    <div class="container">

      <div class="section-title">
        <h2>{{$valuechain->title}}</h2>
      </div>
    <div class="grid">
    <div class="container">
                  <div class="content">
                      <div class="row">
                     
                     <div class="col-md-8">
                      <div style="display: flex;justify-content:center;border-radius: 12px;overflow:hidden">
                        <img src="{{asset($valuechain->details_image)}}" alt="" height="100%" width="100%"  style="border-radius: 12px;object-fit:fill">
                        {{-- <div><i>{{$valuechain->title}}</i></div> --}}
                      </div>
                      <br>
                      <div class="container">
                          <div><i>{{$valuechain->title}}</i></div> <br>
                        <p><b> Introduction: </b>{!!$valuechain->introduction!!}</p>
                        
                      </div>
                      <div class="container">
                        <p><b>  Implemetation Details: </b>{!!$valuechain->description!!}</p>
                      </div> 
                      
                        </div>

                        {{-- <span class="vl"></span> --}}
                         <div class="col-md-4">
                          <div class="container">
                            <input type="button" value="{{$valuechain->title }} dissemination materials" class="btn btn-block" style="background-color: #20b15e;color:whitesmoke">
                          
                            <br> <br>
                            @if ($valuechain->title=="Mangoes-IPM" 
                             || $valuechain->title=="KALRO improved indigenous chicken (KIIC)"
                             || $valuechain->title=="Sorghum" )

                             @foreach ($valuechain->materials as $material)
                              <div class="row">
                            <div class="col-md-6">
                              <a href ="{{asset($material->pdf)}}" download = "{{$material->title}}">
                              <img src="{{asset('frontend/img/Untitled.png')}}" alt="" height="60"></a>
                            </div>
                            <div class="col-md-6">
                              <a href ="{{asset($material->pdf)}}" download = "{{$material->title}}"> {{$material->title}} </a> 
                              
                            </div>
                           
                          </div>
                          <hr>
                      
                      @endforeach
                          @else
                              
                            @foreach ($valuechain->materials as $material)
                            <a href ="{{asset($material->pdf)}}" download = "{{$material->title}}">
                                 <div>
                              <img src="{{asset('frontend/img/Untitled.png')}}" alt="" height="80">
                            </div>
                            <div>
                               {{$material->title}}  
                              
                            </div>
                          </a>
                            <hr>
                            <br>
                            @endforeach
                            @endif
                         
                           
                          </div>
                
                        </div>
                        </div>
                  </div>
                  <!-- /container -->
</div> <!-- end grid---->
  </section>



</main><!-- End #main -->
@endsection