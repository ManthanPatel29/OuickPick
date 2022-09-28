<?php
   include '../buyer/connection.php';
   session_start();
   if(isset($_SESSION['sellerlogin']))
   {
       $user_check = $_SESSION['sellerlogin'];
   
   $sql = "select Name from seller_master where Seller_ID = '$user_check' ";
   $result = mysqli_query($connect,$sql);

   $row =mysqli_fetch_assoc($result);
   
   $login_session = $row['Name'];
   
   }
	  
?>