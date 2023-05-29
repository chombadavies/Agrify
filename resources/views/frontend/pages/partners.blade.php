
@extends('layouts.frontend.innermaster')


@section('content')
<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
      <h4>AgriFi CS APP Partners</h4>
        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
         
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs Section -->

  <section id="resources" class="services">
    <div class="container">

      <div class="container margin_60_35 add_bottom_30">
            <br>
            <div class="section-title">
                <h2>AgriFI CS APP Partners</h2>
              </div>
      <div class="meme card-success card-outline">
                    <br>
                    <div style="padding: 40px;background-color:#f1f7fd;border-radius:24px">
                  <input type="button" value="Partners Mandate" style="cursor:ew-resize">
                      <p >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                        software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <div  style="margin-left: 40% ">
                          <input type="button" value="List Of AgriFI CS APP Kenya Partners" style="cursor:ew-resize;margin-right:50%" >
                        </div>
         
                    </div>
                  
                 
                  <div class="row justify-content-center align-items-center ">
                @foreach ($partners as $partner)
              
                <div class="col-lg-4 pl-lg-5 text-center d-none d-lg-block">
                  <a href="{{route('partner',$partner->id)}}">
                  <img src="{{asset('backend/uploads/'.$partner->image)}}" alt="" class="img-fluid" style="border-radius:14px;border:5px solid #000000; padding:3px; margin:5px;height:120" >
                  <div>
                    <span>{{$partner->title}}</span></a>
                  </div>
          </div>
                @endforeach
                </div>


                </div>
            
    </div>
    </div>
  </section><!-- End Services Section -->
</main><!-- End #main -->
@endsection

<style>
           .meme{
  box-shadow: 
   5px 5px 10px 5px rgba(126,126,126),
   -5px 0px  rgb(158, 158, 158);
      border-radius: 5px; 
      /* height: 500px; */
      border-radius:12px;
     }

</style>