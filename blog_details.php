<?php
    include_once 'setup.php';

 
    $user_id=$_GET['id'];
   $post_page = $con->query("SELECT * from posts where id = '$user_id' ");
   $user=$post_page->fetch_assoc();
   $id=$user['user_id'];
    $get_name=$con->query("SELECT name from gists where id='$id'");
   $name=mysqli_fetch_assoc($get_name);
   $real_name=$name['name'];
 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">


<!-- Mirrored from cyclonethemes.com/demo/html/suchana/blog-details1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Dec 2019 19:40:06 GMT -->
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

<body class="page">
    <!--PRELOADER-->
        <!-- <div id="preloader">
            <div id="status"></div>
        </div> -->

    <!--*Header*-->
    <header id="inner-navigation">

        <!-- navbar start -->
        <nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function navbar-arrow">

            <div class="container">

                <div class="logo pull-left">
                    <h1><a href="index.html"><img src="images/logo.png"></a></h1>
                </div>
                
                <div id="navbar" class="navbar-nav-wrapper text-center">
                    <ul class="nav navbar-nav navbar-right" id="responsive-menu">
                        <li class="active"><a href="index.php">Home </a>
                            
                        </li>

                        <li ><a href="#">Categories<i class="fa fa-angle-down"></i></a>
                            <ul>
                                <li><a href="about-us.html">All Categories</a></li>
                                <li><a href="error.html">Category 1</a></li>
                                
                            </ul>
                        </li> 
                        <?php
                        if(isset($_SESSION['user_id'])){
                            echo '
                            <li>
                              <a href="account/">Account</a>

                            </li>
                                 ';
                        }
                        else{
                            echo '
                                   <li><a href="login.php">Register/Login</a></li>
                                 ';
                        }
                        ?>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#search" class="mt_search"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
            
            <div id="slicknav-mobile"></div>
        </nav>
        <!-- navbar end -->
    </header>
    <!--* End Header*-->

 

      
    <!-- Banner -->
    <div id="mt_banner" class="innerbanner">
    	<div class="container-fluid">
        
    		<div class="featured-bg bg-orange"></div>
			<div class="banner-caption">
           
				<div class="banner_caption_text">
                
                    <div class="post-category">
                        <ul>
                            
                            <li class="cat-yellow"><a href="#" class="white"><?php  echo $user['category']  ?></a></li>
                        </ul>
                    </div>
                    <h1><a href="#"><?php  echo $user['title']  ?></a></h1>
                    <div class="item-meta">
                        <span>by</span>
                        <a href="https://cyclonethemes.com/author/sean/"><?php  echo $real_name ?></a>
                        <br>
                        <time datetime="2018-02-15"><?php  echo $user['date_added']  ?></time>
                    </div>
                </div>
			</div>
    	</div>	
    </div>
    <!-- End Banner -->

    <!--* Blog Main Sec*-->
    <section id="blog_main_sec" class="section-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-9 width70">
                    <!--*Blog Content Sec*-->
                    <div class="blog-detail-main cats-detail">
                        <div class="post_body">
                        <p style="height:15vh ;">
                        <?php  echo $user['content']  ?> 
                        </p >
                      
                        </div>
                        <div class="follow_us">
                            <ul class="social_icons">
                                <li><a href="#"> <i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        

                        <div class="author_box">
                            <div class="author_img">
                                <img src="images/blog/author.png" alt="Author">
                            </div>
                            <div class="author_bio">
                                <h5>Jhon Snow</h5>
                                <p>Duis a enim vel mauris ultrices. Nullam aliquet velit ac velit tempus in semper an neque auctor. Aenean ligula mi, auctor sed tempus.Duis a enim vel mauris ultrices. Nullam aliquet velit ac velit tempus in semper an neque auctor.
                                    Aenean ligula mi, auctor sed tempus.</p>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--=========================* Comment Sec*===========================-->
                        <div id="comments">
                            <div class="comments-wrap">
                                <h3 class="single-post_heading blog_heading_border">Comments (4)</h3>
                                <ol class="comments-lists">
                                    <li class="comment">
                                        <div class="activity_rounded">
                                            <img src="images/blog/cmnt-1.jpg" alt="image" /> </div>
                                        <div class="comment-body">
                                            <h4 class="text-left"> NIKLOS DELSON &nbsp;&nbsp;
                                                <small class="date-posted pull-right">18th Mar, 2018</small>
                                            </h4>
                                            <p> Duis a enim vel mauris ultrices. Nullam aliquet velit ac velit tempus in semper neque auctor. Etiam pellentesque, magna eget lobortis placerat, leo leo consequat ante, non iaculis turpis augue ac ligula. Duis a
                                                enim vel mauris ultrices, leo. </p>
                                            <a href="#" class="pull-left btn-blog">Reply</a>
                                            <div class="clearfix"></div>
                                        </div>
                                      
                                   
                                  
                                </ol>
                                <div class="leave_comment">
                                    <h3 class="blog_heading_border"> Leave a Comment </h3>
                                    <form action="#" method="post">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input placeholder="Name" class="form-control" type="text" required> </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input placeholder="Email" class="form-control" type="email" required> </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <textarea placeholder="Message" class="form-control" required></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn-blog">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--=========================*End Comment Sec*===========================-->
                        <!--* End Blog Content Sec*-->
                    </div> 
                </div>
                <div class="col-md-3 width30">
                    <div class="sidebar">

                        <!-- widget author -->
                        <div class="widget widget-author text-center">
                            <div class="widget-image">
                                <img src="images/blog/author.png" alt="...">
                            </div>
                            <div class="widget-author-content">
                                <div class="widget-author mar-bottom-15">
                                    <h3 class="mar-bottom-5">Blork Lewson</h3>
                                    <span class="author-profession">Author Blogger</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
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
                        <div class="widget widget-category">
                            <div class="widget-content">
                                <div class="widget-title">
                                    <h3 class="white">Category</h3>
                                </div>
                                <div class="widget-category-main">
                                    <ul class="widget-category-list">
                                        <li><a href="#">Lifestyle</a></li>
                                        <li><a href="#">Health</a></li>
                                        <li><a href="#">Article</a></li>
                                        <li><a href="#">Travel</a></li>
                                        <li><a href="#">Uncategorised</a></li>
                                        <li><a href="#">Popular</a></li>
                                        <li><a href="#">World</a></li>
                                        <li><a href="#">Stylish</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- widget popular post -->
                    
                        <!-- widget tags -->
                       

                        <!-- widget popular post -->
                        <div class="widget widget-popular-post">
                            <div class="widget-content">
                                <div class="widget-title">
                                    <h3 class="white">Trending Posts</h3>
                                </div>
                                <div class="widget-popular-post-main">
                                    <div class="widget-posts">
                                        <div class="post-thumb">
                                            <img src="images/blog/r-post-1.jpg" alt=".....">
                                        </div>
                                        <div class="post-title">
                                            <div class="widget-cats">
                                                <a href="#">Technology</a>
                                                <a href="#">Travel</a>
                                            </div>
                                            <h4><a href="#">Is It Safe to Have These Things Listening to Us?</a></h4>
                                        </div>
                                    </div>

                                    <div class="widget-posts">
                                        <div class="post-thumb">
                                            <img src="images/blog/r-post-2.jpg" alt=".....">
                                        </div>
                                        <div class="post-title">
                                            <div class="widget-cats">
                                                <a href="#">Technology</a>
                                                <a href="#">Travel</a>
                                            </div>
                                            <h4><a href="#">8 Most Awesome Gadgets For 2019</a></h4>
                                        </div>
                                    </div>

                                    <div class="widget-posts">
                                        <div class="post-thumb">
                                            <img src="images/blog/r-post-3.jpg" alt=".....">
                                        </div>
                                        <div class="post-title">
                                            <div class="widget-cats">
                                                <a href="#">Technology</a>
                                                <a href="#">Travel</a>
                                            </div>
                                            <h4><a href="#">Top 15 Social Network App You Need To Travel</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>       
    	</div>
    </section>
    <!--*End Blog Main Sec*-->

     <!--* Blog*-->
    <section id="mt_blog" class="light-bg pad-top-0">
        <div class="container">
            <div class="blog_post_sec blog_post_inner">
                <div class="row">
                	<div class="col-md-8 col-sm-12 mar-bottom-30">
                        <div class="blog-post_wrapper image-wrapper">
                            <div class="blog-post-image">
                                <img src="images/blog-listing/blog_02.jpg" alt="image" class="img-responsive center-block post_img" />
                            </div>
                            <div class="post-content">
                                <div class="post-category">
                                    <ul>
                                        <li class="cat-yellow"><a href="#" class="white">Populor</a></li>
                                        <li class="cat-pink"><a href="#" class="white">Fashion</a></li>
                                    </ul>
                                </div>
                                <div class="post-date">
                                    <p><a href="#">15th August 2019</a></p>
                                </div>
                                <h2 class="entry-title">
                                    <a href="blog-details.html" class="white">I'm passionate about food, the tradition of it, cooking it, sharing it</a>
                                </h2>
                                <div class="item-meta white">
                                    <span>by</span>
                                    <a class="author-name white" href="#">Patricia Jenkins</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mar-bottom-30">
                        <div class="blog-post_wrapper image-wrapper blog-wrapper-list">
                            <div class="blog-post-image">
                                <img src="images/blog-listing/blog_101.jpg" alt="image" class="img-responsive center-block post_img" />
                                <div class="post-category">
                                    <ul>
                                        <li class="cat-green mar-0"><a href="#" class="white">Health</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="post-content">
                                <div class="post-date">
                                    <p><a href="#">15th August 2019</a></p>
                                </div>
                                <h2 class="entry-title">
                                    <a href="blog-details.html" class="">I Thought My Glasses Made Me Unattractive</a>
                                </h2>
                                
                                <div class="item-meta">
                                    <span>by</span>
                                    <a class="author-name" href="author.html">Admin Jackson</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mar-bottom-30">                            
                        <div class="blog-post_wrapper front-wrapper bg-orange">
                            <div class="post-content">
                                <div class="post-category">
                                    <ul>
                                        <li class="cat-blue"><a href="#" class="white">Technology</a></li>
                                        <li class="cat-green"><a href="#" class="white">Health</a></li>
                                    </ul>
                                </div>
                                <div class="post-date">
                                    <p><a href="#">15th August 2019</a></p>
                                </div>
                                <h2 class="entry-title">
                                    <a href="blog-details.html" class="white">The future of architecture is culture</a>
                                </h2>
                                <div class="item-meta white">
                                    <span>by</span>
                                    <a class="author-name white" href="#">Patricia Jenkins</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 mar-bottom-30">                            
                        <div class="blog-post_wrapper front-wrapper bg-gray">
                            <div class="post-content">
                                <div class="post-category">
                                    <ul>
                                        <li class="cat-pink"><a href="#" class="white">Fashion</a></li>
                                        <li class="cat-green"><a href="#" class="white">Health</a></li>
                                    </ul>
                                </div>
                                <div class="post-date">
                                    <p><a href="#">15th August 2019</a></p>
                                </div>
                                <h2 class="entry-title">
                                    <a href="blog-details.html">Architecture belongs to culture, not to civilization</a>
                                </h2>
                                <div class="item-meta">
                                    <span>by</span>
                                    <a class="author-name" href="#">Patricia Jenkins</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mar-bottom-30">
                        <div class="blog-post_wrapper image-wrapper">
                            <div class="blog-post-image">
                                <img src="images/blog-listing/blog_10.jpg" alt="image" class="img-responsive center-block post_img" />
                            </div>
                            <div class="post-content">
                                <div class="post-category">
                                    <ul>
                                        <li class="cat-green"><a href="#" class="white">Health</a></li>
                                    </ul>
                                </div>
                                <div class="post-date">
                                    <p><a href="#">15th August 2019</a></p>
                                </div>
                                <h2 class="entry-title white">
                                    <a href="blog-details.html" class="white">I think it's the responsibility of a designer to try to break rules and barriers</a>
                                </h2>
                                <div class="item-meta white">
                                    <span>by</span>
                                    <a class="author-name white" href="#">Patricia Jenkins</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>    
            </div>
        </div>
    </section>
    <!--* End Blog*-->

    <div class="mt_instagram">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_01.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_02.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_03.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_04.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_05.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_06.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_07.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_08.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_09.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_10.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_11.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_12.jpg" alt="Image"></a></div>
            </div>
            <div class="sectio-title">
                <h3 class="mar-0"><a href="#">Follow @ Instagram</a></h3>
            </div>
        </div> 
    </div>
   
    <!--*Footer*-->
    <?php include 'footer.php'?>
