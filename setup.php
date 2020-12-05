<?php
$con=new mysqli('localhost', 'root', '', 'hotgist');
SESSION_START();
function clean($x){

    $con=new mysqli('localhost', 'root', '', 'hotgist');
    $x=trim(strip_tags($_POST[$x]));
    //escape special character if any
    $x=mysqli_real_escape_string($con, $x);
    return $x;
    }


?>