<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg bg-dark">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Start Bootstrap</a>
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
            <i class="fa fa-fw fa-area-chart"></i>
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
      <div class="card-header">Register an Seller</div>
      <div class="card-body">
        <form action="register.php" method="post">
          <div class="form-group">
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter Seller Name" name="name">
          </div>
          <div class="form-group">
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter E-mail" name="email">
          </div>
          <div class="form-group">
            <input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter Phone No" name="phone">
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
									$db =mysqli_connect("localhost","root","","quickpick");
									session_start();
									$email=$_POST["email"];
									$name=$_POST["name"];
									$password=$_POST["pass"];
									$phone=$_POST["phone"];
									$shopno=$_POST["shopno"];
                                    $shopname=$_POST["shopname"];
                                    $near=$_POST["nearby"];
                                    $pin=$_POST["pin"];

									$sql = "SELECT Seller_ID,Password FROM seller_master WHERE Seller_ID = '$email' and Password = '$password'";
									$result = mysqli_query($db,$sql);

									if($row = mysqli_fetch_assoc($result)) 
									{
									   echo "you are already register!";
									}

									else 
									{
								       $sql= "INSERT INTO buyer_master (Seller_ID,Name,Password,Telephone_No,Shop_No,Shop_name,near_by,Pin_code) VALUES('$email','$name', '$password','$phone','$shopno','$shopname','$near','$pin')";
										if(mysqli_query($db,$sql))
										{
                                            echo "seller Added Successfully";
											 $_SESSION['signup']=$email;
											header("location:register.php");
										}
										else
										{
											echo "Error:" .$sql. "<br />". mysqli_error($db);
										}
									}
									mysqli_close ($db);
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
