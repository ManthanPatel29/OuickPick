<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login Form</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
       <form method="POST" class="register-form" id="login-form" action="login.php" >
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="email" type="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="password" name="password" type="password" placeholder="Password">
          </div>
          <input type="submit" name="login" class="btn btn-primary btn-block" value="login">
        </form>
      
    <?php
							if(isset($_POST["login"]))
							{
								include '../buyer/connection.php';
								session_start();
								$email = mysqli_real_escape_string($connect,$_POST['email']);
								$password = mysqli_real_escape_string($connect,$_POST['password']); 

								$sql = "SELECT Admin_ID,Password FROM Admin_master WHERE Admin_ID = '$email' and Password = '$password'";
								$result = mysqli_query($connect,$sql);
								$row = mysqli_fetch_assoc($result);

								if(mysqli_num_rows($result) > 0) 
								{
									$_SESSION['adminlogin']=$email;
									header("location:showseller.php");
								}
								else 
								{
									$error = "Your Login Name or Password is invalid";
									echo $error;
								}
								mysqli_close($connect); 
							}
    ?>
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
