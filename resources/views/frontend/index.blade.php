@extends('layouts.frontend.master')

@section('content')
   
<main>
    <div id="carousel-home" class="add_top_5">
        <div class="owl-carousel owl-theme">
            <div class="owl-slide cover" style="background-image: url(frontend/img/slides/farming.jpg);">
                <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                    <div class="container">
                        <div class="row justify-content-center justify-content-md-end">
                            <div class="col-lg-6 static">
                                <div class="slide-text text-end white">
                                    <h2 class="owl-slide-animated owl-slide-title">Kenya Agrifi Project</h2>
                                    <p class="owl-slide-animated owl-slide-subtitle">
                                       For Food Security
                                    </p>
                                    <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="{{route('contact_us')}}" role="button">Partner With us</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/owl-slide-->
            <div class="owl-slide cover" style="background-image: url(frontend/img/slides/full2.jpg);">
                <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                    <div class="container">
                        <div class="row justify-content-center justify-content-md-start">
                            <div class="col-lg-6 static">
                                <div class="slide-text white">
                                    <h2 class="owl-slide-animated owl-slide-title">Kenya Agrifi Project</h2>
                                    <p class="owl-slide-animated owl-slide-subtitle">
                                       For Food Security
                                    </p>
                                    <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="{{route('contact_us')}}" role="button">Partner With us</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/owl-slide-->
            <div class="owl-slide cover" style="background-image: url(frontend/img/slides/smallruminants.jpg);">
                <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(255, 255, 255, 0.5)">
                    <div class="container">
                        <div class="row justify-content-center justify-content-md-start">
                            <div class="col-lg-12 static">
                                <div class="slide-text text-center black">
                                    <h2 class="owl-slide-animated owl-slide-title">Kenya Agrifi Project</h2>
                                    <p class="owl-slide-animated owl-slide-subtitle">
                                       For Food Security
                                    </p>
                                    <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="{{route('contact_us')}}" role="button">Partner With us</a></div>
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
            {{-- <h2>our History</h2>
            <span>About AgriFi Project</span> --}}
            <p>About AgriFi Project</p>
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
                    <img src="{{asset('frontend/img/products/kalroabout.jpg')}}" alt="" height="280px" width="100%">
                </div>
            </div>
        
       
        
    </div>

  

    <div class="container margin_60_35">
       
        <div class="container-fluid mb-5">
            <div class="main_title mb-4">
                <h2>Our Resources</h2>
                <span>Resources</span>
                <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="box">
                        <div class="our-services settings">
                            <div class="icon"> <img src="{{asset('frontend/img/amaranth.jpg')}}" width="100" height="50"> </div>
                            <h4>Timps Branchures</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <div class="our-services speedup">
                            <div class="icon"> <img src="{{asset('frontend/img/amaranth.jpg')}}" width="100" height="50"> </div>
                            <h4>Reports</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <div class="our-services privacy">
                            <div class="icon"> <img src="{{asset('frontend/img/amaranth.jpg')}}" width="100" height="50"> </div>
                            <h4>Mobile Apps</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="box">
                        <div class="our-services backups">
                            <div class="icon"> <img src="{{asset('frontend/img/amaranth.jpg')}}" width="100" height="50"> </div>
                            <h4>Backups</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <div class="our-services ssl">
                            <div class="icon"> <img src="{{asset('frontend/img/amaranth.jpg')}}" width="100" height="50"></div>
                            <h4>Media</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <div class="our-services database">
                            <div class="icon"> <img src="{{asset('frontend/img/amaranth.jpg')}}" width="100" height="50"></div>
                            <h4>Database</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
       
    </div>


    
    <!-- /container -->

    <div class="featured lazy" data-bg="url(asset(frontend/img/slides/fullone.webp))">
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
                @foreach ($partners as $partner)
                <div class="item">
                    <a href="{{route('meme',$partner->id)}}"><img src="{{asset('backend/uploads/'.$partner->image)}}" data-src='{{asset('backend/uploads/'.$partner->image)}}' alt="" class="owl-lazy"></a>
                </div><!-- /item -->
                @endforeach
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