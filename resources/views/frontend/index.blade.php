@extends('layouts.frontend.homemaster')


@section('content')
      <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>AgriFi Kenya Climate Smart Agricutural Productivity Project</h1>
      <h2>Welcome to the Unified Technology Transfer Platform  </h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main why">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us why">
      <div class="container">

     
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">

              <div class="row">
                <div class="col-xl-2 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-store-alt"></i>
                   <a href="market-information.php"><h4>About us</h4></a>
                    
                  </div>
                </div>
                <div class="col-xl-2 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-briefcase"></i>
      
                    <a href="project-components.php"><h4>Project Components</h4></a>
                  
                  </div>
                </div>

                <div class="col-xl-2 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-leaf"></i>
                    <a href="{{route('valuechains')}}"><h4>Valuechains</h4></a>
                    
                  </div>
                </div>

                <div class="col-xl-2 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-info-circle"></i>
                    <a href="resources.php"><h4>Resources</h4></a>
                    
                  </div>
                </div>

                <div class="col-xl-2 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-video-recording"></i>
                    <a href="media.php"><h4>Media</h4></a>
                 
                  </div>
                </div>

                <div class="col-xl-2 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-phone-call"></i>
                    <a href="contact.php"><h4>Contact us</h4></a>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

    </section><!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
          
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>AgriFi Program Steering Committee</h3>
            <p> The CS-APP reports to  the overall Kenya AgriFI Steering Committee. The KALRO Director-General and the Coordinator will attend on behalf of the CS-APP. CS-APP  periodically reports to the AKSC
            <h3>Project Implementation Committee</h3>
            <p>A PIC chaired by the Director- General KALRO is made up of the PCU, one Deputy Director General, a representative of implementing partners (on rotating basis), representative of relevant local University, MOAI AgriFI Focal Point (Coordinator), and Private sector representative.  
            The EC Delegation and the National Treasury will have representative(s) as observers. PIC  provide oversight and guidance to the PCU in implementing the project. PIC meet once a year. </p>
            
            <h3>Project Coordination Unit</h3>

             <p>CS APP have a project coordination unit, which is responsible for the day to day operation of the project. The unit is lean with the following full time dedicated staff;</p>

            
            <div class="front-box">
            <ul>
                  <li>National Project Coordinator</li>
                  <li>Agribusiness Officer</li>
                  <li>M & E Officer </li>
                  <li>Programme Accounts Manager</li>
                  <li>Office Manager/Secretary</li>
                  <li>Driver</li>
                </ul>
            </div>
          <p>At the institutional level, the National Project Coordinator  reports to the KALRO Director General. The project draws support from the technical domain managers at KALRO. CS APP hired officers with agribusiness and M & E expertise to support the project.</p>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="fas fa-user-md"></i>
              <span data-purecounter-start="0" data-purecounter-end="23" data-purecounter-duration="1" class="purecounter"></span>
              <p>Partners</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="far fa-hospital"></i>
              <span data-purecounter-start="0" data-purecounter-end="13" data-purecounter-duration="1" class="purecounter"></span>
              <p>Valuechains</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-flask"></i>
              <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
              <p>Disbursed</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
              <p>Awardees</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="resources" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Resources</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-heartbeat"></i></div>
              <h4><a href="">Brochures </a></h4>
              <p>Get valuable information about farming practices, livestock management, crop cultivation, and sustainable agricultural techniques</p>
            </div>
          </div>

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
              <h4><a href="">Partner Profiles</a></h4>
              <p> Here you can explore our esteemed partners who share our vision and collaborate with us in delivering exceptional products and services to our valued stakeholders.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-dna"></i></div>
              <h4><a href="">Mobile Apps</a></h4>
              <p>Whether you're using a smartphone or tablet, our mobile apps provide a seamless experience, allowing you to access our content and services with ease.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-wheelchair"></i></div>
              <h4><a href="">Media</a></h4>
              <p>Access a wide range of multimedia content, including images, videos, and press releases, showcasing our KALRO's latest news, updates, and events.  </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-notes-medical"></i></div>
              <h4><a href="">Reports</a></h4>
              <p> From market trends to crop forecasts, our comprehensive reports are meticulously curated to provide you with valuable information for informed decision-making.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    
  

  </main><!-- End #main -->
@endsection