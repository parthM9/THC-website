<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Thai_Wah_Club </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head();?>

    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>

    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.html">
                                    <img src="<?php bloginfo('template_directory');?>/img/twhlogofin1.png" alt="">
                                    <!-- add your logo here -->
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                          <?php
                                   /*   wp_nav_menu(
                                       array(
                                         'theme_location'=>'top-menu',
                                         'menu_id'=>'navigation',
                                         'container'=>'ul',
                                         'menu_class'=>'submenu',
                                       )
                                     );   */ //minor issue as not sure how to include the i class here in menu so leaving for now


     ?>
                            <div class="main-menu  d-none d-lg-block text-center">
                                <nav>


                                  <ul id="navigation">
                                        <li><a href="#">Australia & New Zealand <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="study_work_in_nation.html">Work & Holiday in Australia </a>
                                                </li>
                                                <li><a href="study_work_in_nation.html">Work & Holiday in New Zealand</a></li>
                                                <li><a href="general_nation_info.html">General information about Australia</a></li>
                                                <li><a href="general_nation_info.html">General information about New Zealand</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Community<i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="study_work_in_nation.html">Job & Accommodation</a></li>
                                                <li><a href="forum.html">Forums</a></li>
                                                <li><a href="blog.html">Blog</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="#">Our Services<i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="general_english_courses.html">Learn English with us</a></li>
                                                <li><a href="general_english_courses.html">Learn english with our partners</a></li>
                                                <li><a href="services_offered.html">Services we provide?</a></li>
                                                <li><a href="faq.html">FAQ</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Who we are<i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="about_us.html">About Us</a></li>
                                                <li><a href="page.php">Contact</a></li>
                                            </ul>
                                        </li>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-2 d-none d-lg-block">
                            <div class="log_chat_area d-flex align-items-end">
                                <a href="#" data-scroll-nav="0" class="say_hi">Login</a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
