<?php session_start();    ?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->

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

<?php if(isset($_SESSION['id'])){ include('contNavbar.php'); } else include('mainNavbar.php');?>
<!-- /#site-header-wrap -->

<!-- Slider -->
<div class="rev_slider_wrapper fullwidthbanner-container">
    <div id="rev-slider1" class="rev_slider fullwidthabanner">
        <ul>
            <!-- Slide 1 -->
            <li data-transition="random">
                <!-- Main Image -->
                <img src="assets/img/slider/slider-1.jpg" alt="image" data-bgposition="center center" data-no-retina>
                <!-- Layers -->
                <div class="tp-caption tp-resizeme text-white text-left font-heading font-weight-600"
                    data-x="['left','left','left','center']" data-hoffset="['30','30','30','0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['-50','-50','-50','-40']"
                    data-fontsize="['60','60','60','35']"
                    data-lineheight="['72','72','72','40']"
                    data-width="full"
                    data-height="none"
                    data-whitespace="normal"
                    data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_in="x:0px;y:[100%];"
                    data-mask_out="x:inherit;y:inherit;"
                    data-start="700"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on">
                    Welcome To Nursing Home <br>
                    Services You Can Trust
                </div>
                <div class="tp-caption text-left"
                    data-x="['left','left','left','center']" data-hoffset="['30','30','30','0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['100','100','100','90']"
                    data-width="full"
                    data-height="none"
                    data-whitespace="normal"
                    data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_in="x:0px;y:[100%];"
                    data-mask_out="x:inherit;y:inherit;"
                    data-start="1000"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on">
                    <a href="appointment.php" class="wprt-button big">MAKE AN APPOINTMENT</a>
                </div>

               
            </li>
            <!-- End Slide 1 -->

            <!-- Slide 2 -->
            <li data-transition="random">
                <!-- Main Image -->
                <img src="assets/img/slider/slider-2.jpg" alt="image" data-bgposition="center center" data-no-retina>
                <!-- Layers -->
                <div class="tp-caption tp-resizeme text-white text-left font-heading font-weight-600"
                    data-x="['left','left','left','center']" data-hoffset="['30','30','30','0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['-50','-50','-50','-40']"
                    data-fontsize="['60','60','60','35']"
                    data-lineheight="['72','72','72','40']"
                    data-width="full"
                    data-height="none"
                    data-whitespace="normal"
                    data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_in="x:0px;y:[100%];"
                    data-mask_out="x:inherit;y:inherit;"
                    data-start="700"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on">
                    Welcome To WSDA <br>
                    Services You Can Trust
                </div>
                <div class="tp-caption text-left"
                    data-x="['left','left','left','center']" data-hoffset="['30','30','30','0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['100','100','100','90']"
                    data-width="full"
                    data-height="none"
                    data-whitespace="normal"
                    data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_in="x:0px;y:[100%];"
                    data-mask_out="x:inherit;y:inherit;"
                    data-start="1000"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on">
                    <a href="appointment.php" class="wprt-button big">MAKE AN APPOINTMENT</a>
                </div>

               
            </li>
            <!-- End Slide 2 -->
        </ul>
    </div>
</div>
<!-- / Slider -->

<!-- Main Content -->
<main id="main-content">
    <div id="content-wrap">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <div class="page-content">
                    <!-- Welcome -->
                   
              
                    <!-- Testimonial --><!--
                    <div class="row-testimonials-1">
                        <div class="wprt-container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer clearfix" data-desktop="87" data-mobi="60" data-smobi="60"></div>

                                    <div class="wprt-headings clearfix text-center">
                                        <h2 class="heading">Types Of Aged Care</h2>
                                        <p class="sub-heading mw-630">All our consultants are highly experienced in their fields and produce excellent outcomes for patients</p>
                                    </div><!-- /.wprt-headings -->

                                    <!--<div class="wprt-spacer clearfix" data-desktop="16" data-mobi="16" data-smobi="16"></div>

                                    <div class="wprt-carousel-box has-bullets bullet40 bullet-circle text-center" data-auto="true" data-loop="true" data-gap="30" data-column="2" data-column2="2" data-column3="1">
                                        <div class="owl-carousel owl-theme">
                                            <div class="wprt-testimonials clearfix style-1">
                                                <div class="item">
                                                    <div class="inner">
                                                        <blockquote class="text">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac acumsan ipsum. Suspendisse potenti. Fusce id enim scelerisque pulvinar est sit amet, pellentesque nulla. Integer vel pulvinar quam in commodo est. Pellentesque rutrum sem ut enim tincidunt, ac pharetra quam blandit. Sed luctus purus nec vehicula
                                                            <div class="arrow"></div>
                                                        </blockquote>
                                                        <div class="thumb">
                                                            <img src="assets/img/clients/client-1.png" alt="Image">
                                                        </div>

                                                        <h6 class="name">Justin Forder</h6>
                                                        <span class="position">Patient</span>
                                                    </div>
                                                </div>
                                            </div><!-- /.wprt-testimonials -->

                                           <!-- <div class="wprt-testimonials clearfix style-1">
                                                <div class="item">
                                                    <div class="inner">
                                                        <blockquote class="text">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac acumsan ipsum. Suspendisse potenti. Fusce id enim scelerisque pulvinar est sit amet, pellentesque nulla. Integer vel pulvinar quam in commodo est. Pellentesque rutrum sem ut enim tincidunt, ac pharetra quam blandit. Sed luctus purus nec vehicula
                                                            <div class="arrow"></div>
                                                        </blockquote>
                                                        <div class="thumb">
                                                            <img src="assets/img/clients/client-1.png" alt="Image">
                                                        </div>

                                                        <h6 class="name">Justin Forder</h6>
                                                        <span class="position">Patient</span>
                                                    </div>
                                                </div>
                                            </div><!-- /.wprt-testimonials -->

                                           <!-- <div class="wprt-testimonials clearfix style-1">
                                                <div class="item">
                                                    <div class="inner">
                                                        <blockquote class="text">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac acumsan ipsum. Suspendisse potenti. Fusce id enim scelerisque pulvinar est sit amet, pellentesque nulla. Integer vel pulvinar quam in commodo est. Pellentesque rutrum sem ut enim tincidunt, ac pharetra quam blandit. Sed luctus purus nec vehicula
                                                            <div class="arrow"></div>
                                                        </blockquote>
                                                        <div class="thumb">
                                                            <img src="assets/img/clients/client-1.png" alt="Image">
                                                        </div>

                                                        <h6 class="name">Justin Forder</h6>
                                                        <span class="position">Patient</span>
                                                    </div>
                                                </div>
                                            </div><!-- /.wprt-testimonials -->

                                           <!-- <div class="wprt-testimonials clearfix style-1">
                                                <div class="item">
                                                    <div class="inner">
                                                        <blockquote class="text">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac acumsan ipsum. Suspendisse potenti. Fusce id enim scelerisque pulvinar est sit amet, pellentesque nulla. Integer vel pulvinar quam in commodo est. Pellentesque rutrum sem ut enim tincidunt, ac pharetra quam blandit. Sed luctus purus nec vehicula
                                                            <div class="arrow"></div>
                                                        </blockquote>
                                                        <div class="thumb">
                                                            <img src="assets/img/clients/client-1.png" alt="Image">
                                                        </div>

                                                        <h6 class="name">Justin Forder</h6>
                                                        <span class="position">Patient</span>
                                                    </div>
                                                </div>
                                            </div><!-- /.wprt-testimonials -->

                                           <!-- <div class="wprt-testimonials clearfix style-1">
                                                <div class="item">
                                                    <div class="inner">
                                                        <blockquote class="text">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac acumsan ipsum. Suspendisse potenti. Fusce id enim scelerisque pulvinar est sit amet, pellentesque nulla. Integer vel pulvinar quam in commodo est. Pellentesque rutrum sem ut enim tincidunt, ac pharetra quam blandit. Sed luctus purus nec vehicula
                                                            <div class="arrow"></div>
                                                        </blockquote>
                                                        <div class="thumb">
                                                            <img src="assets/img/clients/client-1.png" alt="Image">
                                                        </div>

                                                        <h6 class="name">Justin Forder</h6>
                                                        <span class="position">Patient</span>
                                                    </div>
                                                </div>
                                            </div><!-- /.wprt-testimonials -->

                                           <!-- <div class="wprt-testimonials clearfix style-1">
                                                <div class="item">
                                                    <div class="inner">
                                                        <blockquote class="text">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac acumsan ipsum. Suspendisse potenti. Fusce id enim scelerisque pulvinar est sit amet, pellentesque nulla. Integer vel pulvinar quam in commodo est. Pellentesque rutrum sem ut enim tincidunt, ac pharetra quam blandit. Sed luctus purus nec vehicula
                                                            <div class="arrow"></div>
                                                        </blockquote>
                                                        <div class="thumb">
                                                            <img src="assets/img/clients/client-1.png" alt="Image">
                                                        </div>

                                                        <h6 class="name">Justin Forder</h6>
                                                        <span class="position">Patient</span>
                                                    </div>
                                                </div>
                                            </div><!-- /.wprt-testimonials --><!--
                                        </div><!-- /.owl-carousel --><!--
                                    </div><!-- /.wprt-carousel-box -->

                                    <div class="wprt-spacer clearfix" data-desktop="80" data-mobi="60" data-smobi="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.wprt-container -->
                    </div><!-- /.row-testimonials-1 -->

                    <!-- News 1 -->
                    
                    <!-- Request 1 -->
                    <div class="row-request-1">
                        <div class="wprt-container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer clearfix" data-desktop="80" data-mobi="60" data-smobi="60"></div>
                                </div><!-- /.col-md-12 -->
                                
                                
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <div class="wprt-toggles style-1">
                                        <div class="toggle-item active">
                                            <h3 class="toggle-heading">
                                                <span class="inner">How We Care For You?</span>
                                            </h3>
                                            <div class="toggle-content">
                                                <p>Our homes offer long and shod term care for people in need of residential care, specialised dementia care and respite. We have dedicated registered nurses, passionate care teams and an in-home Bupa GP or Nurse Practitioner is available in some areas. We also believe its not just our role to care for you when you're sick, but also to help you slay healthy, so we have a lifestyle team that is in each of our homes, Physiotherapy Aides to maintain and improve your physical mobility and access to clinical specialists such as a Podiatrist. Optometnst and Speech Pathologist.</p>
                                            </div>
                                        </div><!-- /.toggle-item -->

                                        <div class="toggle-item">
                                            <h3 class="toggle-heading">
                                                <span class="inner">Residental Care</span>
                                            </h3>
                                            <div class="toggle-content">
                                                <p>As you grow older, you may require assistance because of an illness or a disability, or because of family needs. Sometimes, the best way to get help and support is by residing in an aged care home. Aged care homes can provide peace of mind with 24 hour nursing care and a variety of daily services like cleaning, cooking and laundry. At Bupa, we offer a full range of care to help suit your needs. And if your needs change, we will continue to support you, by adapting the care we offer you.</p>
                                            </div>
                                        </div><!-- /.toggle-item -->

                                        <div class="toggle-item">
                                            <h3 class="toggle-heading">
                                                <span class="inner">Respite Care</span>
                                            </h3>
                                            <div class="toggle-content">
                                                <p>As a carer you may need a small break or have other commitments that take you away from your carer role for a short period. Or your loved one may need some time to recover after a hospital admission. Whatever the reason, we are happy to help with a range of options available for respite care. Ask us about respite availability in our aged care homes. Find out more about respite care at Bupa.</p>
                                            </div>
                                        </div><!-- /.toggle-item -->

                                      <!--  <div class="toggle-item">
                                            <h3 class="toggle-heading">
                                                <span class="inner">Where is The Medical Health Centre?</span>
                                            </h3>
                                            <div class="toggle-content">
                                                <p>For our +50 years' experience of providing healthcare to the local community, superb facilities with continuous investment in facilities and technology and high standards of nursing care and a friendly atmosphere. 99% of our patients who completed our feedback questionnaire rated us as very good.</p>
                                            </div>
                                        </div><!-- /.toggle-item -->

                                       <!-- <div class="toggle-item">
                                            <h3 class="toggle-heading">
                                                <span class="inner">What services do you provide?</span>
                                            </h3>
                                            <div class="toggle-content">
                                                <p>For our +50 years' experience of providing healthcare to the local community, superb facilities with continuous investment in facilities and technology and high standards of nursing care and a friendly atmosphere. 99% of our patients who completed our feedback questionnaire rated us as very good.</p>
                                            </div>
                                        </div><!-- /.toggle-item -->
                                    </div><!-- /.wprt-toggles -->
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
                    &copy; 2019 WSDA, All rights reserved
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

