<?php
include_once 'auth.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">
<!-- Mirrored from cyclonethemes.com/demo/html/suchana/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Dec 2019 19:40:08 GMT -->
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Suchana is an online blog, news & magazine dedicated to different categories html template">

    <title>Suchana - Blog, News & Magazine HTML Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png">
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!--Default CSS-->
    <link href="../css/default.css" rel="stylesheet" type="text/css">
    <!--Custom CSS-->
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <!--Flaticons CSS-->
    <link href="../font/flaticon.html" rel="stylesheet" type="text/css">
    <!--Plugin CSS-->
    <link href="../css/plugin.css" rel="stylesheet" type="text/css">
    <!--Dashboard CSS-->
    <link href="../css/dashboard.css" rel="stylesheet" type="text/css">

    <link href="../css/icons.css" rel="stylesheet" type="text/css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="../../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!--PRELOADER-->
    <!-- <div id="preloader">
        <div id="status"></div>
    </div> -->
    <!-- start Container Wrapper -->
    <div id="container-wrapper">
        <!-- Dashboard -->
        <div id="dashboard">

            <!-- Responsive Navigation Trigger -->
            <a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>  

            <div class="dashboard-sticky-nav">
                <div class="content-left pull-left">
                    <a href="dashboard.html"><img src="../images/logo.png" alt="logo"></a>
                </div>
                <div class="content-right pull-right">
                    <div class="search-bar">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" id="search" placeholder="Search Now">
                                <a href="#"><span class="search_btn"><i class="fa fa-search" aria-hidden="true"></i></span></a>
                            </div>
                        </form>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <div class="profile-sec">
                                <div class="dash-image">
                                    <img src="../pictures/<?php echo $auth_user['picture'] ?>" alt="">
                                </div>
                                <div class="dash-content">
                                    <h4> <?php echo  $auth_user['name']?></h4>
                                    <span>Post Manager</span>
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="sl sl-icon-settings"></i>Settings</a></li>
                            <li><a href="#"><i class="sl sl-icon-user"></i>Profile</a></li>
                            <li><a href="#"><i class="sl sl-icon-lock"></i>Change Password</a></li>
                            <li><a href="#"><i class="sl sl-icon-power"></i>Logout</a></li>
                        </ul>
                    </div>
                   
                </div>
            </div>
            <div class="dashboard-nav">
                <div class="dashboard-nav-inner">
                    <ul>
                        <li ><a href="index.php"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
                        <li><a href="profile.php"><i class="sl sl-icon-user"></i> Edit Profile</a></li>
                        <li><a href="add_post.php"><i class="sl sl-icon-plus"></i> Add Post</a></li>
                        
                        <li><a href="posts.php"><i class="sl sl-icon-list"></i> Post List</a></li>
                        
                        <li><a href="../section.php/"><i class="sl sl-icon-power"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
           