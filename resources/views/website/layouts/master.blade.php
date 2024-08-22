<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('assest/images/favicon.png') }}" type="">
    <title>@yield('title')</title>
    
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assest/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assest/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assest/css/responsive.css') }}">
    
    <!-- External CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body class="sub_page">
    @include('website.includes.navbar')
    
    @section('main-content')
    @show
    
    @include('website.includes.footer')
    
    <!-- Core JS -->
    <script src="{{ asset('assest/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assest/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assest/js/custom.js') }}"></script>
    
    <!-- External JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
</body>
</html>
