<?php
include_once 'auth.php';
$msg = '';
$err = 1;

$user_id = $auth_user['id'];
$title=clean('title');
$category=clean('category');
$content=clean('content');

$image=$_FILES['image']['name'];
$filename=$title.basename($image);
$target="../post_images/".basename($filename    );

$upload= move_uploaded_file($_FILES['image']['tmp_name'], $target);

if($upload==true){
    $sql=$con->query(" INSERT INTO posts (user_id, title, category, content, image) VALUES ('$user_id', '$title', '$category', '$content', '$filename')");
    $msg= 'user uploaded succesfully';
    header("location:add_post.php?msg=".$msg);
}

?>