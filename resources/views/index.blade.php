<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="theme-color" name="purple">
  <title>ESA 19</title>

  <!-- Favicons -->
  <link href="{{ asset('assets/images/logo esa 19.png') }}" rel="icon">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <link href="{{ asset('css/index.css') }}" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top" style="background: #000;">
    <div class="mx-2 container-fluid d-flex justify-content-between align-items-center">

      <h1 class="logo me-auto me-lg-0" style="font-weight: bold; color: purple;">
        <a href="{{ route('index') }}">
          <img src="{{ asset('assets/images/logo esa 19.png') }}">
          <span style="font-size: 19px;color:#fff;">ESA 19</span>
        </a>
      </h1>

      <div class="header-social-links">
        <a class="text-light" href="{{ URL::to('https://wa.me/6282294882672?text=Halo%20mimin%20ESA%2019') }}" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
        <a class="text-light" href="{{ URL::to('https://www.instagram.com/esatelkomschools/') }}" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="/login">
          <button class="btn btn-warning">
            <span style="font-weight: bold;">Login</span>
          </button>
        </a>
      </div>
      
    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="100">
      <img class="anim_rotate mb-3" src="{{ asset('assets/images/logo esa 19.png') }}" style="width: 80px; height: 80px"></img>
      <h1 class="text-light" style="font-size: 3em">- ESA 19 -</h1><br>
      <h3 class="text-light">Education, Sport, Amity and Art</h3>
      <a href="{{ route('users/form') }}" class="btn-about" style="background: orange; color: #000; font-weight: bold">Daftar Gratis!</a>
    </div>
  </section><!-- End Hero -->
  
  <!-- ======= Footer ======= -->
  <footer id="footer" class="text-light" style="background: #000">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>ESA 19</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ asset('vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>