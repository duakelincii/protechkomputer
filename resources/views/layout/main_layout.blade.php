<!DOCTYPE html>

<html lang="en-US">
<head>
<meta charset="utf-8">
<title>Nexus - @yield('title')</title>
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Nexus">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="shortcut icon" type="image/png" href="{{asset('assets/main/img/favicon.png')}}" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Web Fonts  -->
<link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700|Montserrat:300,400,500,600,700,800,900|Open+Sans:300,400,400i,600,600i,700,800|Raleway:300,400,400i,500,600,700|Roboto:300,400,400i,500,700,900" rel="stylesheet">

<!-- Libs CSS -->
<link href="{{asset('assets/main/css/bootstrap.min.css')}}" rel="stylesheet" />
<link href="{{asset('assets/main/css/style.css')}}" rel="stylesheet" />
<link href="{{asset('assets/main/css/font-awesome.min.css')}}" rel="stylesheet" />
<link href="{{asset('assets/main/css/streamline-icon.css')}}" rel="stylesheet" />
<link href="{{asset('assets/main/css/v-nav-menu.css')}}" rel="stylesheet" />
<link href="{{asset('assets/main/css/v-portfolio.css')}}" rel="stylesheet" />
<link href="{{asset('assets/main/css/v-blog.css')}}" rel="stylesheet" />
<link href="{{asset('assets/main/css/v-bg-stylish.css')}}" rel="stylesheet" />
<link href="{{asset('assets/main/css/v-shortcodes.css')}}" rel="stylesheet" />
<link href="{{asset('assets/main/css/theme-responsive.css')}}" rel="stylesheet" />
<link href="{{asset('assets/main/plugins/owl-carousel/owl.theme.css')}}" rel="stylesheet" />
<link href="{{asset('assets/main/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />

<!-- Current Page CSS -->
<link href="{{asset('assets/main/plugins/rs-plugin/css/settings.css')}}" rel="stylesheet" />
<link href="{{asset('assets/main/plugins/rs-plugin/css/custom-captions.css')}}" rel="stylesheet" />

<!-- Custom CSS -->
<link rel="stylesheet" href="{{asset('assets/main/css/custom.css')}}">
</head>

<body>

    <!--Header-->
    <x-main_header />

    <!--End Header-->

@yield('main_content')

<!--// BACK TO TOP //-->
{{-- <div id="back-to-top" class="animate-top"><i class="fa fa-angle-up"></i></div> --}}

<!-- Libs --> 

<script src="{{asset('assets/main/js/jquery-3.1.1.min.js')}}"></script> 
<script src="{{asset('assets/main/js/bootstrap.min.js')}}"></script> 
<script src="{{asset('assets/main/js/jquery.flexslider-min.js')}}"></script> 
<script src="{{asset('assets/main/js/jquery.easing.js')}}"></script> 
<script src="{{asset('assets/main/js/jquery.fitvids.js')}}"></script> 
<script src="{{asset('assets/main/js/jquery.carouFredSel.min.js')}}"></script> 
<script src="{{asset('assets/main/js/jquery.validate.js')}}"></script> 
<script src="{{asset('assets/main/js/theme-plugins.js')}}"></script> 
<script src="{{asset('assets/main/js/jquery.isotope.min.js')}}"></script> 
<script src="{{asset('assets/main/js/imagesloaded.js')}}"></script> 
<script src="{{asset('assets/main/js/view.min.js?auto')}}"></script> 
<script src="{{asset('assets/main/plugins/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script> 
<script src="{{asset('assets/main/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script> 
<script src="{{asset('assets/main/js/theme-core.js')}}"></script>
</body>
</html>
