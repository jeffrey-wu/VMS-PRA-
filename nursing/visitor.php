<?php
session_start();
if(isset($_SESSION['vemail'])){
    header("location:contractor.php");
}
?>
<?php 
include('admin/include/db.php');
?>
<?php
if(isset($_POST['submit_login'])){
    $patientfname=$_POST['patientfname'];
    $patientlname=$_POST['patientlname'];
  $email=$_POST['email'];
  $name=$_POST['name'];
  $password=$_POST['password'];
  $query = "select * from patient where FirstName ='$patientfname' AND LastName='$patientlname'";
 
    
    $run_query = mysqli_query($con,$query);
     $row_record=mysqli_fetch_array($run_query);
    $check= mysqli_num_rows($run_query);
    $encode=base64_encode($email);
    $filename='temp/'.$encode.'.png';
    if($check){
        $p_id = $row_record['Id'];
         $insert_visitor = "insert into visitor (v_name,email, password,Id) values ('$name','$email','$password','$p_id')";
    
        $run_visitor = mysqli_query($con,$insert_visitor);
        if($run_visitor){
        
        
        
         include "phpqrcode/qrlib.php";    
        $email=base64_encode($email);
        QRcode::png($email,$filename,QR_ECLEVEL_L,6); 
        
//         echo "<script>

//     window.onload = function(){
//          window.open('$filename', '_blank') 
//     }
// </script>";
        
    }
      
        
    }else{
      echo "<script>alert('patient not found')</script>";
      
    }
  
}

?>
<!DOCTYPE html>
    <head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>WSDA</title>
    <meta name="description" content="Medical is a template for Medical and Health  websites. The theme is built for doctors, hospitals, health clinics. It has purpose oriented design, responsive layout">
    <meta name="keywords" content="clinic, dentist, doctor, paediatrics, health, hospital, insurance, medical, medicine, patient, pharmacy, rehabilitation, service, surgeon, treatment">
    <meta name="author" content="themesparagon.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Favicon and touch icons  -->
    <link rel="shortcut icon" href="assets/icon/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/icon/apple-touch-icon-158-precomposed.png">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="header-style-1 menu-has-search no-sidebar no-padding-content">

<div id="wrapper" class="animsition">
    <div id="page" class="clearfix">
        <!-- Site Header Wrap -->
        <?php include('mainNavbar.php');?>
        <!-- /#site-header-wrap -->

<br>
        <!-- / Slider -->

        <!-- Main Content -->
        <main id="main-content">
            <div id="content-wrap">
                <div id="site-content" class="site-content clearfix">
                    <div id="inner-content" class="inner-content-wrap">
                        <div class="page-content">



                            <!-- Request 1 -->
                            <div class="row-request-1">
                                <div class="wprt-container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="wprt-spacer clearfix" data-desktop="80" data-mobi="60" data-smobi="60"></div>
                                        </div><!-- /.col-md-12 -->

                                        <div class="col-md-3">
                                            
                                            <?php
                                            if($run_visitor){
                                                echo "<img src=$filename href='_blank'>";
                                            }
                                            ?>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="wprt-content-box request-form-1 bg-white">
                                                <div class="inner">
                                                    <div class="wprt-headings clearfix text-left">
                                                        <h2 class="heading font-size-18">Visitor Registration</h2>
                                                    
                                                    </div><!-- /.wprt-headings -->

                                                    <div class="wprt-spacer clearfix" data-desktop="30" data-mobi="30" data-smobi="30"></div>
                                                    <form action="visitor.php" method="post">
                                                    <span class="wpcf7-form-control-wrap">
                                                        <input type="search" tabindex="1"  class="wpcf7-form-control" name="patientfname" placeholder="Enter Patient  First Name" required>
                                                    </span>
                                                    <span class="wpcf7-form-control-wrap">
                                                        <input type="search" tabindex="1"  class="wpcf7-form-control" name="patientlname" placeholder="Enter Patient  Last Name" required>
                                                    </span>
                                                    <div class="wprt-contact-form-1">
                                                    <span>
                                                        <input type="text" tabindex="1" id="name" name="name" placeholder="Enter Your Name" required>
                                                    </span>
                                                    
                                                    <div class="wprt-contact-form-1">
                                                    <span   class="name">
                                                        <input type="email" tabindex="1" id="name" name="email" placeholder="Enter Your Email" required>
                                                    </span>
                                                    
                                                    <span class="password">
                                                        <input type="Password" tabindex="2" id="password" name="password" placeholder="Enter Your Password" required>
                                                    </span>

                                                           

                                                            <div class="wrap-submit">
                                                                <input type="submit" value="Register NOW" id="submit" name="submit_login">
                                            
                                                            </div>

                                                        </div>
                                                    </form>
                                                    
                                                </div>
                                            </div><!-- /.wprt-content-box -->
                                        </div><!-- /.col-md-6 -->


                                        <div class="col-md-12">
                                            <div class="wprt-spacer clearfix" data-desktop="80" data-mobi="60" data-smobi="60"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->
                                </div><!-- /.container -->
                            </div><!-- /.row-request-1 -->
                        </div><!-- /.page-content -->
                    </div><!-- /#inner-content -->
                </div><!-- /#site-content -->
            </div><!-- /#content-wrap -->
        </main> <!-- /#main-content -->

        <!-- Footer -->
        <footer id="footer">
            <div id="footer-widgets" class="wprt-container">
                <div class="wprt-row gutter-30">
                    <div class="span_1_of_3 col">
                        <div class="widget widget_text">
                            <div class="textwidget">
                                <img src="assets/img/logo-footer.png"  id="footer-logo" alt="logo">
                            </div>
                        </div>

                        <div class="widget widget_information">
                            <ul class="clearfix">
                                <li class="phone">
                                    <i class="fa fa-phone"></i>
                                    <span>Call Us :  +1 718-955-2838</span>
                                </li>
                                <li class="address">
                                    <i class="fa fa-map-marker"></i>
                                    <span>123 N Randolph street, Virginia, United States</span>
                                </li>
                                <li class="email">
                                    <i class="fa fa-envelope-o"></i>
                                    <span>Contact@construction.com</span>
                                </li>
                            </ul>
                        </div>

                        <div class="widget widget_socials">
                            <div class="socials clearfix">
                                <div class="icon active">
                                    <a target="_blank" href="#">
                                        <i class="fa fa-twitter"></i></a>
                                </div>

                                <div class="icon">
                                    <a target="_blank" href="#">
                                        <i class="fa fa-facebook"></i></a>
                                </div>

                                <div class="icon">
                                    <a target="_blank" href="#"><i class="fa fa-linkedin"></i></a>
                                </div>

                                <div class="icon">
                                    <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                </div>

                                <div class="icon">
                                    <a target="_blank" href="#">
                                        <i class="fa fa-skype"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.span_1_of_3 -->

                   <!-- <div class="span_1_of_3 col">
                        <div class="widget widget_links">
                            <h2 class="widget-title"><span>navigation</span></h2>
                            <ul class="wprt-links clearfix col2">
                                <li><a href="#">Appointment </a></li>
                                <li><a href="#">Other Specialist Staff</a></li>
                                <li><a href="#">Patient FAQs</a></li>
                                <li><a href="#">Healthy Eating</a></li>
                                <li><a href="#">Our vision and values</a></li>
                                <li><a href="#">Why Choose Us</a></li>
                                <li><a href="#">Physiotherapists</a></li>
                                <li><a href="#">Find a Doctor</a></li>
                                <li><a href="#">Volunteer roles</a></li>
                                <li><a href="#">Health Topics</a></li>
                            </ul>
                        </div>
                    </div><!-- /.span_1_of_3 -->

                   <!-- <div class="span_1_of_3 col">
                        <div class="widget widget_recent_news">
                            <h2 class="widget-title"><span>Recent Posts</span></h2>

                            <ul class="recent-news clearfix">
                                <li class="clearfix">
                                    <div class="thumb">
                                        <img src="assets/img/news/1-80x80.jpg" alt="image">
                                    </div>

                                    <div class="texts">
                                        <h3><a href="#">Why I finally tried therapy and how it changed my life</a></h3>
                                        <span class="post-date">
                                    <span class="entry-date">October 16, 2016</span>
                                </span>
                                    </div>
                                </li>

                                <li class="clearfix">
                                    <div class="thumb">
                                        <img src="assets/img/news/2-80x80.jpg" alt="image">
                                    </div>

                                    <div class="texts">
                                        <h3><a href="#">Patient Forum – ‘The Joint School Patient Experience’</a></h3>
                                        <span class="post-date">
                                    <span class="entry-date">August 16, 2016</span>
                                </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div><!-- /.span_1_of_3 -->
                </div>
            </div><!-- /#footer-widgets -->
        </footer><!-- /#footer -->

        <!-- Bottom -->
        <div id="bottom" class="clearfix style-1">
            <div id="bottom-bar-inner" class="wprt-container">
                <div class="bottom-bar-inner-wrap">
                    <div class="bottom-bar-content">
                        <div id="copyright">
                            &copy; 2018 WSDA, All rights reserved
                        </div><!-- /#copyright -->
                    </div><!-- /.bottom-bar-content -->

                    <div class="bottom-bar-menu">
                        <ul class="bottom-nav">
                            <li class="menu-item"><a href="#">Home</a></li>
                            <li class="menu-item"><a href="#">About</a></li>
                            <li class="menu-item"><a href="#">Contact</a></li>
                        </ul>
                    </div><!-- /.bottom-bar-menu -->
                </div>
            </div>
        </div><!-- /#bottom -->
    </div><!-- /#page -->
</div><!-- /#wrapper -->

<a id="scroll-top"></a>

<!-- Javascript -->
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/plugins.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/countTo.js"></script>
<script type="text/javascript" src="assets/js/validate.js"></script>
<script type="text/javascript" src="assets/js/shortcodes.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>

<!-- Revolution Slider -->
<script type="text/javascript" src="includes/rev-slider/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="includes/rev-slider/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="assets/js/rev-slider.js"></script>
<!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->
<script type="text/javascript" src="includes/rev-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="includes/rev-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="includes/rev-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="includes/rev-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="includes/rev-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="includes/rev-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="includes/rev-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="includes/rev-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="includes/rev-slider/js/extensions/revolution.extension.video.min.js"></script>

</body>

<!-- Mirrored from xincomblog.com/html5-templates/medical/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Oct 2019 13:05:29 GMT -->
</html>




