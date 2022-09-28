<?php
	$db =mysqli_connect("localhost","root","","quickpick");
	session_start();
   // $email=$password="";
	//$count=0;
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
			 $_SESSION['signin']=$email;
			header("location:../buyer/Quickpick.php");
		}
		else
		{
			echo "Error:" .$sql. "<br />". mysqli_error($db);
		}
	}
	mysqli_close ($db);
?>