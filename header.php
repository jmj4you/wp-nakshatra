<?php
// Same as error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to Nakshathra Real Estate agency</title>
    <link
        href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>
    <link
        href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap-theme.css">
    <script src="<?php bloginfo('template_url'); ?>/js/jquery-1.10.2.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
    <link href="<?php bloginfo('template_url'); ?>/css/nakshathra_style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="main_bg"></div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-5"><img src="<?php bloginfo('template_url'); ?>/images/nakshathra_logo.png"
                                       class="img-responsive logo_p"></div>
            <div class="col-md-7">
                <div class="top_menu_bk">
                    <div class="row">
                        <div class="hm_contact"><span class="ph_top">+91 924 941 7377</span><br/>
                            <span class="mail_txt">info@nakshathra.com</span></div>
                    </div>
                    <div class="row">
                        <div class="menu_top">
                            <nav class="navbar navbar-default" role="navigation">
                                <div class="container-fluid">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                                data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span> <span class="icon-bar"></span> <span
                                                class="icon-bar"></span></button>
                                    </div>

                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                        <?php

                                        wp_nav_menu( array(
                                            'theme_location'    => 'nakshathra-header-menu',
                                            'container'         => 'ul',
                                            'container_class'   => 'nav navbar-nav navbar-right',
                                            'menu_id'           => false,
                                            'sort_column'       => 'menu_order',
                                            'depth'             => '4',
                                            'fallback_cb'     => 'kstWpNavMenuFallbackCb'
                                        ) );

//                                        echo '</pre>';
                                        ?>

                                        <ul class="nav navbar-nav navbar-right">
                                            <li class="active"><a href="#">HOME</a></li>
                                            <li><a href="#">ABOUT US</a></li>
                                            <li><a href="#">LAND </a></li>
                                            <li><a href="#">PROPERTIES</a></li>
                                            <li><a href="#">CONTACT US</a></li>
                                        </ul>
                                    </div>
                                    <!-- /.navbar-collapse -->
                                </div>
                                <!-- /.container-fluid -->

                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
