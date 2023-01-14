<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="AppsLand is a powerful App Landing HTML Template with full of customization options and features">
  <!-- Fav Icon  -->
  <link rel="shortcut icon" href="{{ asset('assets/img/favicon/favicon.ico') }}">
  <!-- Site Title  -->
  <title>AppsLand - App Landing HTML Template</title>
  <!-- Vendor Bundle CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/user/vendor.bundle.css') }}">
  <!-- Custom styles for this template -->
  <link href="{{ asset('assets/css/user/style.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/user/theme-royel-teal.css') }}" rel="stylesheet">



  {{-- mybanner --}}
  <style>
    .mybanner {
      position: absolute;
    }

    .mybanner li {
      position: relative;
      top: 20px;
      left: 150%;
      z-index: 9980;
      border: 1px solid #ddd;
      margin-top: -1px;
      margin-right: 10px;
      /* font-style: bold; */
      /* Prevent double borders */
      background-color: #f6f6f631;
      /* padding: 5px; */

    }

    .mybanner li a {
      /* z-index: 999; */
      text-decoration: none;
      font-size: 14px;
      color: rgb(18, 19, 14);
      display: block;
      font-weight: bold;
      padding: 5px;

    }

    /* Add a light grey background color on hover */
    .mybanner li a:hover {
      background-color: rgba(107, 61, 199, 0.806);
      cursor: pointer;
    }

    /* Style the close button (span) */
    .close {
      z-index: 9990;
      top: -40px;
      right: -15px;
      cursor: pointer;
      position: relative;
      /* margin-top: 10px; */
      padding: 5px 5px;
      transform: translate(0%, -50%);
      color: #f6f6f6;
      border: 1px solid #ddd;
      background-color: #e51e1edc;
    }

    .close:hover {
      background: #bbb;
    }
  </style>

  {{-- mybanner --}}
</head>