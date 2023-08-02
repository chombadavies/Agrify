

@extends('layouts.frontend.innermaster')


@section('content')
<main id="main" style="vertical-height:">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
      <h4>{{$partner->title}}</h4>
        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          <li><a href="{{route('partners')}}">Partners</a></li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs Section -->

 
    <div class="container">


    <div class="grid">
    <div class="container">
                  <div class="content">
                      <div class="row">
                     
                     <div class="col-md-8">

                      <div class="" style="display:flex;justify-content:center">
                        <a href="{{$partner->url}}" target="blank"> 
                         <img src="{{asset($partner->image)}}" class="img-fluid" alt="" height="80"><br></div>
                         <div >
                             <span>{{$partner->title}}</span></a>
                             
                         </div>
                      <br>
                      <div class="container">
                        <p>{!!$partner->description!!}</p>
                        
                      </div>
                      <div class="container">
                        <p><b> Projects Implemetation Overview: </b>{!!$partner->project_overview!!}</p>
                      </div> 
                      
                        </div>

        
                         <div class="col-md-4">
                      <div class="card">
                        <input type="button" value=" Projects" class="btn btn-block" style="background-color: #20b15e;color:whitesmoke">

                        <div class="card-body">

                          @foreach ($partner->projects as $project)
                          <a href="{{route('project.details',$project->id)}}">
                          <div>
                            <a href="{{route('project.details',$project->id)}}">
                       <img src="{{asset($project->image)}}" alt="" height="120">
                     </div>
                     <div>
                        <span>{{$project->title}}</span></a>
            
                       
                     </div>
                     <hr>
                     <br>
                     @endforeach
                        </div>

                      </div>






                          {{-- <div class="container">
                            <br> 
                            <input type="button" value="{{$partner->title }} Scalling projects" class="btn btn-block" style="background-color: #85AE46;color:whitesmoke">
                          
                            <br> <br>
                   
                          
                              
                            @foreach ($partner->projects as $project)
                                 <div>
                              <img src="{{asset('backend/uploads/'.$project->image)}}" alt="" height="120">
                            </div>
                            <div>
                                <a href=""><span>{{$project->title}}</span></a>
                   
                              
                            </div>
                            <hr>
                            <br>
                            @endforeach
                            
                         
                           
                          </div> --}}
                
                        </div>
                        </div>
                  </div>
                  <!-- /container -->
</div> <!-- end grid---->
<br>



</main><!-- End #main -->
@endsection