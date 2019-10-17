<?php
session_start();

include('include/db.php');
?>

<?php 

    if(isset($_POST['delete'])){
        
        $delete_id = $_POST['id'];
        
        
        $delete_pro = "delete from contractor where c_id='$delete_id'";
        
        $run_delete = mysqli_query($con,$delete_pro);
        
        if($run_delete){
            
            echo "<script>alert('Contractor  has been Deleted')</script>";
            
            echo "<script>window.open('viewcontractor.php','_self')</script>";
            
        }
        
    }

?>
