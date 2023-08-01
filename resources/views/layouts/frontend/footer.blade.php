<footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">
    
          <div class="col-lg-4 col-md-6 footer-contact">
            <h3> <i class="ti-home"></i> Contacts</h3>
            Kaptagat Road, Loresho, Nairobi Kenya<br>
            P.O. Box 57811-00200, Nairobi<br>
            <strong> <i class="ti-email"></i>Email:</strong> agrificsapp@kalro.org<br>
            <strong> web:</strong> https://agrificsapp.kalro.org<br>
            <p>

          </div>
    
       

          <div class="col-lg-4 col-md-6 footer-contact">
            <h3>Useful Links</h3>
            <ul style="text-decoration: none">
              <li> <a href="{{route('project_profile')}}" style="color:white">About Us</a></li>
              <li><a href="{{route('contact_us')}}" style="color:white">Contact Us</a></li>
              <li> <a href="{{route('partners')}}" style="color:white">Partners</a></li>
              <li><a href="{{route('coapplicants')}}" style="color:white">Co-Applicants</a></li>
    
            </ul>
          </div>
    
         
          <div class="col-lg-4 col-md-6 footer-contact">
            <h3>Our Resources</h3>
            <ul>
              <li> <a href="{{route('valuechains')}}" style="color:white">Value Chains</a></li>
              <li> <a href="{{route('map')}}" style="color:white">Analytics Map</a></li>
              <li> <a href="#" style="color:white">Project Publications</a></li>
              <li> <a href="{{route('media')}}" style="color:white">Media</a></li>
            </ul>
          </div>

    
        </div>
      </div>
    </div>
    
    <div class="container d-md-flex py-4">
    
      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          {{-- ©  --}}
          &copy;<script>document.write(new Date().getFullYear())</script>  <strong><span>KALRO AgriFI</span></strong>. All Rights Reserved . Designed by <a href="https://www.kalro.org/">KALRO ICT</a>
        </div>
    
    
       
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://twitter.com/AgriFIcsapp" class="twitter" target="blank"><i class="bx bxl-twitter"></i></a>
        <a href=" https://www.facebook.com/agriFIcsapp/" class="facebook" target="blank"><i class="bx bxl-facebook"></i></a>
        {{-- <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> --}}
      </div>
    </div>
    </footer><!-- End Footer -->
    
   
    
    <div id="preloader"></div>
      {{-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> --}}
    
      <!-- Vendor JS Files -->
      <script src="{{asset('frontend/vendor/purecounter/purecounter_vanilla.js')}}"></script>
      <script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('frontend/vendor/glightbox/js/glightbox.min.js')}}"></script>
      <script src="{{asset('frontend/vendor/swiper/swiper-bundle.min.js')}}"></script>
      <script src="{{asset('frontend/vendor/php-email-form/validate.js')}}"></script>
	 
      @yield('scripts')
      <!-- Template Main JS File -->
      <script src="{{asset('frontend/js/main.js')}}"></script>
      

      <script src="{{asset('frontend/jss/js/common_scripts.min.js')}}"></script>
      <script src="{{asset('frontend/jss/js/main.js')}}"></script>
    
    <!-- SPECIFIC SCRIPTS -->
    <script src="{{asset('frontend/jss/js/carousel-home.min.js')}}"></script>
    {{-- media --}}
    <script src="{{asset('frontend/media/js/main.js')}}"></script>
    <script src="{{asset('frontend/media/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('frontend/media/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('frontend/media/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontend/media/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('frontend/media/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('frontend/media/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('frontend/media/vendor/typed.js/typed.min.js')}}"></script>
  <script src="{{asset('frontend/media/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('frontend/media/vendor/php-email-form/validate.js')}}"></script>


  {{-- charts --}}

  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/data.js"></script>
  <script src="https://code.highcharts.com/modules/drilldown.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>
  <script src="https://code.highcharts.com/modules/accessibility.js"></script>




  <script>