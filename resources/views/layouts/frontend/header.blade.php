<header class="version_1">
    <div class="layer"></div><!-- Mobile menu overlay mask -->
    <div class="main_header Sticky">
        <div class="container">
            <div class="row small-gutters">
                <div class="col-xl-2 col-lg-3 d-lg-flex align-items-center">
                    <div id="logo">
                        <a href="{{route('home')}}"><img src="{{asset('frontend/img/AgriFI-CS-APP-Logo_2019.png')}}" alt="" width="100" height="50"></a>
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
                                <a href="#">Dashboard</a>
                            </li>
                            <li>
                                <a href="#">About Us</a>
                            </li>
                            <li>
                                <a href="">Components</a>
                            </li>
                           
                            <li>
                                <a href="{{route('valuechains')}}">Value Chains</a>
                            </li>
                            <li class="submenu">
                                
                                <a href="javascript:void(0);" class="show-submenu">Market Place</a>
                                <ul>
                                    @php
                                        $valuechains=App\Models\ValueChain::all();
                                    @endphp
                                    @foreach ($valuechains as $item)
                                    <li><a href="#">{{$item->title}}</a></li>
                                    @endforeach
                                 
                                   
                                  
                                </ul>
                            </li>
                            <li>
                                <a href="#">Directory</a>
                            </li>
                            {{-- <li>
                                <a href="#">Resourses</a>
                            </li> --}}
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