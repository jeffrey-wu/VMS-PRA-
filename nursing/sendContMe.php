<?php
session_start();
$user = $_SESSION['id'];
$messge=$_REQUEST['message'];

require_once ('admin/include/db.php');

$sql="INSERT INTO `changecontractor`(`con_id`, `message`) VALUES ('$user','$messge')";

$run = mysqli_query($con,$sql);
if ($run==TRUE){
    ?>
    <script>
        alert('Your Message has been Sent to Admin, and request will be Entertain Soon');
        window.location.href = "contractor.php";
    </script>
    <?php
}
else{
    echo "Error founde".$run;
}
?>