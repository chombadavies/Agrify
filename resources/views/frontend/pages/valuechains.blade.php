@extends('layouts.frontend.innermaster')


@section('content')
<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
      <h1>Valuechains</h1>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>valuechains</li>
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
                                  <h2>{{$valuechain->title}}<span></span></h2>
                                  <p>{{str_limit(strip_tags($valuechain->introduction),$limit=100,$end='...');}}</p>
                                   
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