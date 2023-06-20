
@extends('layouts.frontend.innermaster')


@section('content')
<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
      {{-- <h1><?=$page_title?></h1> --}}
        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
         
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs Section -->

  <section id="resources" class="services">
    <div class="container">

      <div class="section-title">
        <h2> AgriFI CS APP Project Achievements</h2>
      </div>

      <div class="container margin_60_35 add_bottom_30">
        
@foreach ($all_achievements as $item)
<p>{!!$item->introduction!!}</p>
<div >
  <img src="{{asset('backend/uploads/'.$item->first_image)}}" alt="" width="100%" height="80%">
</div>
<p>{!!$item->description!!}</p>
<div >
  <img src="{{asset('backend/uploads/'.$item->second_image)}}" alt="" width="100%" height="80%" >
</div>
@endforeach

   
        
           

    </div>
  </section><!-- End Services Section -->



</main><!-- End #main -->
@endsection