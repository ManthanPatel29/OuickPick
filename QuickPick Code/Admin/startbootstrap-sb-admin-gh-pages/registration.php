<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form" action="signup.php">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="telephone"><i class="zmdi zmdi-phone"></i></label>
                                <input type="phone" name="phone" id="phone" placeholder="Your telephone"/>
                            </div>
							<div class="form-group">
								<label for="Address"><i class="zmdi zmdi-home"></i></label>
								<input type="Address" name="address" id="address" placeholder="Your Address"/>
							</div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
							<?php
								if(isset($_POST["signup"]))
								{
									$db =mysqli_connect("localhost","root","","quickpick");
									session_start();
									$email=$_POST["email"];
									$name=$_POST["name"];
									$password=$_POST["pass"];
									$phone=$_POST["phone"];
									$address=$_POST["address"];

									$sql = "SELECT Email_ID,Password FROM buyer_master WHERE Email_ID = '$email' and Password = '$password'";
									$result = mysqli_query($db,$sql);

									if($row = mysqli_fetch_assoc($result)) 
									{
									   echo "you are already register!";
									}

									else 
									{
										$sql= "INSERT INTO buyer_master (Email_ID , Name, Password, Telephone_No, Address) VALUES('$email','$name', '$password','$phone','$address')";
										if(mysqli_query($db,$sql))
										{
											 $_SESSION['signup']=$email;
											header("location:login.php");
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
        </section>

       

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>