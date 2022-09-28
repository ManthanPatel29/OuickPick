<?php
   include 'connection.php';
   session_start();
   if(isset($_SESSION['login']))
   {
       $user_check = $_SESSION['login'];
   
   $sql = "select * from buyer_master where Email_ID = '$user_check' ";
   $result = mysqli_query($connect,$sql);

   $row =mysqli_fetch_assoc($result);
   
   $login_session = $row['Name'];
   
   
   }
	  
?>