<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
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

                            <div class="main-menu  d-none d-lg-block text-center">
                                <nav>
                                  <?php
                                           wp_nav_menu(
                                               array(
                                                 'theme_location'=>'top-menu',
                                                 'container'=> ''
                                               )
                                             );  //minor issue as not sure how to include the i class here in menu so leaving for now


                                ?>


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
