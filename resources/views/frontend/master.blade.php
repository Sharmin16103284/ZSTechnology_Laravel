<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> @yield('title','ZS Technology') </title>
<!-- Stylesheets -->
<link href="{{ asset('frontend') }}/css/bootstrap.css" rel="stylesheet">
<link href="{{ asset('frontend') }}/css/revolution-slider.css" rel="stylesheet">
<link href="{{ asset('frontend') }}/css/style.css" rel="stylesheet">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="{{ asset('frontend') }}/css/responsive.css" rel="stylesheet">
@yield('styles')
</head>

<body>
<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
    
    <!-- Main Header -->
        @include('frontend.inc.header')
    <!--End Main Header -->
    
    
    
    <!--Main Features-->
    @yield('content')
	
    
    <!--Main Footer-->
    @include('frontend.inc.footer')
    
</div>
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="fa fa-long-arrow-up"></span></div>


<script src="{{ asset('frontend') }}/js/jquery.js"></script> 
<script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('frontend') }}/js/revolution.min.js"></script>
<script src="{{ asset('frontend') }}/js/jquery.fancybox.pack.js"></script>
<script src="{{ asset('frontend') }}/js/jquery.fancybox-media.js"></script>
<script src="{{ asset('frontend') }}/js/owl.js"></script>
<script src="{{ asset('frontend') }}/js/wow.js"></script>
<script src="{{ asset('frontend') }}/js/script.js"></script>
@yield('scripts')
</body>
</html>