

@extends('layouts.frontend.innermaster')


@section('content')
<main id="main">
   @php
            $intro = $valuechain->introduction; 
            $intro = strip_tags($intro); 

            $desc =$valuechain->description; 
            $desc = strip_tags($desc); 
        @endphp
  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex">
      <h1>{{$valuechain->title}}</h1>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li></li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs Section -->

  <section class="inner-page">
    <div class="container">


    <div class="grid">
    <div class="container">
                  <div class="content">
                      <div class="row">
                     
                     <div class="col-md-8">
                      <div style="display: flex;justify-content:center;border-radius: 12px;">
                        <img src="{{asset('backend/uploads/'.$valuechain->image)}}" alt="" height="350" width="100%" style="border-radius: 12px;">
                      </div>
                      <br>
                      <div class="container">
                        <p><b> Introduction : </b>{{$intro}}</p>
                        
                      </div>
                      <div class="container">
                        <p><b>  Implemetation Details : </b>{{$desc}}</p>
                      </div> 
                
                        </div>
                         <div class="col-md-4">
                          <div class="container">
                            <input type="button" value="{{$valuechain->title}} dissemination materials" class="btn btn-block btn-success">
                          
                            <br> <br>
                            @foreach ($valuechain->materials as $material)
                                 <div>
                              <img src="{{asset('frontend/img/Untitled.png')}}" alt="">
                            </div>
                            <div>
                              <a href ="{{asset('file uploads/'.$material->title)}}" download = "{{$material->title}}"> {{$material->title}} </a> 
                              
                            </div>
                            <br>
                            @endforeach
                           
                         
                           
                          </div>
                
                        </div>
                        </div>
                  </div>
                  <!-- /container -->
</div> <!-- end grid---->
  </section>

</main><!-- End #main -->
@endsection