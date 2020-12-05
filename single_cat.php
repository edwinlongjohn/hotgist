<?php
include_once 'setup.php';

$category = $_GET['category'];
$get_posts = $con->query("SELECT * FROM posts where category='$category' ")

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

                            <!-- <li><a href="#">Categories <i class="fa fa-angle-down"></i></a>
                                <ul>
                                    <li><a href="category.php">View all Categories</a></li>
                                    <li><a href="sport.php?category_a=<?php echo $category['Sports']?>">Sport</a></li>
                                    <li><a href="music.php?category_b=<?php echo $category['Music']?>">Music</a></li>
                                    <li><a href="health.php?category_c=<?php echo $category['Health']?>">Health</a></li>
                                    <li><a href="news.php?category_d=<?php echo $category['News']?>">News</a></li>
                                    <li><a href="events.php?category_e=<?php echo $category['Events']?>">Events</a></li>

                                </ul>
                            </li> -->
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

    

    <!--* Blog*-->
    <section id="mt_blog" class="nomargin">
        <div class="container">
            <div class="row">
              
                <div class="col-md-9 width70">
                    <div class="blog_post_sec">
                    <?php
                    while($single_post=$get_posts->fetch_assoc()){
                        $get_id = $single_post['user_id'];
                        $get_name= $con->query("SELECT * from gists where id='$get_id' ");
                        $name = mysqli_fetch_assoc($get_name);
                        $row = $name['name'];
                    ?>
                    <div class="blog-post_wrapper">
                            <div class="post-content text-right">
                                <div class="post-category">
                                    <ul>
                                        <li class="cat-green"><a href="#" class="white"><?php echo $n_posts['category'] ?></a></li>
                                    </ul>
                                </div>
                                <div class="post-date">
                                    <p><a href="#"><?php echo $n_posts['date_added'] ?></a></p>
                                </div>
                                <h2 class="entry-title">
                                    <a href="blog_details.php?id=<?php echo $n_posts['id']?>" class=""><?php echo $n_posts['title'] ?></a>
                                </h2>
                                <div class="item-meta">
                                    <span>by</span>
                                    <a class="author-name" href="author.html"><?php echo $row ?></a>
                                </div>
                            </div>
                            <div class="blog-post-image">
                                <img src="post_images/<?php echo $n_posts['image'] ?>" alt="image" class="img-responsive center-block post_img" />
                            </div>
                        </div>
                        <?php
                            }
                        ?>  
                        
                        <div class="pagination__wrapper">
                          <ul class="pagination">
                            <li><button class="prev" title="previous page">&#10094;</button></li>
                            <li><button title="first page - page 1">1</button></li>
                            <li><button>2</button></li>
                            <li><button class="active" title="current page">2</button></li>
                            <li><button>3</button></li>
                            <li><button>4</button></li>
                            <li><button class="next" title="next page">&#10095;</button></li>
                          </ul>
                        </div>  
                    </div>
                </div>
                <div class="col-md-3 width30">
                    <div class="sidebar">

                        <!-- widget author -->
                        <div class="widget widget-author text-center">
                            <div class="widget-image">
                                <img src="pictures/<?php echo $name['picture'] ?>" alt="...">
                            </div>
                            <div class="widget-author-content">
                                <div class="widget-author mar-bottom-15">
                                    <h3 class="mar-bottom-5"><?php echo $row ?></h3>
                                    <span class="author-profession">Author Blogger</span>
                                </div>
                                <p><?php echo $name['bio'] ?></p>
                                <div class="follow_us mar-bottom-15">
                                    <ul class="social_icons">
                                        <li><a href="#"> <i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                                <div class="widget-author-signature">
                                    <img src="images/blog/signature.png" alt="...">
                                </div>
                            </div>
                        </div>

                        <!-- widget category -->
                        <!-- <div class="widget widget-category">
                            <div class="widget-content">
                                <div class="widget-title">
                                    <h3 class="white">Category</h3>
                                </div>
                                <div class="widget-category-main">
                                    <ul class="widget-category-list">
                                    <li><a href="sport.php">Sport</a></li>
                                <li><a href="music.php">Music</a></li>
                                <li><a href="health.php">Health</a></li>
                                <li><a href="news.php">News</a></li>
                                <li><a href="events.php">Events</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div> -->

                        <!-- widget popular post -->
                        <div class="widget widget-popular-post">
                            <div class="widget-content">
                                <div class="widget-title">
                                    <h3 class="white">Popular Posts</h3>
                                </div>
                                <div class="widget-popular-post-main">
                                    <?php
                                         while($get_name= $get_post->fetch_assoc()){      
                                    ?>
                                    <div class="widget-posts">
                                        <div class="post-thumb">
                                            <img src="post_images/<?php echo $get_name['image']?>" alt=".....">
                                        </div>
                                        <div class="post-title">
                                            <div class="widget-cats">
                                                <a href="#"><?php echo $get_name['category']?></a>
                                               
                                            </div>
                                            <h4><a href="#"><?php echo $get_name['title']?></a></h4>
                                        </div>
                                    </div>
                                    <?php 
                                         }
                                    ?>

                                </div>
                            </div>
                        </div>

                        
                     
                        <!-- Adverts if necessary-->
                        

                        <!-- <div class="widget widget-advertisement">
                            <div class="widget-content">
                                <div class="widget-title">
                                    <h3 class="white">Advertisement</h3>
                                </div>  
                                <div class="widget-ads-image text-center">
                                    <img src="images/blog-listing/blog_07.jpg" alt="ads">
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>  
                
            </div>    
        </div>
    </section>
    <!--* End Blog*-->

    <div class="mt_instagram mar-bottom-20">
        <div class="container">
            <div class="row">
                <?php
                while($wisdom_post=$wise_post->fetch_assoc()){
                ?>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_01.jpg" alt="Image"></a></div>
                <?php
                }
                ?>
                <!-- <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_02.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_03.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_04.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_05.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_06.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_07.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_08.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_09.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_10.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_11.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_12.jpg" alt="Image"></a></div> -->
            </div>
            <!-- <div class="sectio-title">
                <h3 class="mar-0"><a href="#">Follow @ Instagram</a></h3>
            </div> -->
        </div> 
    </div>

 
<?php
include_once 'footer.php';
?>