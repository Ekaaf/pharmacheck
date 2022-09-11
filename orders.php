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
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Message</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="about-us-wrapper pt-40">
                <div class="container">
                   
                </div>
            </div>
            <div class="content-wraper">
                <div class="container" style="background:white;">
                <table class="table table-bordered table-striped">
                    <thead>
                        <th>Medicine</th>
                        <th>Order Date</th>
                        <th>Price</th>
                        <th>Delivery Address</th>
                        <th>Delivery Type</th>
                        <th>Payment Method</th>
                        <th>Delivery Date</th>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT orders.*, GROUP_CONCAT(medicines.medicine) as medicine FROM orders INNER JOIN order_medicines ON orders.id = order_medicines.order_id INNER JOIN medicines ON medicines.id = order_medicines.med_id where orders.user_id=".$_SESSION['user']['id'];
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                              while($row = $result->fetch_assoc()) {
                                // var_dump($row);exit;
                        ?>
                        <tr>
                            <td><?php echo $row['medicine'] ?></td>
                            <td><?php echo $row['order_date'] ?></td>
                            <td><?php echo $row['total'] ?></td>
                            <td><?php echo $row['delivery_address'] ?></td>
                            <td><?php echo $row['delivery_type'] ?></td>
                            <td><?php echo $row['payment_method'] ?></td>
                            <td>
                                <?php 
                                    if(is_null($row['delivery_date'])){
                                        echo "Not Delivered";
                                    }
                                    else{
                                        echo $row['delivery_date'];
                                    }
                                ?>
                            </td>
                        </tr>

                        <?php }}?>
                    </tbody>
                </table>
                </div>
            </div>
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