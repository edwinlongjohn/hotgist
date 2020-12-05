<?php
$err = 0;
$msg = '';
include 'setup.php';
$name = clean('name');
$email = clean('email');
$phone = clean('phone');
$password = clean('password');
$c_password = clean('c_password');

// confirmation of password
if ($password != $c_password) {
    $err = 1;
    $msg .= " password does not match <br>";
}

// ecryption of password
$password = sha1(md5($password));
$check_email = $con->query("SELECT * from gists where email = '$email'");
if ($check_email->num_rows > 0) {
    $err = 1;
    $msg = 'email already exists <br> ';
}
//to check if password is already in use
$confirm_password=$con->query("SELECT * from gists where password='$password' ");
if($confirm_password->num_rows > 0){
$err=1;
$msg .='password already exists <br>';
}
//to fill in all field;
if($name=='' || $email=='' || $phone=='' || $password==''){
    $err=1;
    $msg .='please fill all fields <br>';
}



if ($err == 0) {
    $insert = $con->query("INSERT INTO gists (name, email, phone, password) VALUES ('$name', '$email', '$phone', '$password')");
    if ($insert != true) {
        echo 'error'.$con->error;
    } 
    else{
        echo 'inserted';
    }
    header("location:login.php?message=user logged in successfully");
  
    }
else{
    echo $msg;
    //header("location:login.php?msg=".$msg);
   
}



?>