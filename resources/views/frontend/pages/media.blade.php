@extends('layouts.frontend.innermaster')


@section('content')
<main id="main" >
  {{-- <link href="{{asset('frontend/media/css/style.css')}}" rel="stylesheet"> --}}

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
      <h1>Media</h1>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Media</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs Section -->


  <section id="resources" class="services">
    <div class="container">

      <div class="section-title">
       {{-- <input type="button" value=""> --}}

       <section id="portfolio" class="portfolio section-bg">
        <div class="container">
  
          <div class="section-title">
            <h2>Media Files and News</h2>
            <p>Access a wide range of multimedia content, including images, videos, 
              and press releases, showcasing our KALRO's latest news, updates, and events.</p>
          </div>
  
          <div class="row aos-init aos-animate" data-aos="fade-up">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-card" >Photo Gallery</li>
                <li data-filter=".filter-web">Videos</li>
                <li data-filter=".filter-app">Latest Wews</li>
              </ul>
            </div>
          </div>
  


       
          <div class="row portfolio-container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100" style="position: relative; height: 757.95px;">

              {{-- @foreach ($collection as $item)
              <div class="col-lg-4 col-md-6 portfolio-item filter-app" style="position: absolute; left: 20px; top: 0px;">
                <div class="portfolio-wrap">
                  <img src="{{asset('frontend/img/about.jpg')}}" class="img-fluid" alt="">
                  <div class="portfolio-links">
                    <a href="{{asset('frontend/img/about.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
              @endforeach --}}
          
            @foreach ($videos as $video)

            <div class="col-lg-4 col-md-6 portfolio-item filter-web" style="position: absolute; left: 320.883px; top: 0px;">
              <div class="portfolio-wrap">
                <iframe width="560" height="315" src="{{$video->video_link}}" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <div class="portfolio-links">
                  <a href="{{$video->video_link}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
                  <a href="{{$video->video_link}}" title="More Details" target="blank"><i class="bx bx-link"></i></a>
                </div>
              </div>
              <p>{{$video->video_title}}</p>
            </div>
            @endforeach
  
          
  
            {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-app" style="position: absolute; left: 641.766px; top: 0px;">
              <div class="portfolio-wrap">
                <img src="{{asset('frontend/img/about.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="{{asset('frontend/img/about.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div> --}}

         
  
              @foreach ($images as $image)
              <div class="col-lg-4 col-md-6 portfolio-item filter-card" style="position: absolute; left: 0px; top: 252.65px;">
                <div class="portfolio-wrap">
                  <img src="{{asset('backend/uploads/'.$image->image)}}" class="img-fluid" alt="">
                  <div class="portfolio-links">
                    <a href="{{asset('backend/uploads/'.$image->image)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="memmmmeememem"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
                  
              @endforeach
  
            {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-web" style="position: absolute; left: 320.883px; top: 252.65px;">
              <div class="portfolio-wrap">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/-lq7rMby6bQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <div class="portfolio-links">
                  <a href="https://www.youtube.com/embed/-lq7rMby6bQ" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2" ><i class="bx bx-plus"></i></a>
                  <a href="https://www.youtube.com/embed/-lq7rMby6bQ" title="More Details" target="blank"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div> --}}
  
            {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-app" style="position: absolute; left: 641.766px; top: 252.65px;">
              <div class="portfolio-wrap">
                <img src="{{asset('frontend/img/20230316_125353.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="{{asset('frontend/img/20230316_125353.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div> --}}
  
            {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-card" style="position: absolute; left: 0px; top: 505.3px;">
              <div class="portfolio-wrap">
                <img src="{{asset('frontend/img/20230316_125353.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="{{asset('frontend/img/20230316_125353.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-card" style="position: absolute; left: 320.883px; top: 505.3px;">
              <div class="portfolio-wrap">
                <img src="{{asset('frontend/img/about.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="{{asset('frontend/img/about.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div> --}}
  
            {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-web" style="position: absolute; left: 641.766px; top: 505.3px;">
              <div class="portfolio-wrap">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/C82cpli7WhQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <div class="portfolio-links">
                  <a href="https://www.youtube.com/embed/C82cpli7WhQ" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="https://www.youtube.com/embed/C82cpli7WhQ" title="More Details" target="blank"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div> --}}
  
          </div>
  
        </div>
      </section>

          

    </div>
  </section><!-- End Services Section -->


</main>

<!-- End #main -->
@endsection


@section('scripts')
<script>

 </script>

@endsection