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
                <li data-filter=".filter-card">Images</li>
                <li data-filter=".filter-web">Videos</li>
                <li data-filter=".filter-app">Latest Wews</li>
              </ul>
            </div>
          </div>
  
          <div class="row portfolio-container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100" style="position: relative; height: 757.95px;">
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-app" style="position: absolute; left: 20px; top: 0px;">
              <div class="portfolio-wrap">
                <img src="{{asset('frontend/img/about.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="{{asset('frontend/img/about.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-web" style="position: absolute; left: 320.883px; top: 0px;">
              <div class="portfolio-wrap">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/V4quydsV310" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <div class="portfolio-links">
                  <a href="https://www.youtube.com/embed/V4quydsV310" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="https://www.youtube.com/embed/V4quydsV310" title="More Details" target="blank"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-app" style="position: absolute; left: 641.766px; top: 0px;">
              <div class="portfolio-wrap">
                <img src="{{asset('frontend/img/about.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="{{asset('frontend/img/about.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-card" style="position: absolute; left: 0px; top: 252.65px;">
              <div class="portfolio-wrap">
                <img src="{{asset('frontend/img/20230316_125402.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="{{asset('frontend/img/20230316_125402.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-web" style="position: absolute; left: 320.883px; top: 252.65px;">
              <div class="portfolio-wrap">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/-lq7rMby6bQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <div class="portfolio-links">
                  <a href="https://www.youtube.com/embed/-lq7rMby6bQ" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2" ><i class="bx bx-plus"></i></a>
                  <a href="https://www.youtube.com/embed/-lq7rMby6bQ" title="More Details" target="blank"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-app" style="position: absolute; left: 641.766px; top: 252.65px;">
              <div class="portfolio-wrap">
                <img src="{{asset('frontend/img/20230316_125353.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="{{asset('frontend/img/20230316_125353.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-card" style="position: absolute; left: 0px; top: 505.3px;">
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
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-web" style="position: absolute; left: 641.766px; top: 505.3px;">
              <div class="portfolio-wrap">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/C82cpli7WhQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <div class="portfolio-links">
                  <a href="https://www.youtube.com/embed/C82cpli7WhQ" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="https://www.youtube.com/embed/C82cpli7WhQ" title="More Details" target="blank"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
  
          </div>
  
        </div>
      </section>

      {{-- <div class="row">
       

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-pills"></i></div>
            <h4><a href="{{route('valuechains')}}">Valuechains</a></h4>
            <p>Get understanding in optimizing agricultural valuechins and improving productivity, efficiency, and sustainability.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-hospital-user"></i></div>
            <h4><a href="">Project publications </a></h4>
            <p> Here you can explore the  projects dissemination materials.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-hospital-user"></i></div>
            <h4><a href="{{route('media')}}">Media </a></h4>
            <p> Access a wide range of multimedia content, including images, videos, and press releases, showcasing our KALRO's latest news, updates, and events..</p>
          </div>
        </div>

    

      </div> --}}

    </div>
  </section><!-- End Services Section -->
  {{-- <section >
    <div class="container">


    <div class="grid">
    <div class="container">
                  <div class="content">
                      <div class="grid">
                     
                      <figure class="effect-sarah">
                            <img alt="logo" src="{{asset('frontend/img/media/media.png')}}"/>
                                <figcaption>
                                    <h2>Media Item<span></span></h2>
                                    <p>Learn about the agronomic practices, cultivation techniques, and market insights for greengrams</p>
                                    <a href="#">View more</a>
                                </figcaption>
                            </figure>


                            <figure class="effect-sarah">
                           <img alt="logo" src="{{asset('frontend/img/media/media.png')}}"/>
                           
                                <figcaption>
                                    <h2>MediaItem<span></span></h2>
                                    <p>Dive into the fascinating world of fish, from species profiles to tips on fish farming</p>
                                    <a href="#">View more</a>
                                </figcaption>
                            </figure>
                             <figure class="effect-sarah">
                          <img alt="logo" src="{{asset('frontend/img/media/media.png')}}"/>
                                <figcaption>
                                    <h2>Media Item<span></span></h2>
                                    <p>Learn about the agronomic practices, cultivation techniques, and market insights for greengrams</p>
                                    <a href="#">View more</a>
                                </figcaption>
                            </figure>


                            <figure class="effect-sarah">
                          <img alt="logo" src="{{asset('frontend/img/media/media.png')}}"/>
                           
                                <figcaption>
                                    <h2>Media Item<span></span></h2>
                                    <p>Dive into the fascinating world of fish, from species profiles to tips on fish farming</p>
                                    <a href="#">View more</a>
                                </figcaption>
                            </figure>

                              <figure class="effect-sarah">
                            <img alt="logo" src="{{asset('frontend/img/media/media.png')}}"/>
                                <figcaption>
                                    <h2>Media Item<span></span></h2>
                                    <p>Learn about the agronomic practices, cultivation techniques, and market insights for greengrams</p>
                                    <a href="#">View more</a>
                                </figcaption>
                            </figure>


                            <figure class="effect-sarah">
                           <img alt="logo" src="{{asset('frontend/img/media/media.png')}}"/>
                           
                                <figcaption>
                                    <h2>MediaItem<span></span></h2>
                                    <p>Dive into the fascinating world of fish, from species profiles to tips on fish farming</p>
                                    <a href="#">View more</a>
                                </figcaption>
                            </figure>
                             <figure class="effect-sarah">
                          <img alt="logo" src="{{asset('frontend/img/media/media.png')}}"/>
                                <figcaption>
                                    <h2>Media Item<span></span></h2>
                                    <p>Learn about the agronomic practices, cultivation techniques, and market insights for greengrams</p>
                                    <a href="#">View more</a>
                                </figcaption>
                            </figure>


                            <figure class="effect-sarah">
                          <img alt="logo" src="{{asset('frontend/img/media/media.png')}}"/>
                           
                                <figcaption>
                                    <h2>Media Item<span></span></h2>
                                    <p>Dive into the fascinating world of fish, from species profiles to tips on fish farming</p>
                                    <a href="#">View more</a>
                                </figcaption>
                            </figure>

                      
                        </div>
                  </div>
                  <!-- /container -->
</div> <!-- end grid---->
  </section> --}}

</main>

<!-- End #main -->
@endsection


@section('scripts')
<script>

 </script>

@endsection