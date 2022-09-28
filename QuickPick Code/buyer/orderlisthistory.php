<?php  
		include 'session.php';
		
		$ord="Select * from order_list_master where Email_ID='$user_check' ";
		$ordresult = mysqli_query($connect,$ord);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Orderlist History</title>
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
	<link href="../buyer/profile/css/bootstrap.min.css" rel="stylesheet" >
<!--	<link href="../buyer/profile/css/style.css" rel="stylesheet" id="bootstrap-css">-->
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
                <a href="#" class="logo">
                    <img src="images\icons\logo2.png" alt="IMG-LOGO">
                </a>

                <!-- Menu desktop -->
                <div class="menu-desktop">
                    <ul class="main-menu">
                        <li>
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
						
						 <li >
                            <a href="profiletest.php">profile</a>
                        </li>

                        <li>
                            <a href="orderhistory.php">order</a>
                        </li>

                        <li class="active-menu" >
                            <a href="orderlisthistory.php">Orderlist</a>
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
   <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h6>   <br />  </h6>
                        </div>
                    </div>
                </div>
	   			<h6>	<br />	</h6>
                <div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r-38 m-lr-0-xl">
						<div class="wrap-shopping-cart">
							<table border="0" class="table-shopping-cart" width="100%">
							<?php
								if(mysqli_num_rows($ordresult) > 0)
								{
							?>
								<tr>
										 	<th class="column-3">
												<p> </p>
											</th>
												
											<th class="column-3">
												<p>Product Name</p>
											</th>	
											<th class="column-3">
												<p>Quantity</p>
											</th>
											
											<th class="column-3">
												<p>Seller</p>
											</th>
												
											<th class="column-3">
												<p>Total</p>
											</th>
												
											<th class="column-2">
												<p>Date</p>
											</th>
											<th class="column-3">
												<p>Delivery Method</p>
											</th>
												
											<th class="column-7">
												<p>Seller Adress</p>
											</th>
								</tr>
								
								<?php
									while($order = mysqli_fetch_assoc($ordresult))
									{	
										$pid = $order["P_ID"];
										$seller = $order["Seller_ID"];
										$oid= $order['order_list_id'];
										$qty = $order['Quantity'];
										$total = $order['Total'];
										$string = $order['delivery'];
										$date = $order['date'];
										$seller="Select * from seller_master where Seller_ID='$seller' ";
		 								$sellerresult = mysqli_query($connect,$seller);
										if( mysqli_num_rows($sellerresult) > 0)
										{	
											while($sel = mysqli_fetch_assoc($sellerresult))
											{
											$pro="Select * from Product_master where P_ID='$pid' ";
											$proresult = mysqli_query($connect,$pro);
											if( mysqli_num_rows($proresult) > 0)
											{	
												while($product = mysqli_fetch_assoc($proresult))
												{
								?>
										

										<tr>
											<td class="column-3">
												<div class="how-itemcart1" >
												<img src="<?php echo $product["img"]; ?>" alt="image" >
												</div>
											</td>
											<td class="column-3">
												<p><?php echo $product["P_Name"]; ?></p>
											</td>
												
											<td class="column-3">
													<p><?php echo $qty; ?></p>
											</td>
												
											<td class="column-3">
													<p><?php echo $sel['Name']; ?></p>
											</td>
											<td class="column-3">
													<p><?php echo $total; ?></p>
											</td>
											
											<td class="column-7">
													<p><?php echo $date; ?></p>
											</td>
												
											<td class="column-3">
													<p><?php echo $string; ?></p>
											</td>
											<?php 
												if($string == "Pickup from shop") 
												{ 
											?>
											<td class="column-7">
													<p><?php echo $sel['Shop_No']; ?>,
											
													<?php echo $sel['Shop_name']; ?>,
											
													<?php echo $sel['Near_by']; ?></p>
											</td>	
											<?php 
												}
												else
												{	
											?>
													<td class="column-7">
														<p><b> N/A </b></p>
													</td>

											<?php	
												}
											?>
										</tr>

										
								<?php
											}
										}		
										}
									}
								}
							}
									else
									{
										?>
									<h3 font="verdana" align="center" ><b>NO Order History</b></h3>
									<h6 ><br /></h6>
										<?php
									}
								?>
									
									</table>
									</div>
								</div>
							</div>
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
	<script src="../buyer/profile/js/bootstrap.min.js"></script>
	<script src="../buyer/profile/js/jquery.min.js"></script>
    </body>
</html>