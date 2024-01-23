

@extends('layouts.frontend.innermaster')


@section('content')
<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center" style="margin-top: 12px">
      
        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          <li><a href="{{route('partner',$project->partner->id)}}">{{$project->partner->title}}</a></li>
          <li><a href="">project</a></li>
          
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs Section -->

  
    <div class="container">
      <div class="section-title">
        <h2>{{$project->title}}</h2>
      </div>

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
                          @if($project->projectachievement != null)
                          <div>    
                            <a  style="cursor:pointer;cursor:pointer;background-color: #20b15e;color:whitesmoke" class="reject-modal btn"  data-url="{{route('project.achievements',$project->id)}}">Read More</a>
                          </div>    
                          @else
                              
                          @endif
                          <br>
                        </div>
                        </div>
                  </div>
                  <!-- /container -->
</div> <!-- end grid---->
 



</main><!-- End #main -->
@endsection

<style>

th, td { white-space: nowrap; }

  .modal .modal-dialog {
  max-width: 750px;
  }
  
  </style>