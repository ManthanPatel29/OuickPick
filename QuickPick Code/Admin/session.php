<?php
   include '../buyer/connection.php';
   session_start();
   if(isset($_SESSION['adminlogin']))
   {
       $user_check = $_SESSION['adminlogin'];
   
   $sql = "select Name from admin_master where Admin_ID = '$user_check' ";
   $result = mysqli_query($connect,$sql);

   $row =mysqli_fetch_assoc($result);
   
   $login_session = $row['Name'];
   
   }
	  
?>