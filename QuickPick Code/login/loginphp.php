<?php
        include '../buyer/connection.php';
       // include '../session.php';
?>

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
<body class="animsition">

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
                        <form method="POST" class="register-form" id="login-form">
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
							<div>
                               <?php
                                    //$email=$password="";
                                    //$count=0;
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
                                 ?>  
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
</div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>


	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>