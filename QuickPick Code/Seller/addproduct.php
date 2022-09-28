<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Add Product</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg bg-dark">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <?php  
                    include 'session.php';

                    if(!isset($_SESSION['sellerlogin']))
                    {
                	?>
                        <a class="navbar-brand" data-placement="left" href="login.php" class="flex-c-m trans-04 p-lr-25">LogIn

                        </a>  
                	<?php
                    }
                     else
                    {
                    
                	?>
                        <a class="navbar-brand" data-placement="left" href="#" class="flex-c-m trans-04 p-lr-25">
                                <?php   echo $login_session;  ?>
                        </a> 
                        <a class="navbar-brand" data-placement="left" href="logout.php" class="flex-c-m trans-04 p-lr-25">  LogOut
                        </a>
					<?php

						}
      ?>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="addproduct.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Add Product</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
         <a class="nav-link" href="showproduct.php">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Show Product</span>
         </a>
        </li>
		  
		  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
         <a class="nav-link" href="showorder.php">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Show Order</span>
         </a>
        </li>
		  
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
         <a class="nav-link" href="showorderlist.php">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Show Orderlist</span>
         </a>
        </li>
      </ul>
    </div>
</nav>
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Seller</div>
      <div class="card-body">
        <form method="post" action="addproduct.php">
          <div class="form-group">
                <input class="form-control" name="pname" id="exampleInputName" type="text" placeholder=" Enter Product Name">
          </div>
          <div class="form-group">
			  <lable>Detail</lable>
			  <textarea class="form-control" name="detail" id="exampleInputEmail1">
			  </textarea>
          </div>
          <div class="form-group">
            <input class="form-control" name="price" id="exampleInputEmail1" type="text" placeholder="Enter Price">
          </div>
          <div class="form-group">
                <input class="form-control" name="img" id="exampleInputPassword1" type="text" placeholder="Enter Image Path">
          </div>
          <div class="form-group">
			  <lable>Category</lable>
			  <br />
			  	<select name="ctg" class="form-control">
					<?php 
						$category="Select * from category";
						$ctgresult = mysqli_query($connect,$category);
						if( mysqli_num_rows($ctgresult) > 0)
						{	
							while($cid = mysqli_fetch_assoc($ctgresult))
							{ 
								
					?>
					  <option value= "<?php echo $cid['category_id']; ?>"><?php echo $cid['category_name']; ?></option>
					<?php
							}
						}
					?>
				</select>
          </div>
<!--
          <label>Shop Address</label>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Shop no">
                <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Shop Name">
              </div>
                <div class="col-md-6">
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Near by">
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Pincode">    
              </div>
            </div>
          </div>
-->
          <input type="submit" name="register_product" class="btn btn-primary btn-block" value="Register Product">
			
          <?php
								if(isset($_POST["register_product"]))
								{
									include '../buyer/connection.php';
									$pname=$_POST["pname"];
									$detail=$_POST["detail"];
									$price=$_POST["price"];
									$img=$_POST["img"];
                                    $ctg=$_POST["ctg"];

									$sql = "SELECT Seller_ID,P_Name FROM product_master WHERE Seller_ID = '$user_check' and P_Name = '$pname'";
									$result = mysqli_query($connect,$sql);

									if($row = mysqli_fetch_assoc($result)) 
									{
									   echo '<script>alert("Product Already Register")</script>';
									}

									else 
									{
								       $sql= "INSERT INTO product_master(P_Name, Seller_ID, P_Detail, Price, img, category_id) VALUES('$pname', '$user_check', '$detail', '$price', '$img', '$ctg')";
										if(mysqli_query($connect,$sql))
										{
            ?>
                                            <br /><h5 style="font-family:Trebuchet MS"><strong><center>Product Added Successfully</center></strong></h5>
            <?php
										}
										else
										{
											echo "Error:" .$sql. "<br />". mysqli_error($connect);
										}
									}
									mysqli_close ($connect);
								}
							?>
          </form>

      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
