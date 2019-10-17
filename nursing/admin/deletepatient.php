<?php
session_start();
if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('login.php','_self')</script>";

}
else{
include('include/db.php');
?>

<?php 

    if(isset($_POST['delete'])){
        
        $delete_id = $_POST['id'];
        
        $delete_pro = "delete from patient where Id='$delete_id'";
        
        $run_delete = mysqli_query($con,$delete_pro);
        
        if($run_delete){
            
            echo "<script>alert('Patient  has been Deleted')</script>";
            
            echo "<script>window.open('viewpatient.php','_self')</script>";
            
        }
        
    }

?>

<?php } ?>