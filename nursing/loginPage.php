<?php
session_start();
if(isset($_SESSION['id'])){
    
}

if (isset($_REQUEST['submit-login'])){
    $email = $_REQUEST['email'];
    $pass= $_REQUEST['password'];
    $cat=$_REQUEST['category'];
  
    require_once('admin/include/db.php');
    if(!empty($_REQUEST['qrcode'])){
    if(isset( $_REQUEST['qrcode'])!=="" and $cat=='contactor'){
         $qrcode=$_REQUEST['qrcode'];
        $qrcode=base64_decode($qrcode);
        
         $sql1 ="select * from contractor where c_email='$qrcode'";
        $run1 =mysqli_query($con,$sql1);
        $row1 = mysqli_num_rows($run1);
         if ($row1 == 0){
        ?>
        <script>
            alert('User is Not Founded!');
            window.open('login.php','_self');
        </script>
        <?php
    }
    else {
        $data = mysqli_fetch_assoc($run1);
        $cid = $data['c_id'];
        $_SESSION['id']=$cid;
        header('location:contractor.php');
    }
    }
    }
    
    
    if(!empty($_REQUEST['qrcode'])){
    if(isset($_REQUEST['qrcode']) and $cat=='visitor'){
         $qrcode=$_REQUEST['qrcode'];
        $qrcode=base64_decode($qrcode);
        
         $sql1 ="select * from visitor where email='$qrcode'";
        $run1 =mysqli_query($con,$sql1);
        $row1 = mysqli_num_rows($run1);
         if ($row1<1){
        ?>
        <script>
            alert('Sorry! User is not Founded');
            window.open('login.php','_self');
        </script>
        <?php
    }
    else {
        $data = mysqli_fetch_assoc($run1);
        $cid = $data['v_id'];
        $_SESSION['id']=$cid;
        header('location:visitorhome.php');
    }
    }
    }
    
     if(isset($_REQUEST['email']) and isset($_REQUEST['password']) and $cat=='contactor'){
        
        
        
         $sql1  ="select * from contractor where c_email='$email' AND 	c_password = '$pass'";
        $run1 =mysqli_query($con,$sql1);
        $row1 = mysqli_num_rows($run1);
         if ($row1==0){
        ?>
        <script>
            alert('Please Enter Correct Details');
            window.open('login.php','_self');
        </script>
        <?php
    }
    else {
        $data = mysqli_fetch_assoc($run1);
        $cid = $data['c_id'];
        $type=$data['type'];
        $_SESSION['id']=$cid;
        $_SESSION['type']=$type;
        header('location:contractor.php');
    }
    }
    
     if(isset($_REQUEST['email']) and isset($_REQUEST['password']) and $cat=='visitor'){
        
        
        
        $sql11  ="select * from visitor where email='$email' AND password = '$pass'";
        $run11 =mysqli_query($con,$sql11);
        $row11 = mysqli_num_rows($run11);
         if ($row11==0){
             ?>
             <script>
            alert('Failed! You Are Not Registered Visitor');
            window.open('login.php','_self');
        </script>
             <?php
         }
         else{
             $data1 = mysqli_fetch_assoc($run11);
             $cid = $data1['v_id'];
             $type=$data1['type'];
             $_SESSION['id']=$cid;
              $_SESSION['typee']=$type;
             header('location:appointment.php');
         }
    }
}
?>