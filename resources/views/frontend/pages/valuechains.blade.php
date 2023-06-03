@extends('layouts.frontend.innermaster')


@section('content')
<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
      <h1>Value Chains</h1>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>value Chains</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs Section -->

  <section class="" style="margin-top:0">

    <div class="container">
                  <div class="content">
                      <div class="grid">
                        @foreach ($valuechains as $valuechain)
                     <a href="{{route('valuechain.details',$valuechain->id)}}">  
                        <figure class="effect-sarah" style="border-radius: 12px;">
                          
                          <img alt="logo" src="{{asset('backend/uploads/'.$valuechain->image)}}" style="border-radius: 12px;"/>
                       
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