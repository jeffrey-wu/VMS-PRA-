<?php
$user=$_REQUEST['user'];
$name= $_REQUEST['name'];
$email= $_REQUEST['email'];
$pass= $_REQUEST['password'];
 $encode=base64_encode($email);
$filename='temp/'.$encode.'.png';
require_once('admin/include/db.php');
$sql ="UPDATE `visitor` SET `v_name`='$name',`email`='$email',`password`='$pass' WHERE v_id='$user'";
$con=mysqli_query($con,$sql);
if($con){
     include "phpqrcode/qrlib.php";    
        $email=base64_encode($email);
        QRcode::png($email,$filename,QR_ECLEVEL_L,6); 
    ?>
    <script>
        alert("Visitor's Data Has Been Updated Sucessfully.");
        window.location.href = "visitorhome.php";
    </script>
    <?php
}
else{
    ?>
    <script>
        alert("Failed to Update.");
    </script>
    <?php
}

?>