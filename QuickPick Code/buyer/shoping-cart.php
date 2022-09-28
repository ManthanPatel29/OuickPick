<!DOCTYPE html>
<html lang="en">
<head>
	<title>Shoping Cart</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
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
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
	 	
<!-- Header -->
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

    <?php
        include 'connection.php';
        if(isset($_POST["addtocart"]))
        {
            if(isset($_SESSION["shoping_cart"]))
            {
                $item_array_id = array_column($_SESSION["shoping_cart"],"item_id");
                if(!in_array($_GET["id"],$item_array_id))
				{
					$count = count($_SESSION["shoping_cart"]);
					$item_array=array(
                    'item_id'  	=>  $_GET['id'],
                    'Name'  	=>  $_POST['hidden_name'],
                    'price' 	=>  $_POST['hidden_price'],
                    'img'  		=>  $_POST['hidden_img'],
					'quantity'  =>  $_POST['hidden_qut']
                	);
					$_SESSION["shoping_cart"][$count]=$item_array;
				}
				else
				{
					echo "<script> alert ('Item Already Added') </script>";
					
				}
        	}
			else
			{
			   $item_array=array(
                    'item_id'  	=>  $_GET['id'],
                    'Name'  	=>  $_POST['hidden_name'],
                    'price' 	=>  $_POST['hidden_price'],
                    'img'  		=>  $_POST['hidden_img'],
					'quantity'  =>  $_POST['hidden_qut']
                	);
				$_SESSION["shoping_cart"][0]=$item_array;

			}
		}
        if(isset($_GET["action"]))
		{
			if($_GET["action"] == "delete")
			{
				
				foreach($_SESSION["shoping_cart"] as $keys => $values)
				{
					if($values['item_id'] == $_GET['id'])
					{
						unset($_SESSION["shoping_cart"][$keys]);
						echo "<script>alert('Item Removed')</script>";
					}
				}
			}
		}
?>

	
<!-- Shoping Cart -->
	<form class="bg0 p-t-75 p-b-85" action="order.php" method="post">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-1">Product</th>
									<th class="column-2">Name</th>
									<th class="column-3">Price</th>
									<th class="column-4">Quantity</th>
									<th class="column-5">Total</th>
									<th class="column-6"> </th>
								</tr>

								<?php
									$total_price=0.00;
									if(!empty($_SESSION["shoping_cart"]))
									{
										foreach($_SESSION["shoping_cart"] as $keys => $values)
										{
											$id = $values['item_id'];
											$qty = $values['quantity'];
								?>			
								
								<tr class="table_row">
									<td class="column-1">
										<div class="how-itemcart1">
											<img src="<?php echo $values['img']; ?>" alt="IMG">
										</div>
									</td>
									<td class="column-2"><?php echo $values['Name']; ?></td>
									<td class="column-3"><?php echo $values['price']; ?></td>
									<td class="column-4">
										<?php echo $values['quantity']; ?>
									</td>
									<?php $total= floatval($values['quantity'] * (float)$values['price']); ?>
									<td class="column-5"><?php echo number_format((float)$total) ?>
										
									</td>
									<td class="column-6"> <a href="shoping-cart.php?action=delete&id=<?php echo $values['item_id']; ?>"><span class="text-danger">Remove</span></a>
									</td>
								</tr>
								
								<?php
												$total_price= $total_price + floatval($values['quantity'] * (float)$values['price']);
					
											}
								?>
								<div align="right"><label>
									<td class="column-5" align="right" ><b>Total =</b></td>
									<td class="column-6" align="right" ><b>Rs.<?php echo number_format((float)$total_price,2); ?> </b></td></label>
								</div>
								<?php
									}
								?>
								</table>
							
								<input type="hidden" name="hidden_id" value="<?php echo $id; ?> ">
								<input type="hidden" name="hidden_total" value="<?php echo $total; ?> ">
								<input type="hidden" name="hidden_qunty" value="<?php echo $qty; ?> ">
								<?php 
									if(!isset($_SESSION["shoping_cart"]))
            						{
								?>
								<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
									
									<input type="submit" class="flex-c-m stext-101 cl2 size-119 bg1 bor13 p-lr-15 trans-04 pointer m-tb-10" name="orderlist" value="Add To Orderlist" disabled>
								
									
									<input  class="flex-c-m stext-101 cl2 size-119 bg1 bor13 p-lr-15 trans-04 pointer m-tb-10" name="placeorder" type="submit" value="Place Order" disabled>
								</div>
							<?php
									}
									else
									{
							?>
								<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
									
									<input type="submit" class="flex-c-m stext-101 cl2 size-119 bg1 bor13 p-lr-15 trans-04 pointer m-tb-10" name="orderlist" value="Add To Orderlist" >
								
									
									<input  class="flex-c-m stext-101 cl2 size-119 bg1 bor13 p-lr-15 trans-04 pointer m-tb-10" name="placeorder" type="submit" value="Place Order">
								</div>
							<?php
									}
							
							?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
		
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
		Rs.(".js-select2").each(function(){
			Rs.(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: Rs.(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		Rs.('.js-pscroll').each(function(){
			Rs.(this).css('position','relative');
			Rs.(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			Rs.(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>