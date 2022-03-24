<?php

if($_POST){

    $name=$_POST['name_admin'];
    $username=$_POST['username_admin'];
    $password=$_POST['password_admin'];
    $role=$_POST['role_admin'];
    
    include "../conn.php";

        $insert=mysqli_query($conn,"insert into user_admin (name,username,password,role) value ('".$name."','".$username."','".md5($password)."','".$role."')") or die(mysqli_error($conn));

        if($insert){

            echo "<script>alert('Successfully added user');location.href='user_list.php';</script>";

        } else {

            echo "<script>alert('Failed adding user');location.href='user_list.php';</script>";
        }
    }

?>