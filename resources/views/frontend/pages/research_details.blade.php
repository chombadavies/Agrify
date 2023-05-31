

@extends('layouts.frontend.innermaster')


@section('content')
<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
      <h4>{{$research_activity->title}}</h4>
        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
         
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
                        <img src="{{asset('frontend/img/hero-bg.jpg')}}" alt="" height="350" width="100%" style="border-radius: 12px;">
                      </div>
                      <br>
                      <div class="container">
                        <p><b>Research Details $ Objectives: </b>{!!$research_activity->description!!}</p>
                        
                      </div>

                      <div class="container">
                        <p><b>Research Activities : </b>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. 
                           </p><p> The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, 
                             as opposed to using 'Content here, content here', making it look like readable English.</p>
                        
                      </div>
                      <div class="container">
                        <p><b>Innovations : </b></p>
                        
                        <div class="row">
                            <figure class="effect-sarah" style="border-radius: 12px;height:182px!important">
                          
                                <img alt="logo" src="{{asset('frontend/img/cashew.jpg')}}" style="border-radius: 12px;"/>
                             
                                    <figcaption>
                                        <h2>Inovation Name<span></span></h2>
                                        {{-- @php
                                            $limit=str_limit($valuechain->introduction,$limit=110,$end='...');
                                        @endphp
      
                                        <p>{!!$limit!!}</p> --}}
                                         
                                    </figcaption>
                                </figure>
                                <figure class="effect-sarah" style="border-radius: 12px;height:182px!important">
                          
                                    <img alt="logo" src="{{asset('frontend/img/cashew.jpg')}}" style="border-radius: 12px;"/>
                                 
                                        <figcaption>
                                            <h2>Inovation Name<span></span></h2>
                                            {{-- @php
                                                $limit=str_limit($valuechain->introduction,$limit=110,$end='...');
                                            @endphp
          
                                            <p>{!!$limit!!}</p> --}}
                                             
                                        </figcaption>
                                    </figure>

                                    <figure class="effect-sarah" style="border-radius: 12px;height:182px!important">
                          
                                        <img alt="logo" src="{{asset('frontend/img/cashew.jpg')}}" style="border-radius: 12px;"/>
                                     
                                            <figcaption>
                                                <h2>innovation Name<span></span></h2>
                                                {{-- @php
                                                    $limit=str_limit($valuechain->introduction,$limit=110,$end='...');
                                                @endphp
              
                                                <p>{!!$limit!!}</p> --}}
                                                 
                                            </figcaption>
                                        </figure>

                        </div>
                      </div>


                     
                      
                        </div>

                        <div class="col-md-1">

                        </div>
                         <div class="col-md-3">
                          <div class="container">
                        
                            <div class="section-title">
                                <h2>Related Research Activities</h2>
                              </div>
                              {{-- @php
                                  $related=App\Models\Research::where('category_id',$research_activity->id)->get();
                              @endphp --}}
                              @if( $related->count()>0)
                              @foreach ($related as $item)
                                  <a href="{{route('reseach_details',$item->id)}}">
                              <figure class="effect-sarah" style="border-radius: 12px;height:182px!important">
                          
                                <img alt="logo" src="{{asset('frontend/img/hero-bg.jpg')}}" style="border-radius: 12px;"/>
                             
                                    <figcaption>
                                        <h2>{{$item->alias}}<span></span></h2>
                                        {{-- @php
                                            $limit=str_limit($valuechain->introduction,$limit=110,$end='...');
                                        @endphp
      
                                        <p>{!!$limit!!}</p> --}}
                                         
                                    </figcaption>
                                </figure>
                            </a>
                                @endforeach
                         @else

                               
                        <div class="warning">
                            <h2>No Related Research Found</h2>
                        </div>
                               
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