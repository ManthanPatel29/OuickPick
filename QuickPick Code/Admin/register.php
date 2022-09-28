<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Add Seller</title>
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

                    if(!isset($_SESSION['adminlogin']))
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
          <a class="nav-link" href="register.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Add Seller</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="showseller.php">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Show Seller</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="showbuyer.php">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Show Buyer</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
         <a class="nav-link" href="showproduct.php">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Show Product</span>
         </a>
        </li>
      </ul>
    </div>
</nav>
  <div class="container">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header"><h5 style="font-family:Trebuchet MS"><center>Register an Seller</center></h5></div>
      <div class="card-body">
        <form action="register.php" method="post">
          <div class="form-group">
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter Seller Name" name="name">
          </div>
          <div class="form-group">
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter E-mail" name="email">
          </div>
          <div class="form-group">
            <input class="form-control" id="exampleInputEmail1" type="tel" aria-describedby="emailHelp" placeholder="Enter Phone No" name="phone">
          </div>
          <div class="form-group">
                <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password" name="pass">
          </div>
            <label>Shop Address</label>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Shop no" name="shopno">
                <input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Shop Name" name="shopname">
              </div>
                <div class="col-md-6">
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Near by" name="nearby">
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Pincode" name="pin" >    
              </div>
            </div>
          </div>
          <input type="submit" class="btn btn-primary btn-block" value="Register" name="register"  >
            <?php
								if(isset($_POST["register"]))
								{
									include '../buyer/connection.php';
									$email=$_POST["email"];
									$name=$_POST["name"];
									$password=$_POST["pass"];
									$phone=$_POST["phone"];
									$shopno=$_POST["shopno"];
                                    $shopname=$_POST["shopname"];
                                    $near=$_POST["nearby"];
                                    $pin=$_POST["pin"];

									$sql = "SELECT Seller_ID,Password FROM seller_master WHERE Seller_ID = '$email' and Password = '$password'";
									$result = mysqli_query($connect,$sql);

									if($row = mysqli_fetch_assoc($result)) 
									{
									   echo '<script>alert("Seller Already Register")</script>';
									}

									else 
									{
								       $sql= "INSERT INTO seller_master (Seller_ID, Name, Password, Telephone_No, Shop_No, Shop_name, near_by, Pin_code) VALUES('$email', '$name', '$password','$phone','$shopno','$shopname','$near','$pin')";
										if(mysqli_query($connect,$sql))
										{
            ?>
                                            <br /><h5 style="font-family:Trebuchet MS"><strong><center>Seller Added Successfully</center></strong></h5>
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
