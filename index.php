<?php include_once 'header.php';
$get_post = $con->query("SELECT * from posts ORDER BY id DESC");
$submit_post = $con->query("SELECT * from posts ORDER BY id DESC");
?>

<!-- Slider -->
<section id="mt_banner" class="single-slider">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="slide-inner" style="background-image:url(images/slider/bg2.jpg)"></div>
                <div class="banner_caption_text">
                    <div class="post-category">
                        <ul>
                            <li class="cat-yellow"><a href="#" class="white">Popular</a></li>
                        </ul>
                    </div>
                    <h1><a href="#">Every Next Level of Your Life Will Demand a Different You</a></h1>
                    <div class="item-meta">
                        <span class="white">by</span>
                        <a href="author.html/index.html">James Bryant</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide-inner" style="background-image:url(images/slider/bg1.jpg)"></div>
                <div class="banner_caption_text">
                    <div class="post-category">
                        <ul>
                            <li class="cat-blue"><a href="#" class="white">Technology</a></li>
                        </ul>
                    </div>
                    <h1><a href="#">Adjusting to Your Home is no Different than a New Country</a></h1>
                    <div class="item-meta">
                        <span class="white">by</span>
                        <a href="author.html/index.html">James Bryant</a><br>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide-inner" style="background-image:url(images/slider/bg3.jpg)"></div>
                <div class="banner_caption_text">
                    <div class="post-category">
                        <ul>
                            <li class="cat-blue"><a href="#" class="white">Technology</a></li>
                            <li class="cat-yellow"><a href="#" class="white">Popular</a></li>
                        </ul>
                    </div>
                    <h1><a href="#">Get Scary With This Vegan Spooky Spider Crackle Cake!</a></h1>
                    <div class="item-meta">
                        <span>by</span>
                        <a href="author.html">Admin Jackson</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next swiper-button-"></div>
        <div class="swiper-button-prev swiper-button-"></div>
    </div>
</section>
<!-- End Slider -->

<!--* Blog*-->
<section id="mt_blog" class="">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="blog_post_sec fullwidth">
                    <?php while ($post_details = $get_post->fetch_assoc()) {
                        $user_id = $post_details['user_id'];
                        $get_id = $con->query("SELECT name FROM gists where id='$user_id'");
                        $owner_post = mysqli_fetch_assoc($get_id);
                        $post_owner = $owner_post['name'];
                    ?>
                        <div class="blog-post_wrapper">
                            <div class="blog-post-image">
                                <img src="post_images/<?php echo $post_details['image'] ?>" alt="image" class="img-responsive center-block post_img" />
                            </div>
                            <div class="post-content">
                                <div class="post-category">
                                    <ul>
                                        <li class="cat-yellow"><a href="#" class="white"><?php echo $post_details['category']   ?></a></li>

                                    </ul>
                                </div>
                                <div class="post-date">
                                    <p><a href="#"><?php echo $post_details['date_added'] ?></a></p>
                                </div>
                                <h2 class="entry-title">
                                    <a href="blog_details.php?id=<?php echo $post_details['id'] ?>" class=""><?php echo $post_details['title']   ?></a>
                                </h2>
                                <div class="item-meta">
                                    <span>by</span>
                                    <a class="author-name" href="author.html"><?php echo $post_owner ?></a>
                                </div>

                            </div>
                        </div>


                    <?php
                    }
                    ?>



                   
               


                <!-- <div class="pagination__wrapper">
                        <ul class="pagination">
                            <li><button class="prev" title="previous page">&#10094;</button></li>
                            <li><button title="first page - page 1">1</button></li>
                            <li><button class="active" title="current page">2</button></li>
                            <li><button>3</button></li>
                            <li><button class="next" title="next page">&#10095;</button></li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--* End Blog*-->

<div class="mt_instagram">
    <div class="container">
    
        <div class="row">
        <?php while ($user = $submit_post->fetch_assoc()) { ?>
            <div class=" col-sm-2 col-xs-6"><a href="#"><img src="post_images/<?php echo $user['image'] ?>" alt="Image"></a></div>
        <?php
         }
        ?>
            
        </div>
       
        <!-- <div class="sectio-title">
            <h3 class="mar-0"><a href="#">Follow @ Instagram</a></h3>
        </div> -->
    </div>


</div>
<?php include 'footer.php' ?>