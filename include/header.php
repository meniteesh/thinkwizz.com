<!DOCTYPE html>
<html lang="en">

<head>
    <title>Think wizz</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LIBRARY FONT-->
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,400italic,700,900,300">
    <link type="text/css" rel="stylesheet" href="assets/font/font-icon/font-awesome-4.4.0/css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="assets/font/font-icon/font-svg/css/Glyphter.css">
    <!-- LIBRARY CSS-->
    <link type="text/css" rel="stylesheet" href="assets/libs/animate/animate.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/bootstrap-3.3.5/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/owl-carousel-2.0/assets/owl.carousel.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/selectbox/css/jquery.selectbox.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/fancybox/css/jquery.fancybox.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/fancybox/css/jquery.fancybox-buttons.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/media-element/build/mediaelementplayer.min.css">
    <!-- STYLE CSS    -->
    <link type="text/css" rel="stylesheet" href="#" id="color-skins">
    <script src="assets/libs/jquery/jquery-2.1.4.min.js"></script>
    <script src="assets/libs/js-cookie/js.cookie.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>
    <script>
    if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1')) {
        $('#color-skins').attr('href', 'assets/css/' + Cookies.get('color-skin') + '.css');
    } else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1')) {
        $('#color-skins').attr('href', 'assets/css/color-1.css');
    }
    </script>
</head>

<body>
    <!-- HEADER-->
    <header>
        <div class="header-topbar">
            <div class="container">
                <div class="topbar-left pull-left">
                    <div class="email"><a href="#"><i class="topbar-icon fa fa-envelope-o"></i><span>jaipur.thinkwizz@gmail.com</span></a></div>
                    <div class="hotline"><a href="#"><i class="topbar-icon fa fa-phone"></i><span>+84 909 015 345</span></a></div>
                </div>
                <div class="topbar-right pull-right">
                    <div class="socials">
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
                        <a href="#" class="blog"><i class="fa fa-rss"></i></a>
                        <a href="#" class="dribbble"><i class="fa fa-dribbble"></i></a>
                    </div>
                    <div class="group-sign-in">
                        <!-- <a href="../thinkwizz/login.php" class="login">login</a> -->
                        <a href="../thinkwizz/signup.php" class="register">register</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-main homepage-01">
            <div class="container">
                <div class="header-main-wrapper">
                    <div class="navbar-heade">
                        <div class="logo pull-left"><a href="index.php" class="header-logo"><img src="assets/images/logo-color-1.png" alt=""/></a></div>
                        <button type="button" data-toggle="collapse" data-target=".navigation" class="navbar-toggle edugate-navbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    </div>
                    <nav class="navigation collapse navbar-collapse pull-right">
                        <ul class="nav-links nav navbar-nav">
                            <li class="dropdown"><a href="./../thinkwizz/index.php" class="main-menu">Home</a>
                            </li>
                            <li><a href="about_us.php" class="main-menu">About Us</a></li>
                            <li class="dropdown"><a href="javascript:void(0)" class="main-menu">Courses<span class="fa fa-angle-down icons-dropdown"></span></a>
                                <ul class="dropdown-menu edugate-dropdown-menu-1">
                                    <li><a href="courses.html" class="link-page">IIT-JEE</a></li>
                                    <li><a href="courses-detail.html" class="link-page">NEET</a></li>
                                    <li><a href="events.html" class="link-page">BOARD</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="javascript:void(0)" class="main-menu">gallery<span class="fa fa-angle-down icons-dropdown"></span></a>
                                <ul class="dropdown-menu edugate-dropdown-menu-1">
                                    <li><a href="gallery-3column.html" class="link-page">gallery 3 column</a></li>
                                    <li><a href="gallery-4column.html" class="link-page">gallery 4 column</a></li>
                                    <li><a href="gallery-masonry.html" class="link-page">gallery masonry</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.php" class="main-menu">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
