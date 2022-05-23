<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_GET['action']) && $_GET['action']=="add"){
	$id=intval($_GET['id']);
	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]['quantity']++;
	}else{
		$sql_p="SELECT * FROM products WHERE id={$id}";
		$query_p=mysqli_query($con,$sql_p);
		if(mysqli_num_rows($query_p)!=0){
			$row_p=mysqli_fetch_array($query_p);
			$_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['productPrice']);
			header('location:index.php');
		}else{
			$message="Product ID is invalid";
		}
	}
}


?>
<!doctype html>
<html class="no-js" lang="en-US">


<!-- Mirrored from d29u17ylf1ylz9.cloudfront.net/gatcomart/gatcomart/home-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Dec 2018 18:56:41 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gatcomart - Mega Shop Responsive HTML Template</title>
    <meta name="description" content="Default Description">
    <meta name="keywords" content="E-commerce" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="img/icon/favicon.png">
    <!-- Google Font Open Sans -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,900" rel="stylesheet">
    <!-- mobile menu css -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- nivo slider css -->
    <link rel="stylesheet" href="css/nivo-slider.css">
    <!-- owl carousel css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- price slider css -->
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <!-- fancybox css -->
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <!-- material design css -->
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- default css  -->
    <link rel="stylesheet" href="css/default.css">
    <!-- style css -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- modernizr js -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Wrapper Start -->
    <div class="wrapper home-3">
       <!-- Preloader Start -->
        <div class="preloader">
            <div class="loading-center">
                <div class="loading-center-absolute">
                    <div class="object object_one"></div>
                    <div class="object object_two"></div>
                    <div class="object object_three"></div>
                </div>
            </div>
        </div>
        <!-- Preloader End -->
        <!-- Newsletter Popup Start -->
        <div class="popup_wrapper hidden-sm hidden-xs">
            <div class="test">
                <span class="popup_off"><i class="zmdi zmdi-close"></i></span>
                <div class="subscribe_area text-center mt-60">
                    <h2>Newsletter</h2>
                    <p>Subscribe to the Gatcomart mailing list to receive updates on new arrivals, special offers and other discount information.</p>
                    <div class="subscribe-form-group">
                        <form action="#">
                            <input type="text" name="message" id="message" placeholder="Enter your email address">
                            <button type="submit">subscribe</button>
                        </form>
                    </div>
                    <div class="subscribe-bottom mt-15">
                        <input type="checkbox" id="newsletter-permission">
                        <label for="newsletter-permission">Don't show this popup again</label>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter Popup End -->
        <!-- Header Area Start -->
        <header>
           <!-- Header Top Start -->
            <div class="header-top blue-bg">
                <div class="container">
                    <div class="row">
                        <!-- Header Top left Start -->
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="header-top-left f-left">
                                <ul class="header-list-menu">
                                    <!-- Language Start -->
                                     <!--<li><a href="#">English1</a>
                                        <ul class="ht-dropdown">
                                            <li><a href="#">English2</a></li>
                                            <li><a href="#">English3</a></li>
                                            <li><a href="#">English4</a></li>
                                        </ul>
                                    </li>-->
                                    <!-- Language End -->
                                    <!-- Currency Start -->
                                   <!-- <li><a href="#">USD</a>
                                        <ul class="ht-dropdown">
                                            <li><a href="#">USD</a></li>
                                            <li><a href="#">GBP</a></li>
                                            <li><a href="#">EUR</a></li>
                                        </ul>
                                    </li>-->
                                    <!-- Currency End -->
                                </ul>
                                <!-- Header-list-menu End -->
                            </div>
                        </div>
                        <!-- Header Top left End -->
                        <!-- Header Top Right Start -->
                        <div class="col-md-9 col-sm-8 col-xs-12">
                            <div class="header-top-right f-right header-top-none">
                                <ul class="header-list-menu right-menu">
                                    <li><a href="#">my account</a>
                                        <ul class="ht-dropdown ht-account">
                                            <li><a href="#">compare product 0</a></li>
                                            <li><a href="#">My account</a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="wish-list.html">my wish list</a></li>
                                            <li><a href="login.html">sign in</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="register.html">create an account</a></li>
                                    <li><a href="wish-list.html">wish list (0)</a></li>
                                    <li><a href="checkout.html">checkout</a></li>
                                </ul>
                                <!-- Header-list-menu End -->
                            </div>
                            <div class="small-version">
                                <div class="header-top-right f-right">
                                    <ul class="header-list-menu right-menu">
                                        <li><a href="login.html"><i class="fa fa-user"></i></a></li>
                                        <li><a href="register.html"><i class="fa fa-registered"></i></a></li>
                                        <li><a href="wish-list.html"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="checkout.html"><i class="fa fa-usd"></i></a></li>
                                    </ul>
                                    <!-- Header-list-menu End -->
                                </div>
                            </div>
                        </div>
                        <!-- Header Top Right End -->
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container End -->
            </div>
            <!-- Header Top End -->
            <!-- Header Middle Start -->
            <div class="header-middle pt-20 pb-55 blue-bg">
                <div class="container">
                    <div class="row">
                        <!-- Logo Start -->
                        <div class="col-lg-3 col-md-4">
                            <div class="logo">
                                <a href="index.html"><img src="img/logo/logo-3.png" alt="logo-image"></a>
                            </div>
                        </div>
                        <!-- Logo End -->
                        <!-- Header Middle Menu Start -->
                        <div class="col-lg-9 col-md-8">
                            <div class="middle-menu hidden-sm hidden-xs">
                               <nav>
                                    <ul class="middle-menu-list">
                                        <li><a href="index.html">home</a>
                                            <!-- Home Version Dropdown Start
                                            <ul class="ht-dropdown">
                                                <li><a href="index.html">Home Version 1</a></li>
                                                <li><a href="home-2.html">Home Version 2</a></li>
                                                <li><a href="home-3.html">Home Version 3</a></li>
                                                <li><a href="home-4.html">Home Version 4</a></li>
                                            </ul> -->
                                            <!-- Home Version Dropdown End -->
                                        </li>
                                        <li><a href="shop.html">view</a></li>
                                        <li><a href="accessories.html">accessories <span class="sticker-new">new</span></a></li>
                                        <li><a href="shop.html">gifts</a></li>
                                        <li><a href="accessories.html">tools <span class="sticker-sale">sale</span></a></li>
                                        <li><a href="#">pages</a>
                                            <!-- Home Version Dropdown Start -->
                                            <ul class="ht-dropdown">
                                                <li><a href="shop.html">shop</a></li>
                                                <li><a href="product-page.html">products</a></li>
                                                <li><a href="accessories.html">accessories</a></li>
                                                <li><a href="cart.html">cart</a></li>
                                                <li><a href="checkout.html">checkout</a></li>
                                                <li><a href="wish-list.html">wish list</a></li>
                                                <li><a href="blog.html">blog</a></li>
                                                <li><a href="blog-details.html">blog details</a></li>
                                                <li><a href="login.html">login</a></li>
                                                <li><a href="register.html">register</a></li>
                                                <li><a href="contact.html">contact</a></li>
                                                <li><a href="404.html">404</a></li>
                                            </ul>
                                            <!-- Home Version Dropdown End -->
                                        </li>
                                        <li><a href="contact.html">contact</a></li>
                                        <li><a href="blog.html">blog</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- Main Cart Box Start -->
                            <div class="cart-box visible-xs">
                                <ul>
                                    <li>
                                        <a href="#"></a>
                                        <ul class="ht-dropdown main-cart-box">
                                            <li>
                                                <!-- Cart Box Start -->
                                                <div class="single-cart-box">
                                                    <div class="cart-img">
                                                        <a href="#"><img src="img/menu/5.jpg" alt="cart-image"></a>
                                                    </div>
                                                    <div class="cart-content">
                                                        <h6><a href="#">Alpha Block Black Polo T-Shirt</a></h6>
                                                        <span>1 × $399.00</span>
                                                    </div>
                                                    <a class="del-icone" href="#"><i class="zmdi zmdi-close-circle-o"></i></a>
                                                </div>
                                                <!-- Cart Box End -->
                                                <!-- Cart Box Start -->
                                                <div class="single-cart-box">
                                                    <div class="cart-img">
                                                        <a href="#"><img src="img/menu/6.jpg" alt="cart-image"></a>
                                                    </div>
                                                    <div class="cart-content">
                                                        <h6><a href="#">Red Printed Round Neck T-Shirt</a></h6>
                                                        <span>2 × $299.00</span>
                                                    </div>
                                                    <a class="del-icone" href="#"><i class="zmdi zmdi-close-circle-o"></i></a>
                                                </div>
                                                <!-- Cart Box End -->
                                                <!-- Cart Footer Inner Start -->
                                                <div class="cart-footer fix">
                                                    <h5>total :<span class="f-right">$698.00</span></h5>
                                                    <div class="cart-actions">
                                                        <a class="checkout" href="cart.html">Checkout</a>
                                                    </div>
                                                </div>
                                                <!-- Cart Footer Inner End -->
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- Main Cart Box End -->
                            <!-- Mobile Menu  Start -->
                            <div class="mobile-menu visible-sm visible-xs">
                                <nav>
                                    <ul>
                                        <li><a href="index.html">home</a>
                                            <!-- Home Version Dropdown Start 
                                            <ul>
                                                <li><a href="index.html">Home Version 1</a></li>
                                                <li><a href="home-2.html">Home Version 2</a></li>
                                                <li><a href="home-3.html">Home Version 3</a></li>
                                                <li><a href="home-4.html">Home Version 4</a></li>
                                            </ul>-->
                                            <!-- Home Version Dropdown End
                                        </li>
                                        <li><a href="accessories.html">fashion & clothing</a>
                                            <!-- Mobile Menu Dropdown Start 
                                            <ul>
                                                <li><a href="shop.html">women</a></li>
                                                <li><a href="shop.html">men</a></li>
                                                <li><a href="shop.html">kids</a></li>
                                            </ul>
                                            <!-- Mobile Menu Dropdown End -->
                                        </li>-->
                                        <li><a href="#">electronics</a>
                                            <!-- Mobile Menu Dropdown Start -->
                                            <ul>
                                                <li><a href="shop.html">smart phone</a></li>
                                                <li><a href="shop.html">camera</a></li>
                                            </ul>
                                            <!-- Mobile Menu Dropdown End -->
                                        </li>
                                        <li><a href="accessories.html">decor & furniture</a>
                                            <!-- Mobile Menu Dropdown Start -->
                                            <ul>
                                                <li><a href="shop.html">bedroom</a></li>
                                                <li><a href="shop.html">living room</a></li>
                                            </ul>
                                            <!-- Mobile Menu Dropdown End -->
                                        </li>
                                        <li><a href="accessories.html">toy,kids & baby</a>
                                            <!-- Mobile Menu Dropdown Start -->
                                            <ul>
                                                <li><a href="shop.html">toy gifts sets</a></li>
                                                <li><a href="shop.html">teethers</a></li>
                                                <li><a href="shop.html">teaching clocks</a></li>
                                            </ul>
                                            <!-- Mobile Menu Dropdown End -->
                                        </li>
                                        <li><a href="accessories.html">home,garden & tools</a>
                                            <!-- Mobile Menu Dropdown Start -->
                                            <ul>
                                                <li><a href="shop.html">digging tools</a></li>
                                                <li><a href="shop.html">rakes</a></li>
                                                <li><a href="shop.html">striking tools</a></li>
                                            </ul>
                                            <!-- Mobile Menu Dropdown End -->
                                        </li>
                                        <li><a href="accessories.html">spost & outdoor</a>
                                            <!-- Mobile Menu Dropdown Start -->
                                            <ul>
                                                <li><a href="shop.html">outdoor appreal</a></li>
                                                <li><a href="shop.html">skis & snowboards</a></li>
                                                <li><a href="shop.html">bikes</a></li>
                                            </ul>
                                            <!-- Mobile Menu Dropdown End -->
                                        </li>
                                        <li><a href="#">pages</a>
                                            <!-- Mobile Menu Dropdown Start -->
                                            <ul>
                                                <li><a href="shop.html">shop</a></li>
                                                <li><a href="product-page.html">products</a></li>
                                                <li><a href="accessories.html">accessories</a></li>
                                                <li><a href="cart.html">cart</a></li>
                                                <li><a href="checkout.html">checkout</a></li>
                                                <li><a href="wish-list.html">wish list</a></li>
                                                <li><a href="blog.html">blog</a></li>
                                                <li><a href="blog-details.html">blog details</a></li>
                                                <li><a href="login.html">login</a></li>
                                                <li><a href="register.html">register</a></li>
                                                <li><a href="contact.html">contact</a></li>
                                                <li><a href="404.html">404</a></li>
                                            </ul>
                                            <!-- Mobile Menu Dropdown End -->
                                        </li>
                                        <li><a href="accessories.html">shop</a></li>
                                        <li><a href="accessories.html">accessories</a></li>
                                        <li><a href="accessories.html">gifts</a></li>
                                        <li><a href="accessories.html">tools</a></li>
                                        <li><a href="contact.html">contact us</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- Mobile Menu  End -->
                        </div>
                        <!-- Header Middle Menu End -->
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container End -->
            </div>
            <!-- Header Middle End -->
            <!-- Header Bottom Start -->
            <div class="container">
                <div class="header-bottom">
                    <div class="light-blue-bg ptb-10">
                        <div class="row">
                            <!-- Primary Vertical-Menu Start -->
                            <div class="col-lg-4 col-md-4 col-sm-4 hidden-sm hidden-xs">
                                <div class="vertical-menu ml-20">
                                    <span class="categorie-title">categorie menu</span>
                                    <nav>
                                        <ul class="vertical-menu-list menu-hideen">
                                            <li><a href="accessories.html"><span><img src="img/vertical-menu/1.png" alt="menu-icon"></span>Fashion & Clothing</a>
                                                <!-- Vertical Mega-Menu Start -->
                                                <ul class="ht-dropdown megamenu">
                                                    <!-- Mega-Menu Three Column Start -->
                                                    <li class="megamenu-three-column pb-20 fix">
                                                        <ul>
                                                            <!-- Single Column Start -->
                                                            <li>
                                                                <h3>women</h3>
                                                                <ul>
                                                                    <li><a href="shop.html">dresses</a></li>
                                                                    <li><a href="shop.html">shoes</a></li>
                                                                    <li><a href="shop.html">handbags</a></li>
                                                                    <li><a href="shop.html">clothing</a></li>
                                                                </ul>
                                                            </li>
                                                            <!-- Single Column End -->
                                                            <!-- Single Column Start -->
                                                            <li>
                                                                <h3>men</h3>
                                                                <ul>
                                                                    <li><a href="shop.html">dresses</a></li>
                                                                    <li><a href="shop.html">shoes</a></li>
                                                                    <li><a href="shop.html">handbags</a></li>
                                                                    <li><a href="shop.html">clothing</a></li>
                                                                </ul>
                                                            </li>
                                                            <!-- Single Column End -->
                                                            <!-- Single Column Start -->
                                                            <li>
                                                                <h3>kids</h3>
                                                                <ul>
                                                                    <li><a href="shop.html">dresses</a></li>
                                                                    <li><a href="shop.html">shoes</a></li>
                                                                    <li><a href="shop.html">handbags</a></li>
                                                                    <li><a href="shop.html">clothing</a></li>
                                                                </ul>
                                                            </li>
                                                            <!-- Single Column End -->
                                                        </ul>
                                                    </li>
                                                    <!-- Mega-Menu Three Column End -->
                                                    <li class="megamenu-img zoom">
                                                        <img src="img/menu/1.jpg" alt="menu-image">
                                                    </li>
                                                </ul>
                                                <!-- Vertical Mega-Menu End -->
                                            </li>
                                            <li><a href="accessories.html"><span><img src="img/vertical-menu/2.png" alt="menu-icon"></span>Electronics & Computer</a>
                                                <!-- Vertical Mega-Menu Start -->
                                                <ul class="ht-dropdown megamenu megamenu-two">
                                                    <!-- Mega-Menu Three Column Start -->
                                                    <li class="megamenu-three-column fix">
                                                        <ul>
                                                            <!-- Single Column Start -->
                                                            <li>
                                                                <h3>samrt phone</h3>
                                                                <ul>
                                                                    <li><a href="shop.html">apple</a></li>
                                                                    <li><a href="shop.html">motorola</a></li>
                                                                    <li><a href="shop.html">samsung</a></li>
                                                                    <li><a href="shop.html">htc</a></li>
                                                                    <li><a href="shop.html">sony</a></li>
                                                                    <li><a href="shop.html">s-phone</a></li>
                                                                    <li><a href="shop.html">asus</a></li>
                                                                    <li><a href="shop.html">nokia</a></li>
                                                                </ul>
                                                            </li>
                                                            <!-- Single Column End -->
                                                            <!-- Single Column Start -->
                                                            <li>
                                                                <h3>camera</h3>
                                                                <ul>
                                                                    <li><a href="shop.html">canon</a></li>
                                                                    <li><a href="shop.html">samsung</a></li>
                                                                    <li><a href="shop.html">nikon</a></li>
                                                                    <li><a href="shop.html">apple</a></li>
                                                                    <li><a href="shop.html">toshiba</a></li>
                                                                    <li><a href="shop.html">hp</a></li>
                                                                    <li><a href="shop.html">nokia</a></li>
                                                                    <li><a href="shop.html">sony</a></li>
                                                                </ul>
                                                            </li>
                                                            <!-- Single Column End -->
                                                            <!-- Single Column Start -->
                                                            <li class="mega-image zoom">
                                                                <ul>
                                                                    <li>
                                                                        <a href="#"><img class="img" src="img/menu/3.jpg" alt="menu-image"></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><img class="img" src="img/menu/4.jpg" alt="menu-image"></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><img class="img" src="img/menu/2.jpg" alt="menu-image"></a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <!-- Single Column End -->
                                                        </ul>
                                                    </li>
                                                    <!-- Mega-Menu Three Column End -->
                                                </ul>
                                                <!-- Vertical Mega-Menu End -->
                                            </li>
                                            <li><a href="accessories.html"><span><img src="img/vertical-menu/3.png" alt="menu-icon"></span>Decor & Furniture</a>
                                                <!-- Vertical Mega-Menu Start -->
                                                <ul class="ht-dropdown megamenu megamenu-two megamenu-three">
                                                    <!-- Mega-Menu Two Column Start -->
                                                    <li class="megamenu-three-column fix">
                                                        <ul>
                                                            <!-- Single Column Start -->
                                                            <li>
                                                                <h3>bedroom</h3>
                                                                <ul>
                                                                    <li><a href="shop.html">Platform Beds</a></li>
                                                                    <li><a href="shop.html">Storage Beds</a></li>
                                                                    <li><a href="shop.html">Brown Finish</a></li>
                                                                    <li><a href="shop.html">Distressed</a></li>
                                                                </ul>
                                                            </li>
                                                            <!-- Single Column End -->
                                                            <!-- Single Column Start -->
                                                            <li>
                                                                <h3>living room</h3>
                                                                <ul>
                                                                    <li><a href="shop.html">armchairs</a></li>
                                                                    <li><a href="shop.html">bedspread</a></li>
                                                                    <li><a href="shop.html">wardrobe</a></li>
                                                                    <li><a href="shop.html">trunk</a></li>
                                                                </ul>
                                                            </li>
                                                            <!-- Single Column End -->
                                                        </ul>
                                                    </li>
                                                    <!-- Mega-Menu Two Column End -->
                                                </ul>
                                                <!-- Vertical Mega-Menu End -->
                                            </li>
                                            <li><a href="accessories.html"><span><img src="img/vertical-menu/4.png" alt="menu-icon"></span>Toy, Kids & Baby</a>
                                                <!-- Vertical Mega-Menu Start -->
                                                <ul class="ht-dropdown megamenu">
                                                    <!-- Mega-Menu Three Column Start -->
                                                    <li class="megamenu-three-column fix">
                                                        <ul>
                                                            <!-- Single Column Start -->
                                                            <li>
                                                                <h3>toy gift sets</h3>
                                                                <ul>
                                                                    <li><a href="shop.html">bths toys</a></li>
                                                                    <li><a href="shop.html">balls</a></li>
                                                                    <li><a href="shop.html">mirrors</a></li>
                                                                </ul>
                                                            </li>
                                                            <!-- Single Column End -->
                                                            <!-- Single Column Start -->
                                                            <li>
                                                                <h3>teethers</h3>
                                                                <ul>
                                                                    <li><a href="shop.html">rattles</a></li>
                                                                    <li><a href="shop.html">shape sorters</a></li>
                                                                    <li><a href="shop.html">stick horses</a></li>
                                                                </ul>
                                                            </li>
                                                            <!-- Single Column End -->
                                                            <!-- Single Column Start -->
                                                            <li>
                                                                <h3>teaching clocks</h3>
                                                                <ul>
                                                                    <li><a href="shop.html">Spinning Tops</a></li>
                                                                    <li><a href="shop.html">Crib Toys</a></li>
                                                                    <li><a href="shop.html">Car Seat</a></li>
                                                                </ul>
                                                            </li>
                                                            <!-- Single Column End -->
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <!-- Vertical Mega-Menu End -->
                                            </li>
                                            <li><a href="accessories.html"><span><img src="img/vertical-menu/5.png" alt="menu-icon"></span>Home, Garden & Tools</a>
                                                <!-- Vertical Mega-Menu Start -->
                                                <ul class="ht-dropdown megamenu">
                                                    <!-- Mega-Menu Three Column Start -->
                                                    <li class="megamenu-three-column fix">
                                                        <ul>
                                                            <!-- Single Column Start -->
                                                            <li>
                                                                <h3>Digging Tools</h3>
                                                                <ul>
                                                                    <li><a href="shop.html">Round Shovels</a></li>
                                                                    <li><a href="shop.html">Square Shovels</a></li>
                                                                    <li><a href="shop.html">spades</a></li>
                                                                </ul>
                                                            </li>
                                                            <!-- Single Column End -->
                                                            <!-- Single Column Start -->
                                                            <li>
                                                                <h3>rakes</h3>
                                                                <ul>
                                                                    <li><a href="shop.html">Leaf Rakes</a></li>
                                                                    <li><a href="shop.html">Landscaping Rakes</a></li>
                                                                    <li><a href="shop.html">Shrub Rakes</a></li>
                                                                </ul>
                                                            </li>
                                                            <!-- Single Column End -->
                                                            <!-- Single Column Start -->
                                                            <li>
                                                                <h3>Striking Tools</h3>
                                                                <ul>
                                                                    <li><a href="shop.html">Sledge Hammers</a></li>
                                                                    <li><a href="shop.html">Axes</a></li>
                                                                    <li><a href="shop.html">Mallets</a></li>
                                                                </ul>
                                                            </li>
                                                            <!-- Single Column End -->
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <!-- Vertical Mega-Menu End -->
                                            </li>
                                            <li><a href="accessories.html"><span><img src="img/vertical-menu/6.png" alt="menu-icon"></span>Sport & Outdoors</a>
                                                <!-- Vertical Mega-Menu Start -->
                                                <ul class="ht-dropdown megamenu">
                                                    <!-- Mega-Menu Three Column Start -->
                                                    <li class="megamenu-three-column fix">
                                                        <ul>
                                                            <!-- Single Column Start -->
                                                            <li>
                                                                <h3>Outdoor Apparel</h3>
                                                                <ul>
                                                                    <li><a href="shop.html">base layers</a></li>
                                                                    <li><a href="shop.html">mid-layers</a></li>
                                                                    <li><a href="shop.html">shells</a></li>
                                                                </ul>
                                                            </li>
                                                            <!-- Single Column End -->
                                                            <!-- Single Column Start -->
                                                            <li>
                                                                <h3>Skis & Snowboard</h3>
                                                                <ul>
                                                                    <li><a href="shop.html">Nordica Enforcer 93</a></li>
                                                                    <li><a href="shop.html">Stockli Laser AX</a></li>
                                                                    <li><a href="shop.html">Salomon QST</a></li>
                                                                </ul>
                                                            </li>
                                                            <!-- Single Column End -->
                                                            <!-- Single Column Start -->
                                                            <li>
                                                                <h3>bikes</h3>
                                                                <ul>
                                                                    <li><a href="shop.html">wheels</a></li>
                                                                    <li><a href="shop.html">winter</a></li>
                                                                    <li><a href="shop.html">grids</a></li>
                                                                </ul>
                                                            </li>
                                                            <!-- Single Column End -->
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <!-- Vertical Mega-Menu End -->
                                            </li>
                                            <li><a href="accessories.html"><span><img src="img/vertical-menu/7.png" alt="menu-icon"></span>Gifts, Parties & Holiday</a></li>
                                            <!-- More Categoies Start -->
                                            <li id="cate-toggle" class="category-menu">
                                                <ul>
                                                    <li class="has-sub"> <a href="#">More Categories</a>
                                                        <ul class="category-sub">
                                                            <li><span><img src="img/vertical-menu/5.png" alt="menu-icon"></span> <a href="accessories.html">Accessories</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- More Categoies End -->
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- Primary Vertical-Menu End -->
                            <!-- Search Box Start -->
                            <div class="col-lg-6 col-md-5 col-sm-8">
                                <div class="search-box-view fix">
                                    <form action="#">
                                        <input type="text" class="email" placeholder="Search entire store here..." name="email" id="search">
                                        <button type="submit" class="submit"></button>
                                    </form>
                                </div>
                            </div>
                            <!-- Search Box End -->
                            <!-- Cartt Box Start -->
                            <div class="col-lg-2 col-md-3 col-sm-4">
                                <div class="cart-box hidden-xs">
								
								<?php
 $pdtid=array();
    $sql = "SELECT * FROM products WHERE id IN(";
			foreach($_SESSION['cart'] as $id => $value){
			$sql .=$id. ",";
			}
			$sql=substr($sql,0,-1) . ") ORDER BY id ASC";
			$query = mysqli_query($con,$sql);
			$totalprice=0;
			$totalqunty=0;
			if(!empty($query)){
			if($row = mysqli_fetch_array($query)){
				$quantity=$_SESSION['cart'][$row['id']]['quantity'];
				$subtotal= $_SESSION['cart'][$row['id']]['quantity']*$row['productPrice']+$row['shippingCharge'];
				$totalprice += $subtotal;
				$_SESSION['qnty']=$totalqunty+=$quantity;

				array_push($pdtid,$row['id']);
//print_r($_SESSION['pid'])=$pdtid;exit;
	?>
                                    <ul>
                                        <li><a href="my-cart.php"><span class="cart-text">my cart</span><span class="cart-counter">2 item(s)</span></a>
                                            <ul class="ht-dropdown main-cart-box">
                                                <li>
                                                    <!-- Cart Box Start -->
                                                    <div class="single-cart-box">
                                                        <div class="cart-img">
                                                            <a href="product-details.php?pid=<?php echo htmlentities($pd=$row['id']);?>" ><?php echo $row['productName'];

$_SESSION['sid']=$pd;
						 ?></a>
                                                        </div>
                                                        <div class="cart-content">
                                                            <h6><img src="admin/productimages/<?php echo $row['id'];?>/<?php echo $row['productImage1'];?> alt="" width="114" height="146"></h6>
                                                            
                                                        </div>
                                                        <a class="del-icone" href="#"><i class="zmdi zmdi-close-circle-o"></i></a>
                                                    </div>
                                                    <!-- Cart Box End -->
                                                    
                                                    <!-- Cart Footer Inner Start -->
                                                    <div class="cart-footer fix">
                                                        <h5>total :<span class="f-right">$698.00</span></h5>
                                                        <div class="cart-actions">
                                                            <a class="checkout" href="checkout.html">Checkout</a>
                                                        </div>
                                                    </div>
                                                    <!-- Cart Footer Inner End -->
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
									<?php
			}
									?>
                                </div>
                            </div>
                           
            <!-- Header Bottom End -->
            <!-- Fixed Social Icon Start -->
            <div class="fixed-icon hidden-xs">
                <ul class="fixed-icon-list">
                    <li><a href="#" data-toggle="tooltip" title="Twitter"><i class="zmdi zmdi-twitter"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" title="Google"><i class="zmdi zmdi-google"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" title="Facebook"><i class="zmdi zmdi-facebook"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" title="Youtube"><i class="zmdi zmdi-youtube"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" title="Instagram"><i class="zmdi zmdi-instagram"></i></a></li>
                </ul>
            </div>
            <!-- Fixed Social Icon End -->
        </header>
        <!-- Header Area End -->
        <!-- Slider Area Start -->
        <div class="slider-area fix">
            <div class="row">
                <!-- Main Slider Area Start -->
                <div class="col-sm-12">
                    <a href="#">
                        <div class="slider-wrapper theme-default">
                            <!-- Slider Background  Image Start-->
                            <div id="slider" class="nivoSlider">
                                <img src="img/slider/5.jpg" data-thumb="img/slider/5.jpg" alt="" title="#htmlcaption" />
                                <img src="img/slider/6.jpg" data-thumb="img/slider/6.jpg" alt="" title="#htmlcaption2" />
                            </div>
                            <!-- Slider Background  Image Start-->
                        </div>
                    </a>
                </div>
                <!-- Main Slider Area End -->
            </div>
            <!-- Row End -->
        </div>
        <!-- Slider Area End -->
        <!-- Slider Banner Start -->
        <div class="banner pb-50">
            <div class="container">
                <!-- Under Slider Single Banner Start -->
                <div class="banner">
                    <div class="single-banner zoom">
                        <a href="#"><img src="img/slider/11.jpg" alt="slider-banner"></a>
                    </div>
                    <div class="single-banner zoom">
                        <a href="#"><img src="img/slider/12.jpg" alt="slider-banner"></a>
                    </div>
                    <div class="single-banner zoom">
                        <a href="#"><img src="img/slider/10.jpg" alt="slider-banner"></a>
                    </div>
                </div>
                <!-- Under Slider Single Banner End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Slider Banner Start -->
        <!-- Best Seller Product Start -->
        <div class="best-seller-product pb-50">
            <div class="container">
                <div class="row">
                    <!-- Hot Deal Start -->
                    <div class="col-md-4">
                        <!-- Group Title Start -->
                        <div class="group-title">
                            <h2>Hot deal to day</h2>
                        </div>
                        <!-- Group Title End -->
                        <div class="hot-deal owl-carousel">
                            <!-- Single Products Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="#">
									<?php
										$ret=mysqli_query($con,"select * from products where id='2'" );
										while ($row=mysqli_fetch_array($ret)) 
										{
										# code...


										?>
                                        <img class="primary-img" alt=""admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"" src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" >
                                       <!--<img class="secondary-img" src="img/best-seller/1_2.jpg" alt="offer-pro">
                                    --></a>
                                    <div id="countdown"></div>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
								

                                <div class="pro-content">
                                    <h4><a href=product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?>"></a></h4>
                                    <p><span>Rs.<?php echo htmlentities($row['productPrice']);?></span><del>Rs.<?php echo htmlentities($row['productPriceBeforeDiscount']);?></del></p>
                                    <div class="rating">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-outline"></i>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="index2.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="lnk btn btn-primary"" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                        <div class="actions-secondary">
                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                        </div>
                                    </div>
                                    <span class="sticker-sale pro-sticker">-6%</span>
                                </div>
<?php
}
?>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Products End -->
                            <!-- Single Products Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="#">
                                        <img class="primary-img" src="img/best-seller/2_1.jpg" alt="offer-pro">
                                        <img class="secondary-img" src="img/best-seller/2_2.jpg" alt="offer-pro">
                                    </a>
                                    <div id="countdown-two"></div>
                                </div>
                                <!-- Product Image End -->

                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <h4><a href="#">Crown Summit Backpack</a></h4>
                                    <p><span>$36.00</span><del>-$38.00</del></p>
                                    <div class="rating">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-outline"></i>
                                        <i class="zmdi zmdi-star-outline"></i>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                        <div class="actions-secondary">
                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                        </div>
                                    </div>
                                    <span class="sticker-sale pro-sticker">-5%</span>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Products End -->

                            <!-- Single Products Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="#">
                                        <img class="primary-img" src="img/best-seller/3_1.jpg" alt="offer-pro">
                                        <img class="secondary-img" src="img/best-seller/3_2.jpg" alt="offer-pro">
                                    </a>
                                    <div id="countdown-three"></div>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <h4><a href="#">Wayfarer Messenger Bag</a></h4>
                                    <p><span>$35.00</span><del>-$40.00</del></p>
                                    <div class="rating">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-outline"></i>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                        <div class="actions-secondary">
                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                        </div>
                                    </div>
                                    <span class="sticker-sale pro-sticker">-12%</span>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Products End -->
                        </div>
                    </div>
                    <!-- Hot Deal End -->
                    <!-- Best Seller Start -->
                    <div class="col-md-8">
                        <!-- Group Title Start -->
                        <div class="group-title mts">
                            <h2>Best Seller Products</h2>
                        </div>
                        <!-- Group Title End -->
                        <div class="best-seller owl-carousel">
                            <!-- Double Products Start -->
                            <div class="double-product">
                                <!-- Single Products Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="#">
										<?php
										$ret=mysqli_query($con,"select * from products where id ='3'" );
										while ($row=mysqli_fetch_array($ret)) 
										{
										# code...


										?>
                                            <img class="primary-img" alt="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" width="100px" height="100px">
                                           <!-- <img class="secondary-img" src="img/best-seller/4_2.jpg" alt="single-product">
                                     -->   </a>
                                        <div class="quick-view">
                                            <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                        </div>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <h4><a href=""product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?>"></a></h4>
                                        <p><span>Rs.<?php echo htmlentities($row['productPrice']);?></span></p>
                                        <div class="rating">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                            </div>
                                        </div>
                                        <span class="sticker-new pro-sticker">new</span>
                                    </div>
									<?php
}
?>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Products End -->
                                <!-- Single Products Start-->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="#">
                                            <?php
										$ret=mysqli_query($con,"select * from products where id ='4'" );
										while ($row=mysqli_fetch_array($ret)) 
										{
										# code...


										?>
                                            <img class="primary-img" alt=""admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"" src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" width="40px" height="300px">
                                           <!-- <img class="secondary-img" src="img/best-seller/4_2.jpg" alt="single-product">
                                     -->   </a>
                                        <div class="quick-view">
                                            <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                        </div>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <h4><a href=""product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?>"></a></h4>
                                        <p><span>Rs.<?php echo htmlentities($row['productPrice']);?></span></p>
                                       <!-- <p><span>$4.00</span><del>-$5.00</del></p>-->
                                        <div class="rating">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                            </div>
                                        </div>
                                        <span class="sticker-sale pro-sticker">-20%</span>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Products End -->
                            </div>
							<?php
}
?>
                            <!-- Double Products End -->
                            <!-- Double Products Start -->
                            <div class="double-product">
                                <!-- Single Products Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="#">
                                           <?php
										$ret=mysqli_query($con,"select * from products where id='5'" );
										while ($row=mysqli_fetch_array($ret)) 
										{
										# code...


										?>
                                        <img class="primary-img" alt=""admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"" src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" >
                                       <!--<img class="secondary-img" src="img/best-seller/1_2.jpg" alt="offer-pro">
                                    --></a>
                                    <div id="countdown"></div>
                                </div>
								<div class="quick-view">
                                            <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                        </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
								

                                <div class="pro-content">
                                    <h4><a href=product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?>"></a></h4>
                                    <p><span>Rs.<?php echo htmlentities($row['productPrice']);?></span><del>Rs.<?php echo htmlentities($row['productPriceBeforeDiscount']);?></del></p>
                                        <div class="rating">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                            </div>
                                        </div>
                                        <span class="sticker-sale pro-sticker">-13%</span>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Products End -->
								<?php
}
?>
                                <!-- Single Products Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="#">
                                            <img class="primary-img" src="img/best-seller/7_1.jpg" alt="single-product">
                                            <img class="secondary-img" src="img/best-seller/7_2.jpg" alt="single-product">
                                        </a>
                                        <div class="quick-view">
                                            <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                        </div>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <h4><a href="#">Endurance</a></h4>
                                        <p><span>$49.00</span></p>
                                        <div class="rating">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                            </div>
                                        </div>
                                        <span class="sticker-new pro-sticker">new</span>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Products End -->
                            </div>
                            <!-- Double Products End -->
                            <!-- Double Products Start -->
                            <div class="double-product">
                                <!-- Single Products Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="#">
                                            <img class="primary-img" src="img/best-seller/8_1.jpg" alt="single-product">
                                            <img class="secondary-img" src="img/best-seller/8_2.jpg" alt="single-product">
                                        </a>
                                        <div class="quick-view">
                                            <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                        </div>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <h4><a href="#">Aim Analog</a></h4>
                                        <p><span>$45.00</span></p>
                                        <div class="rating">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Products End -->
                                <!-- Single Products Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="#">
                                            <img class="primary-img" src="img/best-seller/9_1.jpg" alt="single-product">
                                            <img class="secondary-img" src="img/best-seller/9_2.jpg" alt="single-product">
                                        </a>
                                        <div class="quick-view">
                                            <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                        </div>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <h4><a href="#">Zing Jump Rope</a></h4>
                                        <p><span>$12.00</span></p>
                                        <div class="rating">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Products End -->
                            </div>
                            <!-- Double Products End -->
                            <!-- Double Products Start -->
                            <div class="double-product">
                                <!-- Single Products Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="#">
                                            <img class="primary-img" src="img/best-seller/10_1.jpg" alt="single-product">
                                            <img class="secondary-img" src="img/best-seller/10_2.jpg" alt="single-product">
                                        </a>
                                        <div class="quick-view">
                                            <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                        </div>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <h4><a href="#">Compete Track Tote</a></h4>
                                        <p><span>$32.00</span></p>
                                        <div class="rating">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Products End -->
                                <!-- Single Products Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="#">
                                            <img class="primary-img" src="img/best-seller/11_1.jpg" alt="single-product">
                                            <img class="secondary-img" src="img/best-seller/11_2.jpg" alt="single-product">
                                        </a>
                                        <div class="quick-view">
                                            <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                        </div>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <h4><a href="#">Impulse Duffle</a></h4>
                                        <p><span>$70.00</span><del>-$74.00</del></p>
                                        <div class="rating">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                            </div>
                                        </div>
                                        <span class="sticker-sale pro-sticker">-5%</span>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Products End -->
                            </div>
                            <!-- Double Products End -->
                        </div>
                    </div>
                    <!-- Best Seller End -->
                </div>
            </div>
        </div>
        <!-- Best Seller Product End -->
         <!-- Featured Products Start -->
        <div class="first-featured-products pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Featured Product List Item Start -->
                        <ul class="product-list mb-30">
                            <li class="active"><a data-toggle="tab" href="#desktop">desktop</a></li>
                            <li><a data-toggle="tab" href="#men">men</a></li>
                            <li><a data-toggle="tab" href="#smart-phone">smart phone</a></li>
                            <li><a data-toggle="tab" href="#bedroom">bedroom</a></li>
                        </ul>
                        <!-- Featured Product List Item End -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="tab-content">
                            <div id="desktop" class="tab-pane fade in active">
                                <div class="first-featured-pro recent-post-active owl-carousel">
                                    <div class="row">
                                        <!-- Single Double Products Start -->
                                        <div class="col-md-3 col-sm-12 desktop-pro">
                                            <!-- Single Products Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/4_1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/4_2.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Go-Get'r Pushup Grips</a></h4>
                                                    <p><span>$19.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="sticker-new pro-sticker">new</span>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                            <!-- Single Products End -->
                                            <!-- Single Products Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/6_1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/6_2.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Sprite Foam Yoga Brick</a></h4>
                                                    <p><span>$4.00</span><del>$5.00</del></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="sticker-sale pro-sticker">-20%</span>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                            <!-- Single Products End -->
                                        </div>
                                        <!-- Single Double Products End -->
                                        <!-- Single Double Products Start -->
                                        <div class="col-md-6 col-sm-12">
                                            <!-- Single Products Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/8_1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/8_2.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content large-content">
                                                    <h4><a href="#">Aim Analog</a></h4>
                                                    <p><span>$45.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                            <!-- Single Products End -->
                                        </div>
                                        <!-- Single Double Products End -->
                                        <!-- Single Double Products Start -->
                                        <div class="col-md-3 col-sm-12 desktop-pro">
                                            <!-- Single Products Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/7_1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/7_2.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Endurance</a></h4>
                                                    <p><span>$49.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="sticker-new pro-sticker">new</span>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                            <!-- Single Products End -->
                                            <!-- Single Products Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/14_1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/14_2.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Summit</a></h4>
                                                    <p><span>$54.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                            <!-- Single Products End -->
                                        </div>
                                        <!-- Single Double Products End -->
                                    </div>
                                    <!-- Row End -->
                                    <div class="row">
                                        <!-- Single Double Products Start -->
                                        <div class="col-md-3 col-sm-12 desktop-pro">
                                            <!-- Single Products Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/6_1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/6_2.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Go-Get'r Pushup Grips</a></h4>
                                                    <p><span>$19.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="sticker-new pro-sticker">new</span>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                            <!-- Single Products End -->
                                            <!-- Single Products Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/4_1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/4_2.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Sprite Foam Yoga Brick</a></h4>
                                                    <p><span>$4.00</span><del>$5.00</del></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="sticker-sale pro-sticker">-20%</span>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                            <!-- Single Products End -->
                                        </div>
                                        <!-- Single Double Products End -->
                                        <!-- Single Double Products Start -->
                                        <div class="col-md-3 col-sm-12 desktop-pro">
                                            <!-- Single Products Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/7_1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/7_2.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Endurance</a></h4>
                                                    <p><span>$49.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="sticker-new pro-sticker">new</span>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                            <!-- Single Products End -->
                                            <!-- Single Products Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/14_1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/14_2.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Summit</a></h4>
                                                    <p><span>$54.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                            <!-- Single Products End -->
                                        </div>
                                        <!-- Single Double Products End -->
                                        <!-- Single Double Products Start -->
                                        <div class="col-md-6 col-sm-12">
                                            <!-- Single Products Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/14_1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/14_2.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content large-content">
                                                    <h4><a href="#">Aim Analog</a></h4>
                                                    <p><span>$45.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                            <!-- Single Products End -->
                                        </div>
                                        <!-- Single Double Products End -->
                                    </div>
                                    <!-- Row End -->
                                    <div class="row">
                                        <!-- Single Double Products Start -->
                                        <div class="col-md-6 col-sm-12">
                                            <!-- Single Products Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/14_1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/14_2.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content large-content">
                                                    <h4><a href="#">Aim Analog</a></h4>
                                                    <p><span>$45.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                            <!-- Single Products End -->
                                        </div>
                                        <!-- Single Double Products Start -->
                                        <!-- Single Double Products Start -->
                                        <div class="col-md-3 col-sm-12 desktop-pro">
                                            <!-- Single Products Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/6_1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/6_2.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Go-Get'r Pushup Grips</a></h4>
                                                    <p><span>$19.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="sticker-new pro-sticker">new</span>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                            <!-- Single Products End -->
                                            <!-- Single Products Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/4_1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/4_2.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Sprite Foam Yoga Brick</a></h4>
                                                    <p><span>$4.00</span><del>$5.00</del></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="sticker-sale pro-sticker">-20%</span>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                            <!-- Single Products End -->
                                        </div>
                                         <!-- Single Double Products End -->
                                        <div class="col-md-3 col-sm-12 desktop-pro">
                                            <!-- Single Products Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/7_1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/7_2.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Endurance</a></h4>
                                                    <p><span>$49.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="sticker-new pro-sticker">new</span>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                            <!-- Single Products End -->
                                            <!-- Single Products Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/14_1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/14_2.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Summit</a></h4>
                                                    <p><span>$54.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                            <!-- Single Products End -->
                                        </div>
                                        <!-- Single Double Products End -->
                                    </div>
                                    <!-- Row End -->
                                </div>
                                <!-- recent-post-active -->
                            </div>
                            <!-- #desktop End -->
                            <div id="men" class="tab-pane fade">
                                <div class="first-featured-pro recent-post-active owl-carousel">
                                    <div class="row">
                                        <!-- Single Products Start -->
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/4_1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/4_2.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Go-Get'r Pushup Grips</a></h4>
                                                    <p><span>$19.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="sticker-new pro-sticker">new</span>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Products End -->
                                        <!-- Single Products Start -->
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/5_1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/5_2.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Go-Get'r Pushup Grips</a></h4>
                                                    <p><span>$19.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="sticker-new pro-sticker">new</span>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Products End -->
                                        <!-- Single Products Start -->
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/3_1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/3_2.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Go-Get'r Pushup Grips</a></h4>
                                                    <p><span>$19.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="sticker-new pro-sticker">new</span>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Products End -->
                                        <!-- Single Products Start -->
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/6_1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/6_2.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Go-Get'r Pushup Grips</a></h4>
                                                    <p><span>$19.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="sticker-new pro-sticker">new</span>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Products End -->
                                    </div>
                                    <!-- Row End -->
                                      <div class="row">
                                        <!-- Single Products Start -->
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/4_1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/4_2.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Go-Get'r Pushup Grips</a></h4>
                                                    <p><span>$19.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="sticker-new pro-sticker">new</span>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Products End -->
                                        <!-- Single Products Start -->
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/6_2.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/6_1.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Go-Get'r Pushup Grips</a></h4>
                                                    <p><span>$19.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="sticker-new pro-sticker">new</span>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Products End -->
                                        <!-- Single Products Start -->
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/3_2.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/3_1.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Go-Get'r Pushup Grips</a></h4>
                                                    <p><span>$19.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="sticker-new pro-sticker">new</span>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Products End -->
                                        <!-- Single Products Start -->
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/4_2.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/4_1.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Go-Get'r Pushup Grips</a></h4>
                                                    <p><span>$19.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="sticker-new pro-sticker">new</span>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Products End -->
                                    </div>
                                    <!-- Row End -->
                                     <div class="row">
                                        <!-- Single Products Start -->
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/6_1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/6_2.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Go-Get'r Pushup Grips</a></h4>
                                                    <p><span>$19.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="sticker-new pro-sticker">new</span>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Products End -->
                                        <!-- Single Products Start -->
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/5_1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/5_2.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Go-Get'r Pushup Grips</a></h4>
                                                    <p><span>$19.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="sticker-new pro-sticker">new</span>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Products End -->
                                        <!-- Single Products Start -->
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/3_1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/3_2.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Go-Get'r Pushup Grips</a></h4>
                                                    <p><span>$19.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="sticker-new pro-sticker">new</span>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Products End -->
                                        <!-- Single Products Start -->
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/4_2.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/4_1.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Go-Get'r Pushup Grips</a></h4>
                                                    <p><span>$19.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="sticker-new pro-sticker">new</span>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Products End -->
                                    </div>
                                     <!-- Row End -->
                                </div>
                                <!-- Men Active End -->
                            </div>
                            <!-- #men End -->
                            <div id="smart-phone" class="tab-pane fade">
                                <div class="first-featured-pro recent-post-active owl-carousel">
                                    <div class="row">
                                        <!-- Single Double Products Start -->
                                        <div class="col-md-3 col-sm-12 desktop-pro">
                                            <!-- Single Products Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/4_1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/4_2.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Go-Get'r Pushup Grips</a></h4>
                                                    <p><span>$19.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="sticker-new pro-sticker">new</span>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                            <!-- Single Products End -->
                                            <!-- Single Products Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/6_1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/6_2.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Sprite Foam Yoga Brick</a></h4>
                                                    <p><span>$4.00</span><del>$5.00</del></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="sticker-sale pro-sticker">-20%</span>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                            <!-- Single Products End -->
                                        </div>
                                        <!-- Single Double Products End -->
                                        <!-- Single Double Products Start -->
                                        <div class="col-md-6 col-sm-12">
                                            <!-- Single Products Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/6_1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/6_2.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content large-content">
                                                    <h4><a href="#">Aim Analog</a></h4>
                                                    <p><span>$45.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                            <!-- Single Products End -->
                                        </div>
                                        <!-- Single Double Products End -->
                                        <!-- Single Double Products Start -->
                                        <div class="col-md-3 col-sm-12 desktop-pro">
                                            <!-- Single Products Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/7_1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/7_2.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Endurance</a></h4>
                                                    <p><span>$49.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="sticker-new pro-sticker">new</span>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                            <!-- Single Products End -->
                                            <!-- Single Products Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/14_1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/14_2.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Summit</a></h4>
                                                    <p><span>$54.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                            <!-- Single Products End -->
                                        </div>
                                        <!-- Single Double Products End -->
                                    </div>
                                    <!-- Row End -->
                                    <div class="row">
                                        <!-- Single Double Products Start -->
                                        <div class="col-md-3 col-sm-12 desktop-pro">
                                            <!-- Single Products Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/6_1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/6_2.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Go-Get'r Pushup Grips</a></h4>
                                                    <p><span>$19.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="sticker-new pro-sticker">new</span>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                            <!-- Single Products End -->
                                            <!-- Single Products Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/4_1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/4_2.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Sprite Foam Yoga Brick</a></h4>
                                                    <p><span>$4.00</span><del>$5.00</del></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="sticker-sale pro-sticker">-20%</span>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                            <!-- Single Products End -->
                                        </div>
                                        <!-- Single Double Products End -->
                                        <!-- Single Double Products Start -->
                                        <div class="col-md-3 col-sm-12 desktop-pro">
                                            <!-- Single Products Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/7_1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/7_2.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Endurance</a></h4>
                                                    <p><span>$49.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="sticker-new pro-sticker">new</span>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                            <!-- Single Products End -->
                                            <!-- Single Products Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/14_1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/14_2.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Summit</a></h4>
                                                    <p><span>$54.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                            <!-- Single Products End -->
                                        </div>
                                        <!-- Single Double Products End -->
                                        <!-- Single Double Products Start -->
                                        <div class="col-md-6 col-sm-12">
                                            <!-- Single Products Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/6_1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/6_2.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content large-content">
                                                    <h4><a href="#">Aim Analog</a></h4>
                                                    <p><span>$45.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                            <!-- Single Products End -->
                                        </div>
                                        <!-- Single Double Products End -->
                                    </div>
                                    <!-- Row End -->
                                    <div class="row">
                                        <!-- Single Double Products Start -->
                                        <div class="col-md-6 col-sm-12">
                                            <!-- Single Products Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/6_1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/6_2.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content large-content">
                                                    <h4><a href="#">Aim Analog</a></h4>
                                                    <p><span>$45.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                            <!-- Single Products End -->
                                        </div>
                                        <!-- Single Double Products Start -->
                                        <!-- Single Double Products Start -->
                                        <div class="col-md-3 col-sm-12 desktop-pro">
                                            <!-- Single Products Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/6_1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/6_2.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Go-Get'r Pushup Grips</a></h4>
                                                    <p><span>$19.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="sticker-new pro-sticker">new</span>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                            <!-- Single Products End -->
                                            <!-- Single Products Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/4_1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/4_2.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Sprite Foam Yoga Brick</a></h4>
                                                    <p><span>$4.00</span><del>$5.00</del></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="sticker-sale pro-sticker">-20%</span>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                            <!-- Single Products End -->
                                        </div>
                                         <!-- Single Double Products End -->
                                        <div class="col-md-3 col-sm-12 desktop-pro">
                                            <!-- Single Products Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/7_1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/7_2.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Endurance</a></h4>
                                                    <p><span>$49.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="sticker-new pro-sticker">new</span>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                            <!-- Single Products End -->
                                            <!-- Single Products Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/14_1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/14_2.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Summit</a></h4>
                                                    <p><span>$54.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                            <!-- Single Products End -->
                                        </div>
                                        <!-- Single Double Products End -->
                                    </div>
                                    <!-- Row End -->
                                </div>
                                <!-- smartphone-active -->
                            </div>
                            <!-- #smart-phone End -->
                            <div id="bedroom" class="tab-pane fade">
                                <div class="first-featured-pro recent-post-active owl-carousel">
                                    <div class="row">
                                        <!-- Single Products Start -->
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/4_1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/4_2.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Go-Get'r Pushup Grips</a></h4>
                                                    <p><span>$19.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="sticker-new pro-sticker">new</span>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Products End -->
                                        <!-- Single Products Start -->
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/5_1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/5_2.jpg" alt="single-product">
                                                     </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Go-Get'r Pushup Grips</a></h4>
                                                    <p><span>$19.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="sticker-new pro-sticker">new</span>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Products End -->
                                        <!-- Single Products Start -->
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/3_1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/3_2.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Go-Get'r Pushup Grips</a></h4>
                                                    <p><span>$19.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="sticker-new pro-sticker">new</span>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Products End -->
                                        <!-- Single Products Start -->
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/6_1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/6_2.jpg" alt="single-product">
                                                     </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Go-Get'r Pushup Grips</a></h4>
                                                    <p><span>$19.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="sticker-new pro-sticker">new</span>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Products End -->
                                    </div>
                                    <!-- Row End -->
                                    <div class="row">
                                        <!-- Single Products Start -->
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/4_1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/4_2.jpg" alt="single-product">
                                                     </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Go-Get'r Pushup Grips</a></h4>
                                                    <p><span>$19.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="sticker-new pro-sticker">new</span>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Products End -->
                                        <!-- Single Products Start -->
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/6_2.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/6_1.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Go-Get'r Pushup Grips</a></h4>
                                                    <p><span>$19.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="sticker-new pro-sticker">new</span>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Products End -->
                                        <!-- Single Products Start -->
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/3_2.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/3_1.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Go-Get'r Pushup Grips</a></h4>
                                                    <p><span>$19.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="sticker-new pro-sticker">new</span>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Products End -->
                                        <!-- Single Products Start -->
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/4_2.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/4_1.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Go-Get'r Pushup Grips</a></h4>
                                                    <p><span>$19.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="sticker-new pro-sticker">new</span>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Products End -->
                                    </div>
                                    <!-- Row End -->
                                    <div class="row">
                                        <!-- Single Products Start -->
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/6_1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/6_2.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Go-Get'r Pushup Grips</a></h4>
                                                    <p><span>$19.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="sticker-new pro-sticker">new</span>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Products End -->
                                        <!-- Single Products Start -->
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/5_1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/5_2.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Go-Get'r Pushup Grips</a></h4>
                                                    <p><span>$19.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="sticker-new pro-sticker">new</span>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Products End -->
                                        <!-- Single Products Start -->
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                       <img class="primary-img" src="img/best-seller/3_1.jpg" alt="single-product">
                                                       <img class="secondary-img" src="img/best-seller/3_2.jpg" alt="single-product">
                                                    </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Go-Get'r Pushup Grips</a></h4>
                                                    <p><span>$19.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="sticker-new pro-sticker">new</span>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Products End -->
                                        <!-- Single Products Start -->
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/best-seller/4_2.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img/best-seller/4_1.jpg" alt="single-product">
                                                     </a>
                                                    <div class="quick-view text-center">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                                    </div>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <h4><a href="#">Go-Get'r Pushup Grips</a></h4>
                                                    <p><span>$19.00</span></p>
                                                    <div class="rating">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                        <i class="zmdi zmdi-star-outline"></i>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="zmdi zmdi-repeat"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="sticker-new pro-sticker">new</span>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Products End -->
                                    </div>
                                    <!-- Row End -->
                                </div>
                                <!-- Bedroom Active End -->
                            </div>
                            <!-- #bedroom End -->
                        </div>
                        <!-- Tab-Content End -->
                    </div>
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Featured Products End -->
        <!-- Ads Banner Start -->
        <div class="ads-banner pb-50">
            <div class="container">
                <div class="row">
                    <!-- Single Ads Start -->
                    <div class="col-sm-4">
                        <div class="single-ads mb-10 zoom">
                            <a href="#"><img class="img" src="img/ads/1.jpg" alt="ads-banner"></a>
                        </div>
                        <div class="single-ads mb-10 zoom">
                            <a href="#"><img class="img" src="img/ads/2.jpg" alt="ads-banner"></a>
                        </div>
                    </div>
                    <!-- Single Ads End -->
                    <!-- Single Ads Start -->
                    <div class="col-sm-8">
                        <div class="single-ads mb-10 zoom">
                            <a href="#"><img class="img" src="img/ads/3.jpg" alt="ads-banner"></a>
                        </div>
                    </div>
                    <!-- Single Ads End -->
                </div>
            </div>
        </div>
        <!-- Ads Banner End -->
        <!-- Second Featured Products Start -->
        <div class="second-featured-products pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Featured Product List Item Start -->
                        <ul class="product-list mb-30">
                            <li class="active"><a data-toggle="tab" href="#onsale">onSale</a></li>
                            <li><a data-toggle="tab" href="#featured">featured</a></li>
                            <li><a data-toggle="tab" href="#mostviewed">Mostviewed</a></li>
                        </ul>
                        <!-- Featured Product List Item End -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="tab-content">
                            <div id="onsale" class="tab-pane fade in active">
                                <!-- Main Product Activation Start -->
                                <div class="related-main-pro owl-carousel fix-nav">
                                    <!-- Single Products Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="#">
                                                <img class="primary-img" src="img/accessories/6.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/accessories/2_2.jpg" alt="single-product">
                                            </a>
                                            <div class="quick-view text-center">
                                                <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                            </div>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <h4><a href="#">Affirm Water Bottle</a></h4>
                                            <p><span>$8.00</span><del>$10.00</del></p>
                                            <div class="rating">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-outline"></i>
                                                <i class="zmdi zmdi-star-outline"></i>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-sale pro-sticker">-20%</span>
                                    </div>
                                    <!-- Single Products End -->
                                    <!-- Single Products Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="#">
                                                <img class="primary-img" src="img/best-seller/13_1.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/best-seller/13_2.jpg" alt="single-product">
                                            </a>
                                            <div class="quick-view text-center">
                                                <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                            </div>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <h4><a href="#">Dual Handle Cardio Ball</a></h4>
                                            <p><span>$8.00</span><del>$12.00</del></p>
                                            <div class="rating">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-outline"></i>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-sale pro-sticker">-33%</span>
                                    </div>
                                    <!-- Single Products End -->
                                    <!-- Single Products Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="#">
                                                <img class="primary-img" src="img/best-seller/9_1.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/best-seller/9_2.jpg" alt="single-product">
                                            </a>
                                            <div class="quick-view text-center">
                                                <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                            </div>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <h4><a href="#">Zing Jump Rope</a></h4>
                                            <p><span>$12.00</span></p>
                                            <div class="rating">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-outline"></i>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Products End -->
                                    <!-- Single Products Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="#">
                                                <img class="primary-img" src="img/best-seller/6_1.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/best-seller/6_2.jpg" alt="single-product">
                                            </a>
                                            <div class="quick-view text-center">
                                                <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                            </div>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <h4><a href="#">Sprite Foam Yoga Brick</a></h4>
                                            <p><span>$4.00</span><del>$5.00</del></p>
                                            <div class="rating">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-sale pro-sticker">-20%</span>
                                    </div>
                                    <!-- Single Products End -->
                                    <!-- Single Products Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="#">
                                                <img class="primary-img" src="img/best-seller/1_1.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/best-seller/1_2.jpg" alt="single-product">
                                            </a>
                                            <div class="quick-view text-center">
                                                <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                            </div>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <h4><a href="#">Aim Analog</a></h4>
                                            <p><span>$45.00</span>5</p>
                                            <div class="rating">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-outline"></i>
                                                <i class="zmdi zmdi-star-outline"></i>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Products End -->
                                    <!-- Single Products Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="#">
                                                <img class="primary-img" src="img/best-seller/6_1.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/best-seller/6_2.jpg" alt="single-product">
                                            </a>
                                            <div class="quick-view text-center">
                                                <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                            </div>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <h4><a href="#">endurance</a></h4>
                                            <p><span>$49.00</span></p>
                                            <div class="rating">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Products End -->
                                </div>
                                <!-- Main Product Activation Start -->
                            </div>
                            <!-- #onsale End -->
                            <!-- Featured Start -->
                            <div id="featured" class="tab-pane fade">
                                <!-- Main Product Activation Start -->
                                <div class="related-main-pro owl-carousel fix-nav">
                                    <!-- Single Products Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="#">
                                                <img class="primary-img" src="img/best-seller/9_1.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/best-seller/9_2.jpg" alt="single-product">
                                            </a>
                                            <div class="quick-view text-center">
                                                <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                            </div>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <h4><a href="#">Zing Jump Rope</a></h4>
                                            <p><span>$12.00</span></p>
                                            <div class="rating">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-outline"></i>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Products End -->
                                    <!-- Single Products Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="#">
                                                <img class="primary-img" src="img/best-seller/6_1.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/best-seller/6_2.jpg" alt="single-product">
                                            </a>
                                            <div class="quick-view text-center">
                                                <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                            </div>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <h4><a href="#">Sprite Foam Yoga Brick</a></h4>
                                            <p><span>$4.00</span><del>$5.00</del></p>
                                            <div class="rating">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-sale pro-sticker">-20%</span>
                                    </div>
                                    <!-- Single Products End -->
                                    <!-- Single Products Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="#">
                                                <img class="primary-img" src="img/best-seller/1_1.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/best-seller/1_2.jpg" alt="single-product">
                                            </a>
                                            <div class="quick-view text-center">
                                                <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                            </div>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <h4><a href="#">Aim Analog</a></h4>
                                            <p><span>$45.00</span>5</p>
                                            <div class="rating">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-outline"></i>
                                                <i class="zmdi zmdi-star-outline"></i>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Products End -->
                                    <!-- Single Products Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="#">
                                                <img class="primary-img" src="img/best-seller/6_1.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/best-seller/6_2.jpg" alt="single-product">
                                            </a>
                                            <div class="quick-view text-center">
                                                <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                            </div>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <h4><a href="#">Dual Handle Cardio Ball</a></h4>
                                            <p><span>$8.00</span><del>$12.00</del></p>
                                            <div class="rating">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-outline"></i>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-sale pro-sticker">-33%</span>
                                    </div>
                                    <!-- Single Products End -->
                                    <!-- Single Products Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="#">
                                                <img class="primary-img" src="img/accessories/6.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/accessories/2_2.jpg" alt="single-product">
                                            </a>
                                            <div class="quick-view text-center">
                                                <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                            </div>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <h4><a href="#">Affirm Water Bottle</a></h4>
                                            <p><span>$8.00</span><del>$10.00</del></p>
                                            <div class="rating">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-outline"></i>
                                                <i class="zmdi zmdi-star-outline"></i>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-sale pro-sticker">-20%</span>
                                    </div>
                                    <!-- Single Products End -->
                                    <!-- Single Products Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="#">
                                                <img class="primary-img" src="img/best-seller/6_1.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/best-seller/6_2.jpg" alt="single-product">
                                            </a>
                                            <div class="quick-view text-center">
                                                <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                            </div>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <h4><a href="#">Sprite Foam Yoga Brick</a></h4>
                                            <p><span>$4.00</span><del>$5.00</del></p>
                                            <div class="rating">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-sale pro-sticker">-20%</span>
                                    </div>
                                    <!-- Single Products End -->
                                </div>
                                <!-- Main Product Activation Start -->
                            </div>
                            <!-- Featured End -->
                            <!-- Most Viewed Start -->
                            <div id="mostviewed" class="tab-pane fade">
                                <!-- Main Product Activation Start -->
                                <div class="related-main-pro owl-carousel fix-nav">
                                    <!-- Single Products Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="#">
                                                <img class="primary-img" src="img/best-seller/1_1.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/best-seller/1_2.jpg" alt="single-product">
                                            </a>
                                            <div class="quick-view text-center">
                                                <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                            </div>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <h4><a href="#">Aim Analog</a></h4>
                                            <p><span>$45.00</span>5</p>
                                            <div class="rating">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-outline"></i>
                                                <i class="zmdi zmdi-star-outline"></i>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Products End -->
                                    <!-- Single Products Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="#">
                                                <img class="primary-img" src="img/best-seller/6_1.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/best-seller/6_2.jpg" alt="single-product">
                                            </a>
                                            <div class="quick-view text-center">
                                                <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                            </div>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <h4><a href="#">endurance</a></h4>
                                            <p><span>$49.00</span></p>
                                            <div class="rating">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Products End -->
                                    <!-- Single Products Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="#">
                                                <img class="primary-img" src="img/accessories/6.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/accessories/2_2.jpg" alt="single-product">
                                            </a>
                                            <div class="quick-view text-center">
                                                <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                            </div>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <h4><a href="#">Affirm Water Bottle</a></h4>
                                            <p><span>$8.00</span><del>$10.00</del></p>
                                            <div class="rating">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-outline"></i>
                                                <i class="zmdi zmdi-star-outline"></i>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-sale pro-sticker">-20%</span>
                                    </div>
                                    <!-- Single Products End -->
                                    <!-- Single Products Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="#">
                                                <img class="primary-img" src="img/best-seller/13_1.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/best-seller/13_2.jpg" alt="single-product">
                                            </a>
                                            <div class="quick-view text-center">
                                                <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                            </div>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <h4><a href="#">Dual Handle Cardio Ball</a></h4>
                                            <p><span>$8.00</span><del>$12.00</del></p>
                                            <div class="rating">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-outline"></i>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-sale pro-sticker">-33%</span>
                                    </div>
                                    <!-- Single Products End -->
                                    <!-- Single Products Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="#">
                                                <img class="primary-img" src="img/best-seller/9_1.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/best-seller/9_2.jpg" alt="single-product">
                                            </a>
                                            <div class="quick-view text-center">
                                                <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                            </div>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <h4><a href="#">Zing Jump Rope</a></h4>
                                            <p><span>$12.00</span></p>
                                            <div class="rating">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-outline"></i>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Products End -->
                                    <!-- Single Products Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="#">
                                                <img class="primary-img" src="img/best-seller/6_1.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/best-seller/6_2.jpg" alt="single-product">
                                            </a>
                                            <div class="quick-view text-center">
                                                <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                            </div>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <h4><a href="#">Sprite Foam Yoga Brick</a></h4>
                                            <p><span>$4.00</span><del>$5.00</del></p>
                                            <div class="rating">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-sale pro-sticker">-20%</span>
                                    </div>
                                    <!-- Single Products End -->
                                </div>
                                <!-- Main Product Activation Start -->
                            </div>
                            <!-- Mostviewd End -->
                        </div>
                        <!-- Tab-Content End -->
                    </div>
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Second Featured Products End -->
        <!-- Discover Catergories Products Start -->
        <div class="catergorie-product pb-50">
            <div class="container">
                <!-- Group Title Start -->
                <div class="group-title">
                    <h2>Discover By Categories</h2>
                </div>
                <!-- Group Title End -->
                <div class="row">
                    <!-- single Catergories Start -->
                    <div class="col-md-4 col-sm-6">
                        <!-- Single Products Start -->
                        <div class="single-product">
                            <!-- Product Image Start -->
                            <div class="pro-img">
                                <a href="#">
                                    <img src="img/categories-products/1.jpg" alt="categorie-product">
                                </a>
                            </div>
                            <!-- Product Image End -->
                            <!-- Product Content Start -->
                            <div class="pro-content">
                                <h4><a href="#">Fashion & Clothings</a></h4>
                                <ul class="cat-list">
                                    <li><a href="#">women</a></li>
                                    <li><a href="#">men</a></li>
                                    <li><a href="#">kids</a></li>
                                </ul>
                            </div>
                            <!-- Product Content End -->
                        </div>
                        <!-- Single Products End -->
                    </div>
                    <!-- single Catergories End -->
                    <!-- single Catergories Start -->
                    <div class="col-md-4 col-sm-6">
                        <!-- Single Products Start -->
                        <div class="single-product">
                            <!-- Product Image Start -->
                            <div class="pro-img">
                                <a href="#">
                                    <img src="img/categories-products/2.jpg" alt="categorie-product">
                                </a>
                            </div>
                            <!-- Product Image End -->
                            <!-- Product Content Start -->
                            <div class="pro-content">
                                <h4><a href="#">Fashion & Clothings</a></h4>
                                <ul class="cat-list">
                                    <li><a href="#">bedroom</a></li>
                                    <li><a href="#">living room</a></li>
                                </ul>
                            </div>
                            <!-- Product Content End -->
                        </div>
                        <!-- Single Products End -->
                    </div>
                    <!-- single Catergories End -->
                    <!-- single Catergories Start -->
                    <div class="col-md-4 col-sm-6">
                        <!-- Single Products Start -->
                        <div class="single-product">
                            <!-- Product Image Start -->
                            <div class="pro-img">
                                <a href="#">
                                    <img src="img/categories-products/3.jpg" alt="categorie-product">
                                </a>
                            </div>
                            <!-- Product Image End -->
                            <!-- Product Content Start -->
                            <div class="pro-content">
                                <h4><a href="#">Fashion & Clothings</a></h4>
                                <ul class="cat-list">
                                    <li><a href="#">Digging Tools</a></li>
                                    <li><a href="#">racks</a></li>
                                    <li><a href="#">Striking Tools</a></li>
                                </ul>
                            </div>
                            <!-- Product Content End -->
                        </div>
                        <!-- Single Products End -->
                    </div>
                    <!-- single Catergories End -->
                    <!-- single Catergories Start -->
                    <div class="col-md-4 col-sm-6">
                        <!-- Single Products Start -->
                        <div class="single-product">
                            <!-- Product Image Start -->
                            <div class="pro-img">
                                <a href="#">
                                    <img src="img/categories-products/4.jpg" alt="categorie-product">
                                </a>
                            </div>
                            <!-- Product Image End -->
                            <!-- Product Content Start -->
                            <div class="pro-content">
                                <h4><a href="#">Fashion & Clothings</a></h4>
                                <ul class="cat-list">
                                    <li><a href="#">smart phone</a></li>
                                    <li><a href="#">camera</a></li>
                                    <li><a href="#">headphone</a></li>
                                </ul>
                            </div>
                            <!-- Product Content End -->
                        </div>
                        <!-- Single Products End -->
                    </div>
                    <!-- single Catergories End -->
                    <!-- single Catergories Start -->
                    <div class="col-md-4 col-sm-6">
                        <!-- Single Products Start -->
                        <div class="single-product">
                            <!-- Product Image Start -->
                            <div class="pro-img">
                                <a href="#">
                                    <img src="img/categories-products/5.jpg" alt="categorie-product">
                                </a>
                            </div>
                            <!-- Product Image End -->
                            <!-- Product Content Start -->
                            <div class="pro-content">
                                <h4><a href="#">Fashion & Clothings</a></h4>
                                <ul class="cat-list">
                                    <li><a href="#">Toy Gift Sets</a></li>
                                    <li><a href="#">teethers</a></li>
                                    <li><a href="#">Teaching Clocks</a></li>
                                </ul>
                            </div>
                            <!-- Product Content End -->
                        </div>
                        <!-- Single Products End -->
                    </div>
                    <!-- single Catergories End -->
                    <!-- single Catergories Start -->
                    <div class="col-md-4 col-sm-6">
                        <!-- Single Products Start -->
                        <div class="single-product">
                            <!-- Product Image Start -->
                            <div class="pro-img">
                                <a href="#">
                                    <img src="img/categories-products/6.jpg" alt="categorie-product">
                                </a>
                            </div>
                            <!-- Product Image End -->
                            <!-- Product Content Start -->
                            <div class="pro-content">
                                <h4><a href="#">Fashion & Clothings</a></h4>
                                <ul class="cat-list">
                                    <li><a href="#">Outdoor Apparel</a></li>
                                    <li><a href="#">Skis & Snowboards</a></li>
                                    <li><a href="#">Bikes</a></li>
                                </ul>
                            </div>
                            <!-- Product Content End -->
                        </div>
                        <!-- Single Products End -->
                    </div>
                    <!-- single Catergories End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Discover Catergories Products End -->
        <!-- Recent Post & Logo Brands Start -->
        <div class="post-logo pb-50">
            <div class="container">
                <div class="row">
                    <!-- Recent Post Start -->
                    <div class="col-md-12">
                        <!-- Group Title Start -->
                        <div class="group-title title-border">
                            <h2>recent post</h2>
                        </div>
                        <!-- Group Title End -->
                        <!-- Active Recent Post Start -->
                        <div class="recent-post-two best-seller-two owl-carousel">
                            <!-- Single Recent Post Start -->
                            <div class="recent-post fix">
                                <div class="recent-img zoom">
                                    <a href="#"><img src="img/post-logo-brands/1.jpg" alt="recent-post"></a>
                                </div>
                                <div class="recent-content pl-30">
                                    <h3 class="blog-title"><a href="#">From Now we are certified web agency</a></h3>
                                    <span class="date-time mb-10">December , 2016</span>
                                    <p>Discover five of our favourite dresses from our new collection that are destined to be worn and loved immediately.</p>
                                </div>
                            </div>
                            <!-- Single Recent Post End -->
                            <!-- Single Recent Post Start -->
                            <div class="recent-post fix">
                                <div class="recent-img zoom">
                                    <a href="#"><img src="img/post-logo-brands/1.jpg" alt="recent-post"></a>
                                </div>
                                <div class="recent-content pl-30">
                                    <h3 class="blog-title"><a href="#">From Now we are certified web agency</a></h3>
                                    <span class="date-time mb-10">December , 2016</span>
                                    <p>Discover five of our favourite dresses from our new collection that are destined to be worn and loved immediately.</p>
                                </div>
                            </div>
                            <!-- Single Recent Post End -->
                            <!-- Single Recent Post Start -->
                            <div class="recent-post fix">
                                <div class="recent-img zoom">
                                    <a href="#"><img src="img/post-logo-brands/1.jpg" alt="recent-post"></a>
                                </div>
                                <div class="recent-content pl-30">
                                    <h3 class="blog-title"><a href="#">From Now we are certified web agency</a></h3>
                                    <span class="date-time mb-10">December , 2016</span>
                                    <p>Discover five of our favourite dresses from our new collection that are destined to be worn and loved immediately.</p>
                                </div>
                            </div>
                            <!-- Single Recent Post End -->
                        </div>
                        <!-- Active Recent Post End -->
                    </div>
                    <!-- Recent Post End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Recent Post & Logo Brands End -->
        <!-- Recent Post & Logo Brands Start -->
        <div class="post-logo pb-50">
            <div class="container">
                <div class="row">
                    <!-- Logo Brands Start -->
                    <div class="col-sm-12">
                        <!-- Group Title Start -->
                        <div class="group-title title-border mts">
                            <h2>logo brands</h2>
                        </div>
                        <!-- Group Title End -->
                        <!-- Active Logo-Brands-two Start -->
                        <div class="logo-brand-two  owl-carousel">
                            <!-- Single Brand Start -->
                            <div class="single-img">
                                <a href="#"><img src="img/post-logo-brands/2.jpg" alt="brand-image"></a>
                            </div>
                            <!-- Single Brand End -->
                            <!-- Single Brand Start -->
                            <div class="dual-img">
                                <a href="#"><img src="img/post-logo-brands/3.jpg" alt="brand-image"></a>
                            </div>
                            <!-- Single Brand End -->
                            <!-- Single Brand Start -->
                            <div class="dual-img">
                                <a href="#"><img src="img/post-logo-brands/4.jpg" alt="brand-image"></a>
                            </div>
                            <!-- Single Brand End -->
                            <!-- Single Brand Start -->
                            <div class="dual-img">
                                <a href="#"><img src="img/post-logo-brands/5.jpg" alt="brand-image"></a>
                            </div>
                            <!-- Single Brand End -->
                            <!-- Single Brand Start -->
                            <div class="dual-img">
                                <a href="#"><img src="img/post-logo-brands/6.jpg" alt="brand-image"></a>
                            </div>
                            <!-- Single Brand End -->
                            <!-- Single Brand Start -->
                            <div class="dual-img">
                                <a href="#"><img src="img/post-logo-brands/7.jpg" alt="brand-image"></a>
                            </div>
                            <!-- Single Brand End -->
                            <!-- Single Brand Start -->
                            <div class="dual-img">
                                <a href="#"><img src="img/post-logo-brands/2.jpg" alt="brand-image"></a>
                            </div>
                            <!-- Single Brand End -->
                        </div>
                        <!-- Active Logo Brands End -->
                    </div>
                    <!-- Logo Brands End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Recent Post & Logo Brands End -->
        <!-- Newsletter& Subscribe Start -->
        <div class="subscribe blue-bg ptb-15">
            <div class="container">
                <div class="row">
                    <!-- Subscribe Box Start -->
                    <div class="col-sm-6">
                        <div class="search-box-view fix">
                            <form action="#">
                                <label for="email-two">Subscribe</label>
                                <input autocomplete="off" type="text" class="email" placeholder="Enter your email address" name="email" id="email-two">
                                <button type="submit" class="submit"></button>
                            </form>
                        </div>
                    </div>
                    <!-- Subscribe Box End -->
                    <!-- Social Follow Start -->
                    <div class="col-sm-6">
                        <div class="social-follow f-right">
                            <h3>stay connect</h3>
                            <!-- Follow Box End -->
                            <ul class="follow-box">
                                <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-google"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-youtube"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                            </ul>
                            <!-- Follow Box End -->
                        </div>
                    </div>
                    <!-- Social Follow Start -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Newsletter& Subscribe End -->
        <!-- Footer Start -->
        <footer>
            <!-- Footer Top Start -->
            <div class="footer-top ptb-40 white-bg">
                <div class="container">
                    <div class="row">
                        <!-- Single Footer Start -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer">
                                <div class="footer-logo mb-20">
                                    <a href="#"><img class="img" src="img/logo/logo.png" alt="logo-img"></a>
                                </div>
                                <div class="footer-content">
                                    <ul class="footer-list first-content">
                                        <li><i class="zmdi zmdi-phone-in-talk"></i> +(1234) 567 890</li>
                                        <li><i class="zmdi zmdi-email"></i><a href="#">mailto:info@roadthemes.com</a></li>
                                        <li>
                                            <i class="zmdi zmdi-pin-drop"></i> Address : No 40 Baria Sreet 133/2 <br> NewYork City, NY, United States.
                                        </li>
                                        <li></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Footer Start -->
                        <!-- Single Footer Start -->
                        <div class="col-lg-3 col-md-2 col-sm-6">
                            <div class="single-footer">
                                <h3 class="footer-title">my account</h3>
                                <div class="footer-content">
                                    <ul class="footer-list">
                                        <li><a href="#">sitemap</a></li>
                                        <li><a href="#">privacy policy</a></li>
                                        <li><a href="#">your account</a></li>
                                        <li><a href="#">adanced search</a></li>
                                        <li><a href="#">contact us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Footer Start -->
                        <!-- Single Footer Start -->
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="single-footer">
                                <h3 class="footer-title">Payment & Shipping</h3>
                                <div class="footer-content">
                                    <ul class="footer-list">
                                        <li><a href="#">terms of use</a></li>
                                        <li><a href="#">payment method</a></li>
                                        <li><a href="#">shipping guide</a></li>
                                        <li><a href="#">locations we ship to</a></li>
                                        <li><a href="#">estimated delivery time</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Footer Start -->
                        <!-- Single Footer Start -->
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="single-footer">
                                <h3 class="footer-title">customer service</h3>
                                <div class="footer-content">
                                    <ul class="footer-list">
                                        <li><a href="#">shipping policy</a></li>
                                        <li><a href="#">Compensation First</a></li>
                                        <li><a href="#">my account</a></li>
                                        <li><a href="#">return policy</a></li>
                                        <li><a href="#">contact us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Footer Start -->
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container End -->
            </div>
            <!-- Footer Top End -->
            <!-- Footer Middle Start -->
            <div class="footer-middle ptb-30">
                <div class="container">
                    <div class="row">
                        <!-- Single Payment Service Start -->
                        <div class="col-sm-4">
                            <div class="single-service">
                                <div class="service-des">
                                    <h3>safe-payments</h3>
                                    <p>Pay with the world’s most popular and secure payment methods.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Payment Service End -->
                        <!-- Single Payment Service Start -->
                        <div class="col-sm-4">
                            <div class="single-service serve-two">
                                <div class="service-des">
                                    <h3>Worldwide Delivery</h3>
                                    <p>With sites in 5 languages, we shop to over 100 countries and regions.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Payment Service End -->
                        <!-- Single Payment Service Start -->
                        <div class="col-sm-4">
                            <div class="single-service serve-three">
                                <div class="service-des">
                                    <h3>24/7 Help Center</h3>
                                    <p>Round-the-clock assistance for a smooth shopping experience.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Payment Service End -->
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container End -->
            </div>
            <!-- Footer Middle End -->
            <!-- Footer Bottom Start -->
            <div class="footer-bottom ptb-30 white-bg">
                <div class="container">
                    <p class="f-left">Copyright © 2017 <a href="https://devitems.com/">Devitems</a> All Rights Reserved.</p>
                    <a class="f-right img" href="#"><img src="img/footer/1.png" alt="payment-image"></a>
                </div>
                <!-- Container End -->
            </div>
            <!-- Footer Bottom End -->
        </footer>
        <!-- Footer End -->
        <!-- Quick View Content Start -->
        <div class="modal fade" id="myModal" role="dialog">
            <!-- Modal Dialog Box Start -->
            <div class="modal-dialog max-width">
                <!-- Modal content Start -->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal Body Start -->
                    <div class="modal-body">
                        <div class="quiick-view-details">
                            <!-- Product Thumbnail Start -->
                            <div class="main-product-thumbnail">
                                <div class="row">
                                    <!-- Main Thumbnail Image Start -->
                                    <div class="col-sm-5">
                                        <!-- Thumbnail Large Image start -->
                                        <div class="tab-content">
                                            <div id="home" class="tab-pane fade in active">
                                                <a data-fancybox="images" href="img/new-products/3_1.jpg"><img src="img/accessories/8.jpg" alt="product-view"></a>
                                            </div>
                                            <div id="menu1" class="tab-pane fade">
                                                <a data-fancybox="images" href="img/best-seller/6_1.jpg"><img src="img/accessories/7_1.jpg" alt="product-view"></a>
                                            </div>
                                            <div id="menu2" class="tab-pane fade">
                                                <a data-fancybox="images" href="img/best-seller/6_2.jpg"><img src="img/best-seller/6_2.jpg" alt="product-view"></a>
                                            </div>
                                            <div id="menu3" class="tab-pane fade">
                                                <a data-fancybox="images" href="img/best-seller/4_2.jpg"><img src="img/best-seller/4_2.jpg" alt="product-view"></a>
                                            </div>
                                            <div id="menu4" class="tab-pane fade">
                                                <a data-fancybox="images" href="img/best-seller/9_2.jpg"> <img src="img/best-seller/9_2.jpg" alt="product-view"></a>
                                            </div>
                                            <div id="menu5" class="tab-pane fade">
                                                 <a data-fancybox="images" href="img/accessories/7_2.jpg"><img src="img/accessories/7_2.jpg" alt="product-view"></a>
                                            </div>
                                        </div>
                                        <!-- Thumbnail Large Image End -->

                                        <!-- Thumbnail Image End -->
                                        <div class="product-thumbnail">
                                            <div class="thumb-menu owl-carousel">
                                                <div class="active">
                                                    <a data-toggle="tab" href="#home"> <img src="img/thumbnail/1.jpg" alt="product-thumbnail"></a>
                                                </div>
                                                <div>
                                                    <a data-toggle="tab" href="#menu1"> <img src="img/thumbnail/2.jpg" alt="product-thumbnail"></a>
                                                </div>
                                                <div>
                                                    <a data-toggle="tab" href="#menu2"> <img src="img/thumbnail/3.jpg" alt="product-thumbnail"></a>
                                                </div>
                                                <div>
                                                    <a data-toggle="tab" href="#menu3"> <img src="img/thumbnail/4.jpg" alt="product-thumbnail"></a>
                                                </div>
                                                <div>
                                                    <a data-toggle="tab" href="#menu4"> <img src="img/thumbnail/5.jpg" alt="product-thumbnail"></a>
                                                </div>
                                                <div>
                                                    <a data-toggle="tab" href="#menu5"> <img src="img/thumbnail/6.jpg" alt="product-thumbnail"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Thumbnail image end -->
                                    </div>
                                    <!-- Main Thumbnail Image End -->
                                    <!-- Thumbnail Description Start -->
                                    <div class="col-sm-7">
                                        <div class="thubnail-desc fix">
                                            <h2 class="product-header">Fusion Backpack</h2>
                                            <div class="pro-ref">
                                                <p><label>abailability:</label><span class="stock" title="abailability">in stock</span></p>
                                                <p><label class="text-uppercase">sku:</label><span>25-UG05</span></p>
                                            </div>
                                            <div class="rating-summary fix mtb-10">
                                                <div class="rating f-left">
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star-outline"></i>
                                                    <i class="zmdi zmdi-star-outline"></i>
                                                </div>
                                                <div class="rating-feedback f-left">
                                                    <a href="#">(1 review)</a>
                                                    <a href="#">add to your review</a>
                                                </div>
                                            </div>
                                            <div class="pro-price mb-15">
                                                <span>$19.00</span>
                                            </div>
                                            <div class="box-quantity mb-30">
                                                <form action="#">
                                                    <input class="number" id="number" type="number" value="1">
                                                    <button class="action-prime">add to cart</button>
                                                </form>
                                            </div>
                                            <div class="product-social-link">
                                                <ul class="list-inline">
                                                    <li><a href="#">Add to Wish List</a></li>
                                                    <li><a href="#">Add to compare</a></li>
                                                    <li><a href="#">Email</a></li>
                                                </ul>
                                            </div>
                                            <p class="ptb-30">With the Fusion Backpack strapped on, every trek is an adventure - even a bus ride to work. That's partly because two large zippered compartments store everything you need, while a front zippered pocket and side mesh pouches are perfect for stashing those little extras, in case you change your mind and take the day off.</p>
                                        </div>
                                    </div>
                                    <!-- Thumbnail Description End -->
                                </div>
                                <!-- Row End -->
                                <!-- Product Thumbnail Description Start -->
                                <div class="thumnail-desc">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <ul class="main-thumb-desc pt-30">
                                                <li class="active"><a data-toggle="tab" href="#dtails">Details</a></li>
                                                <li><a data-toggle="tab" href="#reviews">Reviews 1</a></li>
                                            </ul>
                                            <!-- Product Thumbnail Tab Content Start -->
                                            <div class="tab-content thumb-content">
                                                <div id="dtails" class="tab-pane fade in active">
                                                    <p>The Go-Get'r Pushup Grips safely provide the extra range of motion you need for a deep-dip routine targeting core, shoulder, chest and arm strength. Do fewer pushups using more energy, getting better results faster than the standard floor-level technique yield. <br> Durable foam grips.
                                                        <ul>
                                                            <li>Durable nylon construction.</li>
                                                            <li>2 main zippered compartments.</li>
                                                            <li>1 exterior zippered pocket.</li>
                                                            <li>Mesh side pouches.</li>
                                                            <li>Padded, adjustable straps.</li>
                                                            <li>Top carry handle.</li>
                                                            <li>Dimensions: 18" x 10" x 6".</li>
                                                        </ul>
                                                </div>
                                                <div id="reviews" class="tab-pane fade">
                                                    <!-- Reviews Start -->
                                                    <div class="review pb-40">
                                                        <h3 class="review-title mb-35">Customer Reviews</h3>
                                                        <h4 class="review-mini-title">Plazathemes</h4>
                                                        <ul class="review-list">
                                                            <!-- Single Review List Start -->
                                                            <li>
                                                                <span>Quality</span>
                                                                <i class="zmdi zmdi-star"></i>
                                                                <i class="zmdi zmdi-star"></i>
                                                                <i class="zmdi zmdi-star"></i>
                                                                <i class="zmdi zmdi-star-outline"></i>
                                                                <i class="zmdi zmdi-star-outline"></i>
                                                                <label>Plazathemes</label>
                                                            </li>
                                                            <!-- Single Review List End -->
                                                            <!-- Single Review List Start -->
                                                            <li>
                                                                <span>price</span>
                                                                <i class="zmdi zmdi-star"></i>
                                                                <i class="zmdi zmdi-star"></i>
                                                                <i class="zmdi zmdi-star"></i>
                                                                <i class="zmdi zmdi-star-outline"></i>
                                                                <i class="zmdi zmdi-star-outline"></i>
                                                                <label>Review by Plazathemes</label>
                                                            </li>
                                                            <!-- Single Review List End -->
                                                            <!-- Single Review List Start -->
                                                            <li>
                                                                <span>value</span>
                                                                <i class="zmdi zmdi-star"></i>
                                                                <i class="zmdi zmdi-star"></i>
                                                                <i class="zmdi zmdi-star"></i>
                                                                <i class="zmdi zmdi-star-outline"></i>
                                                                <i class="zmdi zmdi-star-outline"></i>
                                                                <label>Posted on 7/20/16</label>
                                                            </li>
                                                            <!-- Single Review List End -->
                                                        </ul>
                                                    </div>
                                                    <!-- Reviews End -->
                                                    <!-- Reviews Start -->
                                                    <div class="review pt-50">
                                                        <h3 class="review-title mb-30">You're reviewing: <br><span>Go-Get'r Pushup Grips</span></h3>
                                                        <p class="mb-10 req">your rating</p>
                                                        <ul class="review-list">
                                                            <!-- Single Review List Start -->
                                                            <li>
                                                                <span>Quality</span>
                                                                <i class="zmdi zmdi-star-outline"></i>
                                                                <i class="zmdi zmdi-star-outline"></i>
                                                                <i class="zmdi zmdi-star-outline"></i>
                                                                <i class="zmdi zmdi-star-outline"></i>
                                                                <i class="zmdi zmdi-star-outline"></i>
                                                            </li>
                                                            <!-- Single Review List End -->
                                                            <!-- Single Review List Start -->
                                                            <li>
                                                                <span>price</span>
                                                                <i class="zmdi zmdi-star-outline"></i>
                                                                <i class="zmdi zmdi-star-outline"></i>
                                                                <i class="zmdi zmdi-star-outline"></i>
                                                                <i class="zmdi zmdi-star-outline"></i>
                                                                <i class="zmdi zmdi-star-outline"></i>
                                                            </li>
                                                            <!-- Single Review List End -->
                                                            <!-- Single Review List Start -->
                                                            <li>
                                                                <span>value</span>
                                                                <i class="zmdi zmdi-star-outline"></i>
                                                                <i class="zmdi zmdi-star-outline"></i>
                                                                <i class="zmdi zmdi-star-outline"></i>
                                                                <i class="zmdi zmdi-star-outline"></i>
                                                                <i class="zmdi zmdi-star-outline"></i>
                                                            </li>
                                                            <!-- Single Review List End -->
                                                        </ul>
                                                    </div>
                                                    <!-- Reviews End -->
                                                    <!-- Reviews Field Start -->
                                                    <div class="riview-field mt-30">
                                                        <form autocomplete="off" action="#">
                                                            <div class="form-group">
                                                                <label class="req" for="n-name">Nickname</label>
                                                                <input type="text" class="form-control" id="n-name" required="required">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="req" for="summary">Summary</label>
                                                                <input type="text" class="form-control" id="summary" required="required">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="req" for="comment">Review</label>
                                                                <textarea class="form-control" rows="5" id="comment" required="required"></textarea>
                                                            </div>
                                                            <button type="submit" class="btn-default">Submit Review</button>
                                                        </form>
                                                    </div>
                                                    <!-- Reviews Field Start -->
                                                </div>
                                            </div>
                                            <!-- Product Thumbnail Tab Content End -->
                                        </div>
                                    </div>
                                    <!-- Row End -->
                                </div>
                                <!-- Product Thumbnail Description End -->
                            </div>
                            <!-- Product Thumbnail End -->
                        </div>
                        <!-- Quick View Details End -->
                    </div>
                    <!-- Modal Body End -->
                </div>
                <!-- Modal Content End -->
            </div>
            <!-- Modal Dialog Box End -->
        </div>
        <!-- Quick View Content End -->
    </div>
    <!-- Wrapper End -->
    <!-- jquery 3.12.4 -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- mobile menu js  -->
    <script src="js/jquery.meanmenu.min.js"></script>
    <!-- scroll-up js -->
    <script src="js/jquery.scrollUp.js"></script>
    <!-- owl-carousel js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- countdown js -->
    <script src="js/jquery.countdown.min.js"></script>
    <!-- wow js -->
    <script src="js/wow.min.js"></script>
    <!-- price slider js -->
    <script src="js/jquery-ui.min.js"></script>
    <!-- fancybox js -->
    <script src="js/jquery.fancybox.min.js"></script>
    <!-- nivo slider js -->
    <script src="js/jquery.nivo.slider.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- plugins -->
    <script src="js/plugins.js"></script>
    <!-- main js -->
    <script src="js/main.js"></script>
</body>


<!-- Mirrored from d29u17ylf1ylz9.cloudfront.net/gatcomart/gatcomart/home-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Dec 2018 18:56:49 GMT -->
</html>
<?php
			}
?>