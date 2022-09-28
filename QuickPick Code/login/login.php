<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images\PicsArt_01-07-01.09.19.png" alt="sing up image"></figure>
                        <a href="signup.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign In</h2>
                        <form method="POST" class="register-form" id="login-form" action="login.php" >
                            <div class="form-group">
                                <label for="E-mail"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your E-mail"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
							</div>
                        </form>
						
						<?php
							if(isset($_POST["signin"]))
							{
								include '../buyer/connection.php';
								session_start();
								$email = mysqli_real_escape_string($connect,$_POST['email']);
								$password = mysqli_real_escape_string($connect,$_POST['password']); 

								$sql = "SELECT Email_ID,Password FROM buyer_master WHERE Email_ID = '$email' and Password = '$password'";
								$result = mysqli_query($connect,$sql);
								$row = mysqli_fetch_assoc($result);

								if(mysqli_num_rows($result) > 0) 
								{
									$_SESSION['login']=$email;
									header("location:../buyer/Quickpick.php");
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
        </section>

        <!-- Sing in  Form -->
<!--
    <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
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
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/90009056-mature-woman-walking-with-a-young-man-holding-an-empty-shopping-basket-isolated-on-white-background.jpg" alt="sing up image"></figure>
                        <a href="Sign%20In.html" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
-->

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>


	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>