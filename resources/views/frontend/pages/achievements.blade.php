
@extends('layouts.frontend.innermaster')


@section('content')
<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center" style="margin-top: 12px">
      {{-- <h1><?=$page_title?></h1> --}}
        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          <li><a href="">project achievements</a></li>
         
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

<p>{!!$item->description!!}</p>

@endforeach

   
        
           

    </div>
  </section><!-- End Services Section -->



</main><!-- End #main -->
@endsection