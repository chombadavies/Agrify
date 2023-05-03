@extends('layouts.frontend.innermaster')

@section('content')
<main>
    <br>
    <div class="" style="display:flex;justify-content:center">
       <a href="https://bluecrossnyatike.org" target="blank"> 
        <img src="{{asset('backend/uploads/'.$partner->image)}}" class="img-fluid" alt="" height="100" width="100"><br></div>
        <div style="display:flex;justify-content:center">
            <span>{{$partner->title}}</span></a>
            
        </div>
    
    <br>
    <div class="row container " >
       <div>
        <br><br><br>
       </div>
    {{-- <div  class="container col-md-6">
       <h2> About{{$partner->title}} </h2>
        <p>{{strip_tags($partner->description)}}</p></div> --}}
        <div  class=" col-md-6">  
        <div class="prod_info" style="display: flex;justify-content:centre">
            <span> <b> About {{$partner->title}}</b></span>

        </div>
        <div class="" style="display: flex;justify-content:centre">
           
            
            <p>{{strip_tags($partner->description)}}</p></div>
        </div>


    <div  class=" col-md-6">  
        <div class="prod_info" style="display: flex;justify-content:centre">
            <span> <b>{{$partner->title}} project Overview</b></span>

        </div>
        <div class="" style="display: flex;justify-content:centre">
           
            
            <p>{{strip_tags($partner->project_overview)}}</p></div>
        </div>
</div>
     
       <div class="container margin_30">
        
        <div class="row">
            <aside class="col-lg-3" id="sidebar_fixed">
                <div class="filter_col">
                    <div class="inner_bt"><a href="#" class="open_filters"><i class="ti-close"></i></a></div>
                    <div class="filter_type version_2">
                        <h4><a href="#filter_1" data-bs-toggle="collapse" class="opened">Projects</a></h4>
                        <div class="collapse show" id="filter_1">
                            <ul>
                               
                                @foreach ($partner->projects as $project)
                                <li>
                                    <a href="{{route('project.details',$project->id)}}"><label class="container_check">{{$project->title}} </label></a>
             
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- /filter_type -->
                    </div>
                </div>
            </aside>
            <!-- /col -->
            <div class="col-lg-9">
                <div class="row small-gutters">
                   
            @foreach ($partner->projects as $project)
            <div class="col-6 col-md-4">
                <div class="grid_item">
                   
                    <figure>
                        <a href="{{route('project.details',$project->id)}}">
                            <img class="img-fluid lazy" src="{{asset('backend/uploads/'.$project->image)}}" data-src="{{asset('backend/uploads/'.$project->image)}}" alt="">
                        </a>
                    </figure>
                    <a href="product-detail-1.html">
                        <h3>{{$project->title}}</h3>
                    </a>
                </div>
                <!-- /grid_item -->
            </div>
            <!-- /col -->
            @endforeach
                   
	
                    
                </div>
               
            </div>
            <!-- /col -->
        </div>
        <!-- /row -->			
            
    </div>
    <!-- /container -->
</main>
@endsection