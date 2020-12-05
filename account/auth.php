<?php
include '../setup.php';
if (isset($_SESSION['user_id'])) {
    $id=$_SESSION['user_id'];
    $detail=$con->query("SELECT * from gists where id = '$id'");
    $auth_user=$detail->fetch_assoc();
}
 else {
    header("location:../login.php");
}


?>