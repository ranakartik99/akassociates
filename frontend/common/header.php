<!DOCTYPE html>
<html>
<head>
    <?php
    
        $base_path = "http://localhost/admin/aamir/";
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AR Associate </title>
    <link rel="stylesheet" id="bootstrap-css" href="<?php echo $base_path.'public/frontend/css/bootstrap.css' ?>" type="text/css" media="all">
    <link rel="stylesheet" id="awesome-font-css" href="<?php echo $base_path.'public/frontend/css/font-awesome.css' ?> " type="text/css" media="all">
    <link rel="stylesheet" id="ionicon-font-css" href="<?php echo $base_path.'public/frontend/css/ionicon.css' ?> " type="text/css" media="all">
    <link rel="stylesheet" id="royal-preload-css" href="<?php echo $base_path.'public/frontend/css/royal-preload.css ' ?>" type="text/css" media="all">
    <link rel="stylesheet" id="slick-slider-css" href="<?php echo $base_path.'public/frontend/css/slick.css' ?> " type="text/css" media="all">
    <link rel="stylesheet" id="slick-theme-css" href="<?php echo $base_path.'public/frontend/css/slick-theme.css ' ?>" type="text/css" media="all">
    <link rel="stylesheet" id="consultax-style-css" href="<?php echo $base_path.'public/frontend/css/style.css ' ?>" type="text/css" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- RS5.0 Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?php echo $base_path.'public/frontend/revolution/css/settings.css' ?> ">
    <!-- RS5.0 Layers and Navigation Styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo $base_path.'public/frontend/revolution/css/layers.css ' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo $base_path.'public/frontend/revolution/css/navigation.css' ?> ">
    
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
        
<header id="site-header" class="site-header mobile-header-blue header-style-1">
    <!-- Main header start - Header Home-1, Default -->
    <!-- Top bar start / class css: topbar-dark -->
    <div id="header_topbar" class="header-topbar md-hidden sm-hidden clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- social icons -->
                    <ul class="social-list fleft">
                        <li><a href="" target="_blank"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </li>
                        <li><a href="" target="_blank"><i class="fa fa-rss"></i></a>
                        </li>
                    </ul>
                    <!-- social icons close -->
                    <div class="topbar-text fright"> Opening Hours : Monday to Saturday - 10AM to 7PM</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top bar close -->

    <!-- Main header start -->
    <div class="main-header md-hidden sm-hidden">
        <div class="main-header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-wrap-table">
                            <div id="site-logo" class="site-logo col-media-left col-media-middle" style="width: 50%;">
                                <div class="h-logo">
                                    <a href="{{url('/')}}">
                                        <!-- <span style="color: white; font-size: 35px;">Tandon Tax</span> -->
                                        <img class="logo-static" src="<?php echo $base_path.'public/frontend/images/logo/tandan-logo.png'?>" alt="Tandon Tax">
                                        <img class="logo-scroll" src="<?php echo $base_path.'public/frontend/images/logo/tandan-logo.png'?>" alt="Tandon Tax">
                                    </a>
                                </div>
                            </div>
                            <div class="col-media-body col-media-middle">
                                <!-- contact info -->
                                <ul class="info-list info_on_right_side fright">
                                    <li>
                                        <span>Address: <strong>B-251, Anandpuri Colony, Noorwala Road, Ludhiana. 141008</strong></span> </li>
                                    <li> 
                                    <div class="">
                                        <span><i class="fa fa-phone" aria-hidden="true"></i><span><strong class="font-size18">1800-891-4036</strong></span> </span>
                                        <span><i class="fa fa-phone" aria-hidden="true"></i> <span><strong class="font-size18">0988-891-3036</strong></span> </span>
                                    </div>
                                    </li>
                                </ul>
                                <!-- contact info close -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header-mainnav">

                            <div class="search-cart-box fright">
                               
                                <div class="side-menu pr-30 fright"><a href="#">Register</a></div>
                                <div class="side-menu pr-30 fright"><a href="#">Login</a></div>
                            </div>
                            <div id="site-navigation" class="main-navigation fleft">
                                <ul id="primary-menu" class="menu">
                                    <li ><a href="index.php">Home</a></li>
                                    <li><a href="frontend/about/aboutus.php">About Us</a> </li>
                                    <li class="menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1789"><a href="">Services</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-1791"><a href="frontend/homeManagement/services/gst-registration.php">GST Registration</a>
                                            </li>
                                            <li class="menu-item-1791"><a href="frontend/homeManagement/services/gst_returning.php">GST Return Filing</a>
                                            </li>
                                            <li class="menu-item-1758"><a href="frontend/homeManagement/services/income_tax_returns.php">Income Tax
                                                    Returns</a></li>
                                           
                                        </ul>
                                    </li>
                                     <li ><a href="frontend/homeManagement/helpdesk/index.php">Help Desk</a>
                                    <li><a href="frontend/homeManagement/feetax/index.php">Fee Tax</a></li>
                                    <li><a href="frontend/homeManagement/contact/index.php">Contact Us</a></li>
                                </ul>
                            </div>
                            <!-- #site-navigation -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-header-bottom nvt2"> 
        
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <marquee>
                        <span style="color:#fbf9f9; font-size:larger;">GST-R3B , GST-R1, GST-R9 Annual Fee Only Rs.7000. </span>
                     </marquee>
                    </div>
               </div>
            </div>   
         </div>

    </div>
    <!-- Main header close -->

    <div class="header_mobile">
        <div class="mlogo_wrapper clearfix">
            <div class="mobile_logo">
                <a href=""><img src="<?php echo $base_path.'public/frontend/images/logo/tandan-logo.png' ?>" alt="Tandon Tax Logo " style="height: 35px;"></a>
            </div>
            <div id="mmenu_toggle">
                <button></button>
            </div>
        </div>
        <div class="mmenu_wrapper">
            <div class="mobile_nav collapse">
                <ul id="menu-main-menu" class="mobile_mainmenu">
                   
                    <li ><a href="index.php">Home</a>
                       
                    </li>
                    <li><a href="frontend/about/aboutus.php">About Us</a> </li>
                    <li class="menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1789"><a href="">Services</a>
                        <ul class="sub-menu">
                            <li class="menu-item-1791"><a href="frontend/homeManagement/services/gst-registration.php">GST Registration</a>
                            </li>
                            <li class="menu-item-1791"><a href="frontend/homeManagement/services/gst_returning.php">GST Return Filing</a>
                            </li>
                            <li class="menu-item-1758"><a href="frontend/homeManagement/services/income_tax_returns.php">Income Tax
                                    Returns</a></li>
                           
                        </ul>
                    </li>
                    <li ><a href="frontend/homeManagement/helpdesk/index.php">Help Desk</a>
                    <li><a href="frontend/homeManagement/feetax/index.php">Fee Tax</a></li>
                    <li><a href="frontend/homeManagement/contact/index.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>