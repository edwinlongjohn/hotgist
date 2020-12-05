<?php
include_once 'account_header.php';
include_once 'auth.php';

$get_post = $con->query("SELECT * FROM posts order by id DESC");
?>
<div class="dashboard-content">
    <!--* Blog*-->
    <section id="mt_blog" class="">
        <div class="row">
            <div class="col-md-12">
                <div class="blog_post_sec blog_post_inner">
                    <div class="row">
                        <?php
                        while ($post=$get_post->fetch_assoc()) {
                            $user_id=$post['user_id'];
                            $get_name = $con->query("SELECT name from gists where id='$user_id' LIMIT 1");
                            $row= mysqli_fetch_assoc($get_name);
                            $post_owner = $row['name'];
                        ?>
                            <div class="col-md-6 col-sm-12 mar-bottom-30">

                                <div class="blog-post_wrapper image-wrapper ">
                                <div class="blog-post-image">
                                     <img src="../post_images/<?php echo $post['image']?>" alt="image" class="img-responsive center-block post_img" />
                                </div>
                                    <div class="post-content">
                                        <div class="post-category">
                                            <ul>
                                                <li class="cat-blue"><a href="#" class="white"><?php echo $post['category'] ?></a></li>

                                            </ul>
                                        </div>
                                        <h2 class="entry-title">
                                            <a href="post.php?id=<?php echo $post['id']?>" class="white"><?php echo $post['title']?></a>
                                        </h2>
                                        <div class="post-date">
                                            <p><a href="#"><?php echo $post['date_added']?></a></p>
                                        </div>
                                       
                                        <div class="item-meta white">
                                            <span>by</span>
                                            <a class="author-name white" href="author.html"><?php echo $post_owner ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        <?php
                        }
                        ?>




                        <div class="col-xs-12">
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
                </div>
            </div>
        </div>
    </section>
    <!--* End Blog*-->
</div>


<?php
include_once 'account_footer.php';
?>