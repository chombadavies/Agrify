@extends('layouts.frontend.innermaster')


@section('content')
<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center" style="margin-top: 12px">
      
        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          <li><a href="{{route('resources')}}">resources</a></li>
          <li><a href="#">Value Chains</a></li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs Section -->

  <section class="" style="margin-top:0">

    <div class="container">

      <div class="section-title">
        <h2>Value Chains</h2>
      </div>
                  <div class="content">
                      <div class="grid">
                        @foreach ($valuechains as $valuechain)
                     <a href="{{route('valuechain.details',$valuechain->id)}}">  
                        <figure class="effect-sarah" style="border-radius: 20px">
                          
                          <img alt="logo" src="{{asset($valuechain->image)}}" style="object-fit: cover"/>
                       
                              <figcaption>
                                  <h5>{{$valuechain->title}}<span></span></h5>
                                  {{-- @php
                                      $limit=str_limit($valuechain->introduction,$limit=110,$end='...');
                                  @endphp

                                  <p>{!!$limit!!}</p> --}}
                                   
                              </figcaption>
                          </figure>
                           </a>
                        @endforeach
                     
                        </div>
                  </div>
                  <!-- /container -->
</div> <!-- end grid---->
  </section>

</main><!-- End #main -->
@endsection