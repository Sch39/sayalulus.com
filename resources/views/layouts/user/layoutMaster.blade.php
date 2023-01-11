<!doctype html>
<html>

<head>
  @include('layouts/user/head')
</head>

<body>
  <div class="container">
    <header class="row">
      @include('layouts/user/header')
    </header>
    <div id="main" class="row">
      @yield('content')
    </div>
    <footer class="row">
      @include('layouts/user/footer')
    </footer>
  </div>


  <!-- Preloader !remove please if you do not want -->
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  <!-- Preloader End -->

  <!-- Google Map Script -->
  <script src="https://maps.google.com/maps/api/js?key=AIzaSyD6cxB4idvB67_Mz1ScQn-_nBJmltUaS-g"></script>
  <script src="{{ asset('assets/js/googleMap.js') }}"></script>

  <!-- JavaScript
		================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->

  <script src="{{ asset('assets/js/jquery.bundle.js') }}"></script>
  <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>