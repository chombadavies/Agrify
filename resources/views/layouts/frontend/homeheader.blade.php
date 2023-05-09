<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Unified Technology Transfer Platform</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('frontend/img/agriFilogo.png')}}" rel="icon">
 

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('frontend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">

  <link href="{{asset('frontend/css/stylen.css')}}" rel="stylesheet">

 
</head>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <strong><i class="bi bi-envelope"></i> <a href="mailto:uttp@kalro.org">uttp@kalro.org</a></strong> <i class="bi bi-phone"></i> <a href="+254722206986">+254 722 206986</a> </strong>
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </div>

 
<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      {{-- <h1 class="logo me-auto"><a href="{{route('home')}}"><img alt="logo" src="{{asset('frontend/img/agriFilogo.png')}}" > </a></h1> --}}
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="{{route('home')}}" class="logo me-auto"><img src="{{asset('frontend/img/agrifi-csapp-logo.png')}}" alt="" class="" height="70"></a>
    
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          
          <li class="dropdown"><a href="#"><span>Research</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              @php
                  $categories=App\Models\Category::all();
              @endphp
              @foreach($categories as $category)
              <li><a class="nav-link" href="{{route('research',$category->id)}}" >{{ ucfirst($category->title) }} </a></li>
            @endforeach
            </ul>
         </li>
         

          <li class="dropdown"><a href="#"><span>Upscalling</span> <i class="bi bi-chevron-down"></i></a>
            <ul>

              <li><a class="nav-link" href="#partners">Partner profiles</a></li>
           
              <li><a class="nav-link" href="{{route('achievements')}}">Achievement,Technology and commercialization</a></li>
              
              <li><a class="nav-link" href="#">Impact stories </a></li>
               </ul>
         </li>
         <li class="nav-item dropdown has-megamenu">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Mega menu  </a>
          <div class="dropdown-menu megamenu" role="menu">
            This is content of megamenu. <br>
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.
          </div> <!-- dropdown-mega-menu.// -->
        </li>
        
         <li><a class="nav-link" href="#resources">Resources</a></li>
         <li class="dropdown"><a href="#"><span>Valuechains</span> <i class="bi bi-chevron-down"></i></a>
          <ul>

          @php
              $valuechains=App\Models\ValueChain::all()
 
          @endphp
               @foreach ($valuechains as $valuechain)
                    <li><a href="{{route('valuechain.details',$valuechain->id)}}">{{$valuechain->title}}</a></li>
               @endforeach
              
             
             </ul>
       </li>
         <li><a class="nav-link" href="{{route('media')}}">Media</a></li>
          <li><a class="nav-link" href="{{route('dashboard')}}">Dashboard</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->

      {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container-fluid">
          <!-- Toggle button -->
          <button class="navbar-toggler px-0" type="button" data-mdb-toggle="collapse"
            data-mdb-target="#navbarExample2" aria-controls="navbarExample2" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
          </button>
      
          <!-- Collapsible wrapper -->
          <div class="collapse navbar-collapse" id="navbarExample2">
            <!-- Left links -->
            <ul class="navbar-nav me-auto ps-lg-0" style="padding-left: 0.15rem">
              <li class="nav-item">
                <a class="nav-link" href="#">Regular link</a>
              </li>
              <!-- Navbar dropdown -->
              <li class="nav-item dropdown position-static">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                  data-mdb-toggle="dropdown" aria-expanded="false">
                  Mega menu
                </a>
                <!-- Dropdown menu -->
                <div class="dropdown-menu w-100 mt-0" aria-labelledby="navbarDropdown" style="
                                border-top-left-radius: 0;
                                border-top-right-radius: 0;
                              ">
                  <div class="container">
                    <div class="row my-4">
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <div class="list-group list-group-flush">
                          <p class="mb-0 list-group-item text-uppercase font-weight-bold">
                            Lorem ipsum
                          </p>
                          <a href="" class="list-group-item list-group-item-action">Dolor sit</a>
                          <a href="" class="list-group-item list-group-item-action">Amet consectetur</a>
                          <a href="" class="list-group-item list-group-item-action">Cras justo odio</a>
                          <a href="" class="list-group-item list-group-item-action">Adipisicing elit</a>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <div class="list-group list-group-flush">
                          <p class="mb-0 list-group-item text-uppercase font-weight-bold">
                            Explicabo voluptas
                          </p>
                          <a href="" class="list-group-item list-group-item-action">Perspiciatis quo</a>
                          <a href="" class="list-group-item list-group-item-action">Cras justo odio</a>
                          <a href="" class="list-group-item list-group-item-action">Laudantium maiores</a>
                          <a href="" class="list-group-item list-group-item-action">Provident dolor</a>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
                        <div class="list-group list-group-flush">
                          <p class="mb-0 list-group-item text-uppercase font-weight-bold">
                            Iste quaerato
                          </p>
                          <a href="" class="list-group-item list-group-item-action">Cras justo odio</a>
                          <a href="" class="list-group-item list-group-item-action">Est iure</a>
                          <a href="" class="list-group-item list-group-item-action">Praesentium</a>
                          <a href="" class="list-group-item list-group-item-action">Laboriosam</a>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <div class="list-group list-group-flush">
                          <p class="mb-0 list-group-item text-uppercase font-weight-bold">
                            Cras justo odio
                          </p>
                          <a href="" class="list-group-item list-group-item-action">Saepe</a>
                          <a href="" class="list-group-item list-group-item-action">Vel alias</a>
                          <a href="" class="list-group-item list-group-item-action">Sunt doloribus</a>
                          <a href="" class="list-group-item list-group-item-action">Cum dolores</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
            <!-- Left links -->
          </div>
          <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
      </nav> --}}

      <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline"></span> Contact Us</a>

    </div>
  </header><!-- End Header -->