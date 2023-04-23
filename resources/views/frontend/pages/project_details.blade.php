@extends('layouts.frontend.innermaster')

@section('content')
<main>
    <div class="container margin_30">
       
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="all">
                    <div class="slider">
                        <div class="" style="">
                            <img src="{{asset('backend/uploads/'.$project->image)}}" alt="" height="80%" width="90%">

                        </div>
                    </div>
                 
                </div>
            </div>
            <div class="col-md-6">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Projects</a></li>
                       
                    </ul>
                </div>
                <!-- /page_header -->
                
                <div class="prod_info" style="display: flex;justify-content:centre">
                    <h1>{{$project->title}}</h1>

                </div>
                <div class="prod_info" style="display: flex;justify-content:centre">
                   
                    <p><br>{{strip_tags($project->description)}}</p>
                </div>
               
              
                <!-- /product_actions -->
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
    
    <div class="tabs_product">
        <div class="container">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a id="tab-A" href="#pane-A" class="nav-link active" data-bs-toggle="tab" role="tab"></a>
                </li>
                <li class="nav-item">
                    <a id="tab-B" href="#pane-B" class="nav-link" data-bs-toggle="tab" role="tab"></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /tabs_product -->
    <div class="tab_content_wrapper">
        <div class="container">
            <div class="tab-content" role="tablist">
                <div id="pane-A" class="card tab-pane fade active show" role="tabpanel" aria-labelledby="tab-A">
                   
                   
                </div>
                <!-- /TAB A -->
                <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
                   
                   
                </div>
                <!-- /tab B -->
            </div>
            <!-- /tab-content -->
        </div>
        <!-- /container -->
    </div>
    <!-- /tab_content_wrapper -->


 

</main>
@endsection