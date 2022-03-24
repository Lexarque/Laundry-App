<?php
session_start();

unset($_SESSION['id_user_admin']);
unset($_SESSION['name']);
unset($_SESSION['role']);

$_SESSION['login_status']=false;

session_destroy();

header("location: Admin/login.php");
?>