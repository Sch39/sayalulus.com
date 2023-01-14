<!doctype html>
<html>

<head>
  @include('layouts/landing/head')
</head>

<body>
  <div class="container">

    @php
    $lists = [
    [
    "title"=>"Integrasi Landing Page",
    "description"=>"Menghubungkan landing page ke login user [fixed]",
    "date"=>"11-01-23",
    ],
    [
    "title"=>"Integrasi Login Admin",
    "description"=>"Mengatur dan menata alur login khusus untuk admin [process]",
    "date"=>"12-01-23",
    ],
    [
    "title"=>"Integrasi Login User",
    "description"=>"Mengatur dan menata alur login untuk user [process]",
    "date"=>"13-01-23",
    ],
    ];

    @endphp


    <div id="main" class="row">
      <br><br><br>
      <h4 style="text-align: center; font-size:2em">List Progress</h4>

      <div class="list-group">
        @foreach ($lists as $item)

        <a href="#" class="list-group-item list-group-item-action" aria-current="true">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">{{ $item['title'] }}</h5>
            <small>{{ $item['description'] }}</small>
          </div>
          <p class="mb-1">{{ $item['date'] }}</p>
        </a>

        @endforeach

      </div>

      <ul class="buttons text-center">
        <li><a href="/" class="button wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".6s">Ke Landing Page ></a>
        </li>

      </ul>

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
</body>

</html>