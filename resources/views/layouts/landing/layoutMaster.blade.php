<!doctype html>
<html>

<head>
  @include('layouts/landing/head')
</head>

<body>


  <div class="container">
    {{-- banner start --}}
    <ul class="mybanner">
      <li>
        <a href="/progress-note">Cek Progress Disini >></a><span class="close">x</span>
      </li>
    </ul>

    {{-- banner end --}}


    <header class="row">

      @include('layouts/landing/header')
    </header>
    <div id="main" class="row">
      @yield('content')
    </div>
    <footer class="row">
      @include('layouts/landing/footer')
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





  {{-- mybanner --}}
  <script>
    var closebtns = document.getElementsByClassName("close");
var i;

// Loop through the elements, and hide the parent, when clicked on
for (i = 0; i < closebtns.length; i++) {
  closebtns[i].addEventListener("click", function() {
    this.parentElement.style.display = 'none';
  });
}
  </script>
  {{-- mybanner --}}
</body>

</html>