<?php
session_start();
if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('login.php','_self')</script>";

}
else{
    
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
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">View Patients</li>
                </ol>
        

<div class="row col-md-10"><!-- row 2 begin -->
    <div class="col-md-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
           
                   
                   <form method="post" action="" class="navbar-form"><!-- navbar-form Begin -->
                       
                       <div class="input-group"><!-- input-group Begin -->
                           
                           <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                           
                           <span class="input-group-btn"><!-- input-group-btn Begin -->
                           
                           <Button type="submit" name="search" class="btn btn-primary"><!-- btn btn-primary Begin -->Search Patients
                               
                               <i class="fa fa-search"></i>
                               
                           </button><!-- btn btn-primary Finish -->
                           
                           </span><!-- input-group-btn Finish -->
                           
                       </div><!-- input-group Finish -->
                       
                   </form><!-- navbar-form Finish -->
                   
           <br>   
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> No </th>
                                <th> First Name </th>
                                <th> Last Name </th>
                                <th> Age </th>
                                <th> Gender </th>
                                <th> Phone No </th>
                                <th> Registration Date </th>
                                <th> City </th>
                                <th> Next To Kin </th>
                                <th>Delete</th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
          
                                $i=0;
                                if(isset($_POST['search'])){
    
                                $user_query = $_POST['user_query'];
                                 $get_pro = "select * from patient where FirstName like '%$user_query%'";
                                }else{
                                     $get_pro = "select * from patient";     
                                }
                            
                               
                                
                                $run_pro = mysqli_query($con,$get_pro);
          
                                while($row_pro=mysqli_fetch_array($run_pro)){
                                    
                                    $p_id = $row_pro['Id'];
                                    
                                    $FirstName = $row_pro['FirstName'];
                                    
                                    $LastName = $row_pro['LastName'];
                                    
                                    $Age = $row_pro['Age'];
                                    
                                    $Gender = $row_pro['Gender'];
                                    
                                    $PhoneNumber = $row_pro['PhoneNumber'];
                                    $RegistrationDate = $row_pro['RegistrationDate'];
                                    $City = $row_pro['City']; 
                                    $nextkin = $row_pro['nextkin']; 
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $FirstName; ?> </td>
                               <td> <?php echo $LastName; ?> </td>
                               
                                <td> <?php echo $Age; ?> </td>
                                <td> <?php echo $Gender ?> </td>
                                <td> <?php echo $PhoneNumber ?> </td>
                                <td> <?php echo $RegistrationDate ?> </td>
                                <td> <?php echo $City ?> </td>
                                <td> <?php echo $nextkin ?> </td>
                                <td> 
                                     
                                      <form method="post" action="deletepatient.php" ><!-- navbar-form Begin -->
                       
                            
                           <input type="hidden" name="id" value="<?php echo $p_id; ?>"/>
                           <Button type="submit" name="delete" class="btn btn-primary"><!-- btn btn-primary Begin -->Delete
                               
                               
                               
                           </button><!-- btn btn-primary Finish -->
                           </form><!-- navbar-form Finish -->
                                     
                                </td>
                               
                            </tr><!-- tr finish -->
                            
                            <?php } ?>
                            
                        </tbody><!-- tbody finish -->
                        
                    </table><!-- table table-striped table-bordered table-hover finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->
</div>
</div>
<?php
}
?>