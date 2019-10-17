<?php 
session_start();              
        if(isset($_SESSION['admin_email'])){
                       
               echo "<script>window.open('index.php','_self')</script>";
                       
           }
           elseif(isset($_SESSION['admin'])){
               echo "<script>window.open('../checkIn.php','_self')</script>";
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
<style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   height:50px;
   background-color: #d4d1cf;
   color: black;
   text-align: center;
}
</style>
  <title>Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body >
     <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="#">WSDA </a>

  
   

  </nav>

<br><br><br><br>
  <div class="container" align="center">
      
   <div class="col-md-6 " >
    
      <br>
        <form action="login.php" method="post">
          <div class="form-group">
            
              <input type="email" name="email"  class="form-control" placeholder="Email address" required="required" >
              
            
          </div>
          <div class="form-group">
            
              <input type="password"  name="password" class="form-control" placeholder="Password" required="required">
            
          </div>
          <button type="submit" class="btn btn-primary btn-block" name="admin_login">LOGIN
          </button>
        </form>
        
     </div> 
     
  </div>
        <div class="footer">
       
          <div class=" text-center" align="center">
            <span>Copyright © WSDA 2019</span>
          
        </div>
      </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
<?php
if(isset($_POST['admin_login'])){
  $email=$_POST['email'];
  $password=$_POST['password'];
  
   $query = "select * from admin where email='$email' AND password='$password'";
    
    $run_query = mysqli_query($con,$query);
    $check= mysqli_num_rows($run_query);
    
    if($check){
        if($email=='admin1@admin.com' and $password=='admin1'){
         $_SESSION['admin']=$email;
         echo "<script>window.open('../checkIn.php','_self')</script>";   
        }
        else
        {
         $_SESSION['admin_email']=$email;
         echo "<script>window.open('index.php','_self')</script>";   
        }
    }
    
    else{
      $error="Email or password wrong";
      
    }
  
}
}
?>

