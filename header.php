<header>
                
    <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
        <div class="container">
            <div class="row">
                <!-- Begin Header Logo Area -->
                <div class="col-lg-3">
                    <div class="logo pb-sm-30 pb-xs-30" style="color:white;">
                        <a href="index.php">
                            <img src="images/custom/logo.png" alt="" style="width: 50px;">
                        </a>
                        Pharmacheck
                    </div>
                </div>
                <!-- Header Logo Area End Here -->
                <!-- Begin Header Middle Right Area -->
                <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                    <!-- Begin Header Middle Searchbox Area -->
                    <form action="#" class="hm-searchbox">
                        <input type="text" placeholder="Search by medicine ...">
                        <button class="li-btn" type="submit" style="background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(41,97,82,1) 44%, rgba(0,212,255,1) 100%);"><i class="fa fa-search" style="color: white;"></i></button>
                    </form>
                    <div class="header-middle-right">
                        <ul class="hm-menu">
                            <li class="hm-minicart">
                                
                                <?php 
                                    include('cart.php');
                                ?>
                            </li>
                            <!-- Header Mini Cart Area End Here -->
                        </ul>
                    </div>
                </div>
                <!-- Header Middle Right Area End Here -->
            </div>
        </div>
    </div>
    <!-- Header Middle Area End Here -->
    <!-- Begin Header Bottom Area -->
    <div class="header-bottom header-sticky d-none d-lg-block d-xl-block" style="background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(41,97,82,1) 44%, rgba(0,212,255,1) 100%);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Begin Header Bottom Menu Area -->
                    <div class="hb-menu">
                        <nav>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="pharmacylist.php">Pharmacy</a></li>
                                <li><a href="medicines.php">Medicines</a></li>
                                <li><a href="aboutus.php">About Us</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                                <li><a href="helpline.php">HelpLine</a></li>
                                <?php 
                                    if(isset($_SESSION['user'])){
                                ?>
                                <li class="dropdown-holder" style="float: right;">
                                    <a href="#">Account (<?php echo $_SESSION['user']['name']; ?>)</a>
                                    <ul class="hb-dropdown">
                                        <li><a href="profile.php">Profile</a></li>
                                        <li><a href="orders.php">Orders</a></li>
                                        <li><a href="processfront/logout.php">Logout</a></li>
                                    </ul>
                                </li>
                                <?php } else{?>
                                <li style="float: right;"><a href="login.php" >Login</a></li>
                                <?php }?>
                            </ul>
                        </nav>
                    </div>
                    <!-- Header Bottom Menu Area End Here -->
                </div>
            </div>
        </div>
    </div>
    <!-- Header Bottom Area End Here -->
    <!-- Begin Mobile Menu Area -->
    <div class="mobile-menu-area d-lg-none d-xl-none col-12">
        <div class="container"> 
            <div class="row">
                <div class="mobile-menu">
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu Area End Here -->
</header>