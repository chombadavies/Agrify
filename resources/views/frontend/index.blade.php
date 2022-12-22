@extends('layouts.frontend.master')

@section('content')
   
<main>
    <div id="carousel-home" class="add_top_5">
        <div class="owl-carousel owl-theme">
            <div class="owl-slide cover" style="background-image: url(frontend/img/slides/slide.jpg);">
                <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                    <div class="container">
                        <div class="row justify-content-center justify-content-md-end">
                            <div class="col-lg-6 static">
                                <div class="slide-text text-end white">
                                    <h2 class="owl-slide-animated owl-slide-title">Attack Air<br>Max 720 Sage Low</h2>
                                    <p class="owl-slide-animated owl-slide-subtitle">
                                        Limited items available at this price
                                    </p>
                                    <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="listing-grid-1-full.html" role="button">Shop Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/owl-slide-->
            <div class="owl-slide cover" style="background-image: url(frontend/img/slides/slide.jpg);">
                <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                    <div class="container">
                        <div class="row justify-content-center justify-content-md-start">
                            <div class="col-lg-6 static">
                                <div class="slide-text white">
                                    <h2 class="owl-slide-animated owl-slide-title">Attack Air<br>VaporMax Flyknit 3</h2>
                                    <p class="owl-slide-animated owl-slide-subtitle">
                                        Limited items available at this price
                                    </p>
                                    <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="listing-grid-1-full.html" role="button">Shop Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/owl-slide-->
            <div class="owl-slide cover" style="background-image: url(frontend/img/slides/slide.jpg);">
                <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(255, 255, 255, 0.5)">
                    <div class="container">
                        <div class="row justify-content-center justify-content-md-start">
                            <div class="col-lg-12 static">
                                <div class="slide-text text-center black">
                                    <h2 class="owl-slide-animated owl-slide-title">Attack Air<br>Monarch IV SE</h2>
                                    <p class="owl-slide-animated owl-slide-subtitle">
                                        Lightweight cushioning and durable support with a Phylon midsole
                                    </p>
                                    <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="listing-grid-1-full.html" role="button">Shop Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/owl-slide-->
            </div>
        </div>
        <div id="icon_drag_mobile"></div>
    </div>
    <!--/carousel-->

    <div class="feat">
        <div class="container">
            <ul>
                <li>
                    <div class="box">
                        <i class="ti-gift"></i>
                        <div class="justify-content-center">
                            <h3>Free Shipping</h3>
                            <p>For all oders over $99</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="box">
                        <i class="ti-wallet"></i>
                        <div class="justify-content-center">
                            <h3>Secure Payment</h3>
                            <p>100% secure payment</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="box">
                        <i class="ti-headphone-alt"></i>
                        <div class="justify-content-center">
                            <h3>24/7 Support</h3>
                            <p>Online top support</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!--/feat-->
    
    <div class="container margin_60_35" style="background-color: bisque">
        <div class="main_title">
            <h2>our History</h2>
            <span>About Agrify Project</span>
            <p>Cum doctus civibus efficiantur in imperdiet deterruisset</p>
        </div>
            <div class="row" >
                <div class="col-md-1"></div>
                <div class="col-md-6">
                    <p>The Kenya Agricultural and Livestock Research Organization (KALRO) is the premier research organization, 
                        charged with the main mandate of promoting, streamlining, coordinating, and regulating research in crops,
                         livestock, genetic resources, and biotechnology in Kenya.

                        It is also mandated to expedite equitable access to research information, resources, and technology and to
                         promote the application of the research findings and technology in the field of agriculture. In the execution of this mandate,
                          KALRO is supported by a network of 16 research institutes and over 30 centers spread across the country. 
                        
                        KALRO works directly with farmers, livestock keepers, the private sector, development partners, 
                        and other stakeholders involved in the agricultural research and development space
                        </p>
                </div>
                <div class="col-md-4">
                    <img src="{{asset('frontend/img/products/product_placeholder_square_medium.jpg')}}" alt="" height="280px" width="100%">
                </div>
            </div>
        
       
        
    </div>

  

    <div class="container margin_60_35">
        <div class="main_title mb-4">
            <h2>Our Resources</h2>
            <span>Resources</span>
            <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
        </div>
      
        <div class="isotope-wrapper">
            <div class="row small-gutters">
                <div class="col-6 col-md-4 col-xl-3 isotope-item sale">
                    <div class="grid_item">
                       
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{asset('frontend/img/products/shoes/2.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a class="btn btn-outline-success" role="button" aria-disabled="true">Primary link</a>


                            </div>
                          </div>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-6 col-md-4 col-xl-3 isotope-item sale">
                    <div class="grid_item">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{asset('frontend/img/products/shoes/2.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-6 col-md-4 col-xl-3 isotope-item sale">
                    <div class="grid_item">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{asset('frontend/img/products/shoes/2.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-6 col-md-4 col-xl-3 isotope-item sale">
                    <div class="grid_item">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{asset('frontend/img/products/shoes/2.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-6 col-md-4 col-xl-3 isotope-item sale">
                    <div class="grid_item">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{asset('frontend/img/products/shoes/2.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-6 col-md-4 col-xl-3 isotope-item sale">
                    <div class="grid_item">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{asset('frontend/img/products/shoes/2.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-6 col-md-4 col-xl-3 isotope-item sale">
                    <div class="grid_item">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{asset('frontend/img/products/shoes/2.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-6 col-md-4 col-xl-3 isotope-item sale">
                    <div class="grid_item">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{asset('frontend/img/products/shoes/2.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /isotope-wrapper -->
    </div>


    
    <!-- /container -->

    <div class="featured lazy" data-bg="url(frontend/img/slides/slide1.png)">
        <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
            <div class="container margin_60">
                <div class="row justify-content-center justify-content-md-start">

                </div>
            </div>
        </div>
    </div>
    <!-- /featured -->

   
    
    <div class="bg_gray">
      
        <div class="container margin_30">
            <div class="main_title mb-4">
                <h2>Agrify Partners</h2>
                <span>Partners</span>
               
            </div>
            <div id="brands" class="owl-carousel owl-theme">
                <div class="item">
                    <a href="#0"><img src="{{asset('frontend/img/brands/placeholder_brands.png')}}" data-src="{{asset('frontend/img/brands/logo_1.png')}}" alt="" class="owl-lazy"></a>
                </div><!-- /item -->
                <div class="item">
                    <a href="#0"><img src="{{asset('frontend/img/brands/placeholder_brands.png')}}" data-src="{{asset('frontend/img/brands/logo_2.png')}}" alt="" class="owl-lazy"></a>
                </div><!-- /item -->
                <div class="item">
                    <a href="#0"><img src="{{asset('frontend/img/brands/placeholder_brands.png')}}" data-src="{{asset('frontend/img/brands/logo_3.png')}}" alt="" class="owl-lazy"></a>
                </div><!-- /item -->
                <div class="item">
                    <a href="#0"><img src="{{asset('frontend/img/brands/placeholder_brands.png')}}" data-src="{{asset('frontend/img/brands/logo_4.png')}}" alt="" class="owl-lazy"></a>
                </div><!-- /item -->
                <div class="item">
                    <a href="#0"><img src="{{asset('frontend/img/brands/placeholder_brands.png')}}" data-src="{{asset('frontend/img/brands/logo_5.png')}}" alt="" class="owl-lazy"></a>
                </div><!-- /item -->
                <div class="item">
                    <a href="#0"><img src="{{asset('frontend/img/brands/placeholder_brands.png')}}" data-src="{{asset('frontend/img/brands/logo_6.png')}}" alt="" class="owl-lazy"></a>
                </div><!-- /item --> 
            </div><!-- /carousel -->
        </div><!-- /container -->
    </div>
    <!-- /bg_gray -->

    <div class="container margin_60_35" style="background-color: #009688 !important">
        <div class="main_title">
            <h2 style="color: white">Latest news</h2>
            {{-- <span>Blog</span> --}}
            <p style="color: white">Cum doctus civibus efficiantur in imperdiet deterruisset</p>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <a class="box_news" href="blog.html">
                    <figure>
                        <img src="{{asset('frontend/img/blog-thumb-placeholder.jpg')}}" data-src="img/blog-thumb-1.jpg" alt="" width="400" height="266" class="lazy">
                        <figcaption><strong>28</strong>Dec</figcaption>
                    </figure>
                    <ul>
                        <li class="meme">by Mark Twain</li>
                        <li class="meme">20.11.2017</li>
                    </ul>
                    <h4 class="meme">Pri oportere scribentur eu</h4>
                    <p class="meme">Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                </a>
            </div>
            <!-- /box_news -->
            <div class="col-lg-6">
                <a class="box_news" href="blog.html">
                    <figure>
                        <img src="img/blog-thumb-placeholder.jpg" data-src="img/blog-thumb-2.jpg" alt="" width="400" height="266" class="lazy">
                        <figcaption><strong>28</strong>Dec</figcaption>
                    </figure>
                    <ul>
                        <li class="meme">By Jhon Doe</li>
                        <li class="meme">20.11.2017</li>
                    </ul>
                    <h4 class="meme">Duo eius postea suscipit ad</h4>
                    <p class="meme">Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                </a>
            </div>
            <!-- /box_news -->
            <div class="col-lg-6">
                <a class="box_news" href="blog.html">
                    <figure>
                        <img src="img/blog-thumb-placeholder.jpg" data-src="img/blog-thumb-3.jpg" alt="" width="400" height="266" class="lazy">
                        <figcaption><strong>28</strong>Dec</figcaption>
                    </figure>
                    <ul>
                        <li class="meme">By Luca Robinson</li>
                        <li class="meme">20.11.2017</li>
                    </ul>
                    <h4 class="meme">Elitr mandamus cu has</h4>
                    <p class="meme">Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                </a>
            </div>
            <!-- /box_news -->
            <div class="col-lg-6">
                <a class="box_news" href="blog.html">
                    <figure>
                        <img src="img/blog-thumb-placeholder.jpg" data-src="img/blog-thumb-4.jpg" alt="" width="400" height="266" class="lazy">
                        <figcaption><strong>28</strong>Dec</figcaption>
                    </figure>
                    <ul>
                        <li class="meme">By Paula Rodrigez</li>
                        <li class="meme">20.11.2017</li>
                    </ul>
                    <h4 class="meme">Id est adhuc ignota delenit</h4>
                    <p class="meme">Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                </a>
            </div>
            <!-- /box_news -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</main>
<!-- /main -->
    
@endsection