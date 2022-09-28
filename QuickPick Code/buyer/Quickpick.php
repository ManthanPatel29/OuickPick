<!DOCTYPE html>
<html lang="en">

<head>
    <title>Quick Pick</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.png">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>

<body class="animsition">	
<header class="header-v4">
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <!-- Topbar -->
        <div class="top-bar">
            <div class="content-topbar flex-sb-m h-full container">
                <div class="left-top-bar">       </div>
                <div class="right-top-bar flex-w h-full">
                <?php  
                    include 'session.php';

                    if(!isset($_SESSION['login']))
                    {
                	?>
					 <a href="../login/login.php" class="flex-c-m trans-04 p-lr-25">Login

                        </a>

                        <a href="../login/signup.php" class="flex-c-m trans-04 p-lr-25">Sign-up

                        </a>    
                	<?php
                    }
                     else
                    {
                    
                	?>
                         <a href="profiletest.php" class="flex-c-m trans-04 p-lr-25">
                                <?php   echo $login_session;  ?>
                        </a> 
                        <a href="../login/logout.php" class="flex-c-m trans-04 p-lr-25">Logout

                        </a>
					<?php

						}
					?>
                    
                </div>
            </div>
        </div>
        <div class="wrap-menu-desktop how-shadow1">
            <nav class="limiter-menu-desktop container">

                <!-- Logo desktop -->		
                <a href="#" class="logo-mobile">
                    <img src="images\icons\logo2.png" alt="IMG-LOGO">
                </a>

                <!-- Menu desktop -->
                <div class="menu-desktop">
                    <ul class="main-menu">
                        <li class="active-menu">
                            <a href="Quickpick.php">Home</a>
                        </li>

                        <li>
                            <a href="product.php">Product</a>
                        </li>

                        <li>
                            <a href="about.php">About</a>
                        </li>

                        <li>
                            <a href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>	

                <!-- Icon header -->
               <div class="wrap-icon-header flex-w flex-r-m">
    				<a href="#">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-filter-list">
							<i class="zmdi zmdi-filter-list"></i>
						</div>
				   </a>
                    <a href="shoping-cart.php">
                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-cart">
                             <i class="zmdi zmdi-shopping-cart"></i>
                        </div>
                    </a>
                </div>
            </nav>
        </div>	
    </div>

    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
        <!-- Logo moblie -->		
        <div class="logo-mobile">
            <a href="Quickpick.php"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
        </div>
    </div>
</header>
    
    <!-- Slider -->
     <section class="section-slide">
        <div class="wrap-slick1">
            <div class="slick1">
                <div class="item-slick1" style="background-image: url(images/Photos/slider/Fruits.JPG);">
                    <div class="container h-full">
                        <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                            <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                                <h4 class="ltext-101 cl2 respon2">
									<font color="black">Save Big on</font>
								</h4>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                                <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									<font color="black">Vegetables & Fruits</font>
                                </h2>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                                <a href="product.php" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Shop Now
								</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item-slick1" style="background-image: url(images/Photos/slider/household.jpeg);">
                    <div class="container h-full">
                        <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                            <div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
                                <h4 class="ltext-101 cl2 respon2" >
									<font color="black">50% Off On</font>
								</h4>
                            </div>


                            <div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
                                <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									<font color="black">Home Cleaning</font>
                                </h2>
                            </div>


                            <div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
                                <a href="product.php" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Shop Now
								</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="item-slick1" style="background-image: url(images/Photos/slider/babycare.jpg);">
                    <div class="container h-full">
                        <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                            <div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
                                <h4 class="ltext-101 cl2 respon2">
									<font color="black">Up to 30% Off On</font>
								</h4>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
                                <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									<font color="black">Baby Care Product</font>
                                </h2>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
                                <a href="product.php" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04" >
									Shop Now
								</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product -->
	<div class="bg0 m-t-0 p-t-20 p-b-20">
		<div class="container">
		<!--Product Show Start-->
			<div class="row isotope-grid">
			<?php
				$sql = "SELECT * FROM product_master where remove='0' ORDER BY P_ID DESC ";
				$result= mysqli_query($connect,$sql);

				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_assoc($result))
					{
						$sid = $row["Seller_ID"];
						$pid = $row["P_ID"];
						$img = $row["img"];
						$name = $row["P_Name"];
						$price = $row["Price"];
						
						$seller = "SELECT * FROM seller_master where Seller_ID = '$sid' and remove = '0' ";
						$sresult= mysqli_query($connect,$seller);

						if(mysqli_num_rows($sresult) > 0)
						{
							while($sel = mysqli_fetch_assoc($sresult))
							{
			?>      
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item margin">	 
				<form action="product-detail.php" method="post" >
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-pic hov-img0" >
									<input type="hidden" name="id" value="<?php echo $pid; ?>">
									<button type="submit" class="stext-104 cl4 margin hov-cl1 trans-04 js-name-b2 p-6" name="add_detail">
										<img src="<?php echo $img; ?>" class="block2-pic hov-img0 bg-none margin" alt="IMG-PRODUCT" width="260px" height="250px">
									</button>
								</div>
							   <div class="block2-txt flex-w flex-t p-t-14">
								 <div class="block2-txt-child1 flex-col-l ">
									<button type="submit" name="add_detail" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-6" >
											<font class="stext-104 cl5 hov-cl1 trans-04 js-name-b2 p-6"><?php echo $name;  ?></font>
									 </button>
								 </div>
								   <spam class="stext-105 cl3">
									<button type="submit" name="add_detail">
											<font class="stext-104 cl5 hov-cl1 trans-04 js-name-b2 p-6"> <?php echo "Rs.".$price; ?></font>
									</button>
								   </spam>
									   <div class="block2-txt-child2 flex-r p-t-3">  </div>
								</div>
							</div>
					 </form>
				</div>
			<?php
							}
						}
					}
				}
					else
					{
			?>
				<font color="black" face="verdana" size="5" align="center">SORRY!No Result Found.</font>
			<?php   
					}
				mysqli_close($connect);
			?>
		</div>
<!--Product Show Stop-->
		<div class="flex-c-m flex-w w-full p-t-45"> </div>
	</div>
</div>
	
<!--Footer Starts-->
        <?php include 'footer.php';  ?>
<!--Footer stop-->
    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <script>
        Rs.(".js-select2").each(function() {
            Rs.(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: Rs.(this).next('.dropDownSelect2')
            });
        })

    </script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/slick/slick.min.js"></script>
    <script src="js/slick-custom.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/parallax100/parallax100.js"></script>
    <script>
        Rs.('.parallax100').parallax100();

    </script>
    <!--===============================================================================================-->
    <script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
    <script>
        Rs.('.gallery-lb').each(function() { // the containers for all your galleries
            Rs.(this).magnificPopup({
                delegate: 'a', // the selector for gallery item
                type: 'image',
                gallery: {
                    enabled: true
                },
                mainClass: 'mfp-fade'
            });
        });

    </script>
    <!--===============================================================================================-->
    <script src="vendor/isotope/isotope.pkgd.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/sweetalert/sweetalert.min.js"></script>
    <script>
        Rs.('.js-addwish-b2').on('click', function(e) {
            e.preventDefault();
        });

        Rs.('.js-addwish-b2').each(function() {
            var nameProduct = Rs.(this).parent().parent().find('.js-name-b2').php();
            Rs.(this).on('click', function() {
                swal(nameProduct, "is added to wishlist !", "success");

                Rs.(this).addClass('js-addedwish-b2');
                Rs.(this).off('click');
            });
        });

        Rs.('.js-addwish-detail').each(function() {
            var nameProduct = Rs.(this).parent().parent().parent().find('.js-name-detail').php();

            Rs.(this).on('click', function() {
                swal(nameProduct, "is added to wishlist !", "success");

                Rs.(this).addClass('js-addedwish-detail');
                Rs.(this).off('click');
            });
        });

        /*---------------------------------------------*/

        Rs.('.js-addcart-detail').each(function() {
            var nameProduct = Rs.(this).parent().parent().parent().parent().find('.js-name-detail').php();
            Rs.(this).on('click', function() {
                swal(nameProduct, "is added to cart !", "success");
            });
        });

    </script>
    <!--===============================================================================================-->
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script>
        Rs.('.js-pscroll').each(function() {
            Rs.(this).css('position', 'relative');
            Rs.(this).css('overflow', 'hidden');
            var ps = new PerfectScrollbar(this, {
                wheelSpeed: 1,
                scrollingThreshold: 1000,
                wheelPropagation: false,
            });

            Rs.(window).on('resize', function() {
                ps.update();
            })
        });

    </script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

    </body>
</html>