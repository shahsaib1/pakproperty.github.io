<?php
session_start();
session_destroy();
unset($_SESSION['ROLE']);
unset($_SESSION['IS_LOGIN']);
header('location:login.php');
die();
?>