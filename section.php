<?php
session_start();
session_destroy();
header("location:../index.php?msg=you have been logged out successfully");
?>