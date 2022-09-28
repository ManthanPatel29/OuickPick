<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Show Buyer</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <?php  
                    include 'session.php';

                    if(!isset($_SESSION['adminlogin']))
                    {
                	?>
                        <a class="navbar-brand" data-placement="left" href="login.php" class="flex-c-m trans-04 p-lr-25">LogIn

                        </a>  
                	<?php
                    }
                     else
                    {
                    
                	?>
                        <a class="navbar-brand" data-placement="left" href="#" class="flex-c-m trans-04 p-lr-25">
                                <?php   echo $login_session;  ?>
                        </a> 
                        <a class="navbar-brand" data-placement="left" href="logout.php" class="flex-c-m trans-04 p-lr-25">  LogOut
                        </a>
					<?php

						}
      ?>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="addseller.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Add Seller</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="showseller.php">
            <i class="fa fa-fw fa-table"></i>
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
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Example DataTables Card-->
      <div class="card mb-3">
          <?php
          if(isset($user_check))
          {
              ?>
        <div class="card-header">
            <h5 style="font-family:Trebuchet MS">Buyer List</h5>
        </div>
        <div class="card-body">
          <div class="table-responsive">
			  <?php
                    include '../buyer/connection.php';
                    $sql = "SELECT * FROM buyer_master ";
                        $result= mysqli_query($connect,$sql);

                        if(mysqli_num_rows($result) > 0)
                        {
				?>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Email-ID</th>
                  <th>Name</th>
                    <th>Telephone</th>
                  <th>Address</th>
                </tr>
              </thead>
              <tfoot>
              </tfoot>
                
								
				<?php
                            while($row = mysqli_fetch_assoc($result))
                            {
                ?>
              <tbody>
                <tr>
                  <td><?php echo $row["Email_ID"];  ?></td>
                  <td><?php echo $row["Name"];  ?></td>
                    <td><?php echo $row["Telephone_No"];  ?></td>
                  <td><?php echo $row["Address"];  ?></td>
                </tr>
              
              </tbody>
             <?php
                            }
                
                    }
                else
					{
			 ?>
				<font color="black" face="verdana" size="5" align="center">SORRY!No Result Found.</font>
			<?php   
					}
				mysqli_close($connect);
			?>
            </table>
          </div>
        </div>
      </div>
    </div>
    <?php
          }
          else
          {
              echo "PLEASE Login!";
          }
    ?>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
    </footer>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-charts.min.js"></script>
  
</body>

</html>
