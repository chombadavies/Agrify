<header class="version_1">
    <div class="layer"></div><!-- Mobile menu overlay mask -->
    <div class="main_header Sticky">
        <div class="container">
            <div class="row small-gutters">
                <div class="col-xl-2 col-lg-3 d-lg-flex align-items-center">
                    <div id="logo">
                        <a href="{{route('home')}}"><img src="{{asset('frontend/img/amaranth.jpg')}}" alt="" width="100" height="35"></a>
                    </div>
                </div>
                <nav class="col-xl-10 col-lg-7">
                    <a class="open_close" href="javascript:void(0);">
                        <div class="hamburger hamburger--spin">
                            <div class="hamburger-box">
                                <div class="hamburger-inner"></div>
                            </div>
                        </div>
                    </a>
                    <!-- Mobile menu button -->
                    <div class="main-menu">
                        <div id="header_menu">
                            <a href="#"><img src="img/logo_black.svg" alt="" width="100" height="35"></a>
                            <a href="#" class="open_close" id="close_in"><i class="ti-close"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a href="#">Dashboards</a>
                            </li>
                            <li>
                                <a href="#">About Us</a>
                            </li>
                            <li class="megamenu submenu">
                                <a href="javascript:void(0);" class="show-submenu-mega">Components</a>
                                <div class="menu-wrapper">
                                    <div class="row small-gutters">
                                        <div class="col-lg-3">
                                            <h3>Listing grid</h3>
                                            <ul>
                                                <li><a href="#">link to Content</a></li>
                                                <li><a href="#">link to Content</a></li>
                                                <li><a href="#">link to Content</a></li>
                                                <li><a href="#">link to Content</a></li>
                                                <li><a href="#">link to Content</a></li>
                                                <li><a href="#">link to Content</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3">
                                            <h3>Listing row &amp; Product</h3>
                                            <ul>
                                                <li><a href="#">link to Content</a></li>
                                                <li><a href="#">link to Content</a></li>
                                                <li><a href="#">link to Content</a></li>
                                                <li><a href="#">link to Content</a></li>
                                                <li><a href="#">link to Content</a></li>
                                                <li><a href="#">link to Content</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3">
                                            <h3>More Contents</h3>
                                            <ul>
                                                <li><a href="#">link to Content</a></li>
                                                <li><a href="#">link to Content</a></li>
                                                <li><a href="#">link to Content</a></li>
                                                <li><a href="#">link to Content</a></li>
                                                <li><a href="#">link to Content</a></li>
                                                <li><a href="#">link to Content</a></li>
                                               
                                            </ul>
                                        </div>
                                        <div class="col-lg-3 d-xl-block d-lg-block d-md-none d-sm-none d-none">
                                            <div class="banner_menu">
                                                <a href="#0">
                                            <img src="data:image/gif;bas" data-src="{{asset('frontend/img/amaranth.jpg')}}" width="400" height="550" alt="" class="img-fluid lazy">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->
                                </div>
                                <!-- /menu-wrapper -->
                            </li>
                           
                            <li>
                                <a href="{{route('valuechains')}}">Value Chains</a>
                            </li>
                            <li class="submenu">
                                
                                <a href="javascript:void(0);" class="show-submenu">Media</a>
                                <ul>
                                    <li><a href="#">Header Style 2</a></li>
                                    <li><a href="#">Header Style 3</a></li>
                                    <li><a href="#">Header Style 4</a></li>
                                    <li><a href="#">Header Style 5</a></li>
                                  
                                </ul>
                            </li>
                            <li>
                                <a href="#">Directory</a>
                            </li>
                            <li>
                                <a href="#">Resourses</a>
                            </li>
                            <li>
                                <a href="{{route('contact_us')}}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <!--/main-menu -->
                </nav>
               
            </div>
            <!-- /row -->
        </div>
    </div>
    <!-- /main_header -->
</header>