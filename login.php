<!doctype html>
<html class="no-js" lang="zxx">
<?php 
    include('common.php');
?>  
<!-- index28:48-->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Pharmacheck</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <!-- <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png"> -->
        <!-- Material Design Iconic Font-V2.2.0 -->
        <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Font Awesome Stars-->
        <link rel="stylesheet" href="css/fontawesome-stars.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="css/meanmenu.css">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <!-- Slick Carousel CSS -->
        <link rel="stylesheet" href="css/slick.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Jquery-ui CSS -->
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <!-- Venobox CSS -->
        <link rel="stylesheet" href="css/venobox.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="css/nice-select.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="css/magnific-popup.css">
        <!-- Bootstrap V4.1.3 Fremwork CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Helper CSS -->
        <link rel="stylesheet" href="css/helper.css">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- Modernizr js -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body style="background-image: linear-gradient(#21042c, #af82c0);height: 100vh;">
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
        <!-- Begin Body Wrapper -->
        <div class="body-wrapper">
            <!-- Begin Header Area -->
            <?php 
                include('header.php');
            ?>

            <div class="body-wrapper" style="padding-top:2%;">
                <!-- Begin Header Area -->
                <div class="container" style="background: white; display: flex; padding: 2%;box-shadow: 6px 7px 5px 0px rgba(0,0,0,0.75); -webkit-box-shadow: 6px 7px 5px 0px rgba(0,0,0,0.75); -moz-box-shadow: 6px 7px 5px 0px rgba(0,0,0,0.75);">
                    <div style="width: 50%;float: left;">
                        <h2 style="text-align:center;font-size: 50px;color: #721695;font-family: logofont;">Pharmacheck</h2>
                        <img src="images/custom/logo.png" style="width:100%;">
                    </div>
                    <div style="width: 50%;float: right;">
                        <div id="checkout-login" class="coupon-content" style="display: block;height: 100%;border: 3px solid #b79fb7;">
                            <div class="coupon-info">
                                <form action="processfront/postlogin.php" method="post">
                                    <p class="form-row-first">
                                        <label>Email <span class="required">*</span></label>
                                        <input type="email" name="email" required style="border: 2px solid #b79fb7;">
                                    </p>
                                    <p class="form-row-last">
                                        <label>Password  <span class="required">*</span></label>
                                        <input type="password" name="password" style="border: 2px solid #b79fb7;">
                                    </p>
                                    <p class="form-row">
                                        <input value="Login" type="submit">
                                        <a class="btn btn-info" href="register.php">Register</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Area End Here -->
                <!-- Begin Quick View | Modal Area -->
               
            </div>
            <!-- <div class="container">
                <div id="checkout-login" class="coupon-content" style="display: block;">
                    <div class="coupon-info">
                        <form action="processfront/postlogin.php" method="post">
                            <p class="form-row-first">
                                <label>Email <span class="required">*</span></label>
                                <input type="email" name="email" required>
                            </p>
                            <p class="form-row-last">
                                <label>Password  <span class="required">*</span></label>
                                <input type="password" name="password">
                            </p>
                            <p class="form-row">
                                <input value="Login" type="submit">
                                <a class="btn btn-info" href="register.php">Register</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div> -->
            <!-- Footer Area End Here -->
            <!-- Begin Quick View | Modal Area -->
           
        </div>
        <!-- Body Wrapper End Here -->
        <!-- jQuery-V1.12.4 -->
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <!-- Popper js -->
        <script src="js/vendor/popper.min.js"></script>
        <!-- Bootstrap V4.1.3 Fremwork js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Ajax Mail js -->
        <script src="js/ajax-mail.js"></script>
        <!-- Meanmenu js -->
        <script src="js/jquery.meanmenu.min.js"></script>
        <!-- Wow.min js -->
        <script src="js/wow.min.js"></script>
        <!-- Slick Carousel js -->
        <script src="js/slick.min.js"></script>
        <!-- Owl Carousel-2 js -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- Magnific popup js -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <!-- Isotope js -->
        <script src="js/isotope.pkgd.min.js"></script>
        <!-- Imagesloaded js -->
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <!-- Mixitup js -->
        <script src="js/jquery.mixitup.min.js"></script>
        <!-- Countdown -->
        <script src="js/jquery.countdown.min.js"></script>
        <!-- Counterup -->
        <script src="js/jquery.counterup.min.js"></script>
        <!-- Waypoints -->
        <script src="js/waypoints.min.js"></script>
        <!-- Barrating -->
        <script src="js/jquery.barrating.min.js"></script>
        <!-- Jquery-ui -->
        <script src="js/jquery-ui.min.js"></script>
        <!-- Venobox -->
        <script src="js/venobox.min.js"></script>
        <!-- Nice Select js -->
        <script src="js/jquery.nice-select.min.js"></script>
        <!-- ScrollUp js -->
        <script src="js/scrollUp.min.js"></script>
        <!-- Main/Activator js -->
        <script src="js/main.js"></script>
        <script src="custom.js"></script>
    </body>

<!-- index30:23-->
</html>