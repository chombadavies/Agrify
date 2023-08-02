
@extends('layouts.frontend.innermaster')


@section('content')
<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center dada">
      {{-- <h1> AgriFI CS APP Co-aplicants</h1> --}}
        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          <li><a href="{{route('coapplicants')}}">Contact us</a></li>
         
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs Section -->

  <section id="resources" class="services">
    <div class="container">
      <div class="section-title">
      
      </div>
      <div class="" >

              <div class="row justify-content-center align-items-center" style="background-color:#f1f7fd;border-radius:24px" >
                        <div class="col-md-6"> 
                        <h1>How can we help you?</h1>

                        <div class="info-author clearfix">
                          <div class="featured-author float-left">
                              <img src="images/team/c2.jpg" alt="image">
                          </div>
                          <div class="contact-author">
                              <h3>Call center</h3>
                              <ul style="text-decoration-style: none">
                                  <li>Customer Support</li>
                                  <li>+254 722 206986</li>
                                  <li>agrificsapp@kalro.org</li>
                              </ul>
                          </div>
                      </div>
                       </div>

                       <div class="col-md-6">
                      
                    <form action="" method="">@csrf
      <div class="row">
        <div class="col-md-12">
        <input type="text" name="" placeholder="name">
        </div>
       
      </div>
<br><br>
      <div class="row">
        <div class="col-md-12">
        <input type="text" name="" placeholder="email">
        </div>
      
      </div>

      <br>
      <div class="row">
        
          <input type="button" type="submit" value="Send a Message" class="btn btn-block btn-sm" style="background-color:#a37153;color:aliceblue">
      
        
      </div>

                    </form>
                          
                             
                             
                      
                       </div>
        
            </div>
       
    </div>

    </div>
  </section><!-- End Services Section -->
</main><!-- End #main -->
@endsection