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
        
        $delete_pro = "delete from visitor where v_id='$delete_id'";
        
        $run_delete = mysqli_query($con,$delete_pro);
        
        if($run_delete){
            
            echo "<script>alert('visitor  has been Deleted')</script>";
            
            echo "<script>window.open('viewvisitor.php','_self')</script>";
            
        }
        
    }

?>

<?php } ?>