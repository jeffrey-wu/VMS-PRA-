<?php
session_start();
if(isset($_SESSION['id'])){
    header("location:contractor.php");
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
        <?php include('mainNavbar.php');?><!-- /#site-header-wrap -->

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

                                        <div class="col-md-3"></div>

                                        <div class="col-md-6">
                                            <div class="wprt-content-box request-form-1 bg-white">
                                                <div class="inner">
                                                    <div class="wprt-headings clearfix text-left">
                                                        <h2 class="heading font-size-18">User Login</h2>
                                                    </div><!-- /.wprt-headings -->

                                                    <div class="wprt-spacer clearfix" data-desktop="30" data-mobi="30" data-smobi="30"></div>
                                                    <form action="loginPage.php" method="post">


                                                    <div class="wprt-contact-form-1">
                                                    <span   class="name">
                                                        <input type="email" tabindex="1" id="name" name="email" placeholder="Enter Your Email">
                                                    </span>

                                                    <span class="password">
                                                        <input type="Password" tabindex="2" id="password" name="password" placeholder="Enter Your Password">
                                                   <!-- </span>
                                                    <span class="qrcode">
                                                        <input type="text" tabindex="2" id="qrcodeID" name="qrcode" placeholder="Enter Your QR-Code">
                                                    </span>-->
                                                    
                                                    
                                                    <br>

                                                            <label>
                                                                Select Category
                                                            </label>
                                                     <span class="departments">
                                                        <select name="category" onchange="showB('hiddenB',this);showA()" class="wpcf7-form-control">
                                                            <option value="contactor">Contactor</option>
                                                            <option value="visitor">Visitor</option>
                                                        </select>
                                                    </span>

                                                    <div class="wrap-submit">
                                                                <input type="submit" value="Login NOW" id="submit" name="submit-login">
                                                                <a href="visitor.php">
                                                                    <input type="button" id="hiddenB" value="Don't Have an Account" style="display: none;" class="submit wpcf7-form-control wpcf7-submit" name="submit">
                                                                </a>
                                                    </div>
                                                        

                                                        </div>
                                                    </form>
                                                    <script>
                                                        function showB(divId,element) {
                                                            document.getElementById(divId).style.display = element.value == 'visitor' ? 'inline-block' : 'none';
                                                        }
                                                        
                                                        /*function showA() {
                                                            var x = document.getElementById("qrcodeID");
                                                                    if (x.style.display === "none") {
                                                                    x.style.display = "block";
                                                                    }else {
                                                                        x.style.display = "none";
                                                                    }
                                                                }*/
                                                    </script>
                                                    
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

                  <!--  <div class="span_1_of_3 col">
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

                  <!--  <div class="span_1_of_3 col">
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