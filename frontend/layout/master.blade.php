<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AR Associate – @yield('title')</title>
	<link rel="stylesheet" id="bootstrap-css" href="{{ url('public/frontend/css/bootstrap.css') }}" type="text/css" media="all">
	<link rel="stylesheet" id="awesome-font-css" href="{{  url('public/frontend/css/font-awesome.css') }} " type="text/css" media="all">
	<link rel="stylesheet" id="ionicon-font-css" href="{{  url('public/frontend/css/ionicon.css') }} " type="text/css" media="all">
    <link rel="stylesheet" id="royal-preload-css" href="{{  url('public/frontend/css/royal-preload.css') }} " type="text/css" media="all">
	<link rel="stylesheet" id="slick-slider-css" href="{{  url('public/frontend/css/slick.css') }} " type="text/css" media="all">
	<link rel="stylesheet" id="slick-theme-css" href="{{  url('public/frontend/css/slick-theme.css') }} " type="text/css" media="all">
	<link rel="stylesheet" id="consultax-style-css" href="{{  url('public/frontend/css/style.css') }} " type="text/css" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- RS5.0 Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{  url('public/frontend/revolution/css/settings.css') }} ">

    <!-- RS5.0 Layers and Navigation Styles -->
    <link rel="stylesheet" type="text/css" href="{{  url('public/frontend/revolution/css/layers.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{  url('public/frontend/revolution/css/navigation.css') }} ">
    
    <link rel="shortcut icon" href="favicon.png">

    <style type="text/css">
        
        .h-logo {
                width: 45%;
            }
            
        .main-header-bottom.nvt2 {
                            background-color: #523027;
                            color: white;
                            font-style: italic;
                            color: #190202;
                            border: 1px solid #fffcfc;
                        }
    </style>
</head>
<body class="#">
	<div id="page9" class="site3">

        @include('frontend.common.header')

         @yield('content')

    
    <!-- #content -->
        @include('frontend.common.footer')
    <!-- #site-footer -->
</div>

	<script type='text/javascript' src="{{ url('public/frontend/js/jquery.min.js') }} "></script>
	<script type='text/javascript' src="{{ url('public/frontend/js/countto.min.js') }} "></script>
	<script type='text/javascript' src="{{ url('public/frontend/js/jquery.isotope.min.js') }} "></script>
    <script type='text/javascript' src="{{ url('public/frontend/js/slick.min.js') }} "></script>
	<script type='text/javascript' src="{{ url('public/frontend/js/royal_preloader.min.js') }} "></script>
	<script type='text/javascript' src="{{ url('public/frontend/js/scripts.js') }} "></script>
	<script type='text/javascript' src="{{ url('public/frontend/js/header-footer.js') }} "></script>

	<script type="text/javascript" src="{{ url('public/frontend/revolution/js/jquery.themepunch.tools.min838f.js?rev=5.0') }} "></script>
    <script type="text/javascript" src="{{ url('public/frontend/revolution/js/jquery.themepunch.revolution.min838f.js?rev=5.0') }} "></script>
    <!-- RS5.0 Extensions Files -->
    <script type="text/javascript" src="{{ url('public/frontend/revolution/js/extensions/revolution.extension.video.min.js') }} "></script>
    <script type="text/javascript" src="{{ url('public/frontend/revolution/js/extensions/revolution.extension.slideanims.min.js') }} "></script>
    <script type="text/javascript" src="{{ url('public/frontend/revolution/js/extensions/revolution.extension.layeranimation.min.js') }} "></script>
    <script type="text/javascript" src="{{ url('public/frontend/revolution/js/extensions/revolution.extension.navigation.min.js') }} "></script>
    <script type="text/javascript" src="{{ url('public/frontend/revolution/js/extensions/revolution.extension.actions.min.js') }} "></script>
    <script type="text/javascript" src="{{ url('public/frontend/revolution/js/extensions/revolution.extension.kenburn.min.js') }} "></script>
    <script type="text/javascript" src="{{ url('public/frontend/revolution/js/extensions/revolution.extension.migration.min.js') }} "></script>
    <script type="text/javascript" src="{{ url('public/frontend/revolution/js/extensions/revolution.extension.parallax.min.js') }} "></script>
	<!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script>
        jQuery(document).ready(function () {
            jQuery("#revolution-slider").revolution({
                sliderType: "standard",
                delay: 7500,
                navigation: {
                    arrows: { enable: true }
                },
                spinner: "off",
                gridwidth: 1170,
                gridheight: 700,
                disableProgressBar: "on",
                responsiveLevels:[1920,1229,991,480],gridwidth:[1170,970,750,450],gridheight:[700,700,700,700]
            });
        });
    </script>
</body>

</html>