

@extends('layouts.frontend.innermaster')


@section('content')
<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
         <?=$page_title?></h1> 
        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          
         
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs Section -->

  <section id="resources" class="services">
    <div class="container">
   
      <div class="accordion accordion-flush" id="accordionFlushExample">
        @foreach($impactareas as $model)
        <div class="accordion-item">
          <div class="card">
          <h2 class="card-header" id="flush-h-{{$model->id}}" >
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-{{$model->id}}" aria-expanded="false" aria-controls="flush-{{$model->id}}">
           {{$model->title}}
            </button>
          </h2>
          <div id="flush-{{$model->id}}" class="accordion-collapse collapse" aria-labelledby="flush-h-{{$model->id}}" data-bs-parent="#accordionFlushExample">
            <div class="card-body">{!!$model->introduction!!}</div>
          </div>
      
          <div id="flush-{{$model->id}}" class="accordion-collapse collapse" aria-labelledby="flush-h-{{$model->id}}" data-bs-parent="#accordionFlushExample">
            <div class="card-body">{!!$model->description!!}</div>
          </div>
        </div>
        </div>
        <br>
     @endforeach
      
     
      </div>

    </div>
  </section><!-- End Services Section -->

</main><!-- End #main -->
@endsection