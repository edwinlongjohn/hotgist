<?php
include 'setup.php';

?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">


<!-- Mirrored from cyclonethemes.com/demo/html/suchana/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Dec 2019 19:38:43 GMT -->

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Suchana is an online blog, news & magazine dedicated to different categories html template">

    <title>Suchana - Blog, News & Magazine HTML Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!--Default CSS-->
    <link href="css/default.css" rel="stylesheet" type="text/css">

    <!--Custom CSS-->
    <link href="css/style.css" rel="stylesheet" type="text/css">

    <!--Plugin CSS-->
    <link href="css/plugin.css" rel="stylesheet" type="text/css">

    <!--Font Icons-->
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body class="home-1 home-2  ">
    <!--PRELOADER-->
    <!-- <div id="preloader">
        <div id="status"></div>
    </div> -->
    <!--*Header*-->
    <header id="inner-navigation">

        <div class="offer text-center">
            <div class="container">
                <p class="mar-0">Welcome to exquisite blog </p>
                <div class="btn-purple">
                </div>
            </div>
        </div>

        <!-- navbar start -->
        <nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function navbar-arrow">

            <div class="container">

                <div class="logo text-center">
                    <h1><a class="pad-0" href="index.html"><img src="images/logo.png"></a></h1>
                </div>

                <div id="navbar" class="navbar-nav-wrapper text-center">
                    <ul class="nav navbar-nav navbar-right" id="responsive-menu">
                        <li class="active"><a href="index.php">Home</a>

                        </li>

                        <li><a href="#">Categories <i class="fa fa-angle-down"></i></a>
                            <ul>
                                <li><a href="category.php">View all Categories</a></li>
                                <li><a href="single_cat.php?category=events"></a>Events</li>
                                <li><a href="single_cat.php?category=sports"></a>Sports</li>

                            </ul>
                        </li>
                        <?php
                        if(isset($_SESSION['user_id'])){
                            echo '<li><a href="account/">Account</a></li>';
                        }
                        else{
                            echo '<li><a href="login.php">Register/Login</a></li>';
                            }
                        ?>
                        
                        <li><a href="#">Contact Us</a>

                        </li>
                        
                        <li><a href="#search" class="mt_search"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>

            <div id="slicknav-mobile"></div>
        </nav>
        <!-- navbar end -->
    </header>
    <!--* End Header*-->