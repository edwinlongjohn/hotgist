<?php
include 'setup.php';
$err=0;
$msg='';
$email=clean('email');
$password=clean('password');
$password=sha1(md5($password));
$login_confirm=$con->query("SELECT id FROM gists where email='$email' AND password ='$password' ");
if($login_confirm->num_rows == 1){
$login=$login_confirm->fetch_assoc();
$_SESSION['user_id']=$login['id'];
header("location:account/");
}
else{
    header("location:login.php?msg=user not found");
}




?>