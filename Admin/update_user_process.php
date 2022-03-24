<?php

include "../conn.php";

if($_POST){

    //  var_dump($_POST);
    // die();

    $user_admin_id=$_POST['id_user'];

    $user_name=$_POST['user_name'];

    $user_username=$_POST['user_username'];

    $user_password=$_POST['user_password'];

    $user_role=$_POST['user_role'];
    
    $update=mysqli_query($conn, "UPDATE `user_admin` SET `name`='".$user_name."',`username`='".$user_username."',`password`='".$user_password."',`role`='".$user_role."' WHERE `user_admin`.`id_user_admin`='".$user_admin_id."'") or die(mysqli_error($conn));

    if($update){
         echo "<script>alert('Success updated user');location.href='user_list.php';</script>";
    }else{
        echo "<script>alert('Failed updating user');location.href='user_list.php'?id_user=".$user_admin_id."';</script>";
    }

                
    }
?>