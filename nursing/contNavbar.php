 <?php if (session_status() == PHP_SESSION_NONE){
 session_start();   } ?>
 <!-- Site Header Wrap -->
        <div id="site-header-wrap">

            <!-- Header -->
            <header id="site-header">
                <div id="site-header-inner" class="wprt-container">
                    <div class="wrap-inner">
                        <div id="site-logo" class="clearfix">
                            <div id="site-logo-inner"> <?php 
                                if($_SESSION['type']==1){
                                ?> 
                                <a href="/nursing/contractor.php" title="WSDA" rel="home" class="main-nav" style="font-size: 20px;font-weight: bold">
                                WSDA </a>
                                <?php }  
                                else{
                                ?>
                                <a href="/nursing/index.php" title="WSDA" rel="home" class="main-nav" style="font-size: 20px;font-weight: bold">
                                WSDA </a>
                                <?php  } ?>
                            </div>
                        </div><!-- /#site-logo -->

                        <div class="mobile-button"><span></span></div><!-- //mobile menu button -->

                        <nav id="main-nav" class="main-nav">
                            <ul class="menu">
                               

                                <?php 
                                if($_SESSION['type']==1){
                                ?> <li  class="current-menu-item"><a href="/nursing/contractor.php">Home</a></li>
                                <li><a href="contractor.php">My Details</a></li>
                                <?php }  
                                else{
                                ?>
                                    <li  class="current-menu-item"><a href="index.php">Home</a>
                                    </li>
                                                            <li><a href="visitorhome.php">My Details</a></li>
<?php  } ?>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </nav><!-- /#main-nav -->

                        <div id="header-search">
                            <a class="header-search-icon" href="#"><span class="fa fa-search"></span></a>
                            <form role="search" method="get" class="header-search-form" action="#">
                                <label class="screen-reader-text">Search for:</label>
                                <input type="text" value="" name="s" class="header-search-field" placeholder="Type and hit enter...">
                                <button type="submit" class="header-search-submit" title="Search">Search</button>
                            </form>
                        </div><!-- /#header-search -->

                    </div>
                </div><!-- /#site-header-inner -->
            </header><!-- /#site-header -->
        </div><!-- /#site-header-wrap -->
