<?php
session_start();
if(!isset($_SESSION['id'])){
    header("location:login.php");
}

$fname= $_REQUEST['c_fname'];
$lname= $_REQUEST['c_lname'];
$email= $_REQUEST['c_email'];
$password= $_REQUEST['c_password'];
$jtype= $_REQUEST['c_job_type'];
$hdate= $_REQUEST['c_hiring_date'];
$htime= $_REQUEST['c_hiring_time'];
$salary= $_REQUEST['salary'];



$user = $_REQUEST['user'];
require_once('include/db.php');
$sql ="UPDATE `contractor` SET `c_fname`='$fname',`c_lname`='$lname',`c_email`='$email',`c_password`='$password',
`c_job_type`='$jtype',`c_hiring_date`='$hdate',`c_hiring_time`='$htime',`salary`='$salary'";

$res=mysqli_query($con,$sql);
if ($res){
    ?>
    <script>
        alert("Contractor's Data Has Been Updated Sucessfully.");
        window.location.href = "index.php";
    </script>
    <?php
}

?>