@extends('layouts.frontend.master')

@section('content')
<main>
    <br>
    <div class="" style="display:flex;justify-content:center">
       
        <img src="{{asset('backend/uploads/'.$partner->image)}}" class="img-fluid" alt="" height="50" width="50"><br>
        <span>{{$partner->title}}</span>
    </div>
    <div style="display:flex;justify-content:center"><span>{{strip_tags($partner->project_overview)}}</span></div>
    <!-- /top_banner -->
     
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