<?php 
session_start();              
                   if(!isset($_SESSION['admin_email'])){
                       
                       echo "<script>window.open('login.php','_self')</script>";
                       
                   }
                   else{
                   ?>

<?php

include('include/db.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin  Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.php">WSDA</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
       
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      
    
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          
          <a class="dropdown-item" href="logout.php" >Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <?php include('sidebar.php');?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Visitor</a>
          </li>
          <li class="breadcrumb-item active">History</li>
        </ol>
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Patient Visit History</div>
           
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Visitor Name</th>
                    <th>Patient Name</th>
                    <th>Incoming Time </th>
                    <th>Outgoing Time</th>
                    
                  </tr>
                </thead>
                
                <tbody>
                  <?php 
          
                                $i=0;
                                
                                 $get_record = "select * from patient_visit ";
                                
                               
                                
                                $run_record = mysqli_query($con,$get_record);
          
                                while($row_record=mysqli_fetch_array($run_record)){
                                    
                                    $v_id = $row_record['v_id'];
                                    
                                    $timein = $row_record['incomingtime'];
                                    
                                    $timeout = $row_record['outgoingtime'];
                                    $get_visitor = "select * from visitor where v_id='$v_id'";
                                    $run_visitor = mysqli_query($con,$get_visitor);
                                    $row_visitor=mysqli_fetch_array($run_visitor);
                                    $fname=$row_visitor['v_name'];
                                    
                                    $p_id=$row_visitor['Id'];
                                    $get_patient = "select * from patient where Id='$p_id'";
                                    $run_patient = mysqli_query($con,$get_patient);
                                    $row_patient=mysqli_fetch_array($run_patient);
                                    $pfname=$row_patient['FirstName'];
                                    $plname=$row_patient['LastName'];
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $fname ; ?> </td>
                                
                                <td><?php echo $pfname."  ".$plname; ?></td>
                                <td><?php echo $timein; ?> </td>
                                <td><?php echo $timeout; ?> </td>
                          
                            </tr><!-- tr finish -->
                            
                            <?php } ?>
                            
                </tbody>
              </table>
            </div>
          
          
        </div>

      </div>
      <!-- /.container-fluid -->

     

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

 

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>
<?php
} 
?>