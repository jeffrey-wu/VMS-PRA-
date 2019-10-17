<?php
session_start();
if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('login.php','_self')</script>";

}
else{
    ?>
    <?php

    include('include/db.php');
    $sql ="SELECT * FROM changecontractor inner join contractor on changecontractor.con_id=contractor.c_id";
    $result = mysqli_query($con, $sql);

    /*if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "id: in conttractor " . $row["c_id"]. " - ID: in change contactor" . $row["con_id"]. " " . $row["message"]." name  " .$row["c_fname"]. "<br>";
        }
    } else {
        echo "0 results";
    }*/

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
                    <li class="breadcrumb-item active">Contactor's Messages</li>
                </ol>


                <?php
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        ?>

                        <div class="container">
                            <div class="jumbotron">
                                <h4>Hi, I am: <?php echo $row['c_fname'];?></h4>
                                <p>Message: <?php echo $row['message'];?>.</p>
                                <a href="changeConInfo.php?cont_id=<?php echo $row['c_id']?>" class="btn btn-info">Change Now</a>
                            </div>
                        </div>

                        <?php
                    }
                } else {
                    echo "0 results";
                }
                ?>







            </div>
            <!-- /.container-fluid -->

            <!-- Sticky Footer -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright © WSDA 2019</span>
                    </div>
                </div>
            </footer>

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

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

    </body>

    </html>

    <?php

    if(isset($_POST['submit'])){

        $FirstName = $_POST['FirstName'];
        $LastName = $_POST['LastName'];
        $Age = $_POST['Age'];
        $Gender = $_POST['Gender'];
        $PhoneNumber = $_POST['PhoneNumber'];

        $City = $_POST['City'];
        $Disease = $_POST['Disease'];


        $insert_patient = "insert into patient (FirstName, LastName,Age, Gender,PhoneNumber, RegistrationDate, City, Disease) values ('$FirstName','$LastName','$Age','$Gender','$PhoneNumber',NOW(),'$City','$Disease')";

        $run_patient = mysqli_query($con,$insert_patient);

        if($run_patient){

            echo "<script>alert('Patent has been inserted sucessfully')</script>";


        }

    }

    ?>

    <?php
}
?>