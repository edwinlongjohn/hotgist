<?php
include_once 'auth.php';
$err=0;
$msg = '';
// get details from gists
$user_id= $auth_user['id'];
$name=clean('name');
$phone=clean('phone');
$bio=clean('bio');
$companyname=clean('companyname');
$address=clean('address');
$zipcode=clean('zipcode');
$country=clean('country');
$city=clean('city');
$region_state=clean('region_state');

$update=$con->query("UPDATE gists set name='$name', phone='$phone', bio='$bio', companyname='$companyname', address='$address', zipcode='$zipcode', country='$country', city='$city', region_state='$region_state' where id='$user_id'");

// if(!$update){
//     $err=1;
//     $msg .='could not update'.$con->error; 
// }
// else {
//     $msg='profile updated';
//         $err = 0;
//     } 

// to check if there is an image

if($_FILES['picture']['name']){
    $target_br = '../pictures/';
    $image=$_FILES['picture']['name'];
    $filename=$auth_user['email'].basename($image);
    $target=$target_br.basename($filename);
    $upload = move_uploaded_file($_FILES['picture']['tmp_name'], $target);

    if($upload){
        $sql=$con->query("UPDATE gists set picture='$filename' where id = '$user_id' ");
    }
}
   
if($err==0){
    header("location:profile.php?msg=updated successfully");
}
?>