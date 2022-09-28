<?php
//include 'connection.php';
					include 'session.php';

					if(isset($_POST["order"]))
					{
						$dly=$_POST["delivery"];
						$id=$_POST["h_id"];
						$total=$_POST["h_total"];
						$qty=$_POST["h_qty"];
						
						$sql = "select Seller_ID from product_master where P_ID= '$id' ";
						$res= mysqli_query($connect, $sql); 
						if(mysqli_num_rows($res) > 0)
						{
							while($row = mysqli_fetch_assoc($res))
							{
								$seller = $row["Seller_ID"];
							}
						}

						$sql = "INSERT INTO order_master(Email_ID, Seller_ID, P_ID, Quantity, delivery, date, Total) VALUES ( '$user_check', '$seller' ,'$id', '$qty',  '$dly', curdate(), '$total')";
						if (mysqli_query($connect, $sql)) 
						{
							//session_unset();
							echo '<script>alert("Order are Successfully Placed")</script>';
							unset($_SESSION["shoping_cart"]);
							header("location:product.php");
						} 
						else
						{
							echo "Error:" . $sql . "<br>" . mysqli_error($connect);
						}
						mysqli_close($connect);
					}

				if (isset($_POST["placeorderlist"]) )
				{
						$dly=$_POST["delivery"];
						$time=$_POST["time"];
						$id=$_POST["h_id"];
						$total=$_POST["h_total"];
						$qty=$_POST["h_qty"];

						$sql = "select Seller_ID from product_master where P_ID= '$id' ";
						$res= mysqli_query($connect, $sql); 
						if(mysqli_num_rows($res) > 0)
						{
							while($row = mysqli_fetch_assoc($res))
							{
								$seller = $row["Seller_ID"];
							}
						}


						$sql = "INSERT INTO order_list_master(P_ID, Seller_ID,  Email_ID, Quantity, delivery, date, time, Total) VALUES ('$id', '$seller', '$user_check', '$qty',  '$dly', curdate(), '$time', '$total')";
						if (mysqli_query($connect, $sql)) 
						{
							//session_unset();
							echo '<script>alert("Order are Successfully Placed")</script>';
							unset($_SESSION["shoping_cart"]);
							header("location:product.php");
						} 
						else
						{
							echo "Error:" . $sql . "<br>" . mysqli_error($connect);
						}
						mysqli_close($connect);
					}
					

				?>
