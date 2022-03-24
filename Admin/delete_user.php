<?php 

    include "../conn.php";

    if($_GET['id_user_admin']){

        $del_user=mysqli_query($conn,"DELETE FROM `user_admin` WHERE `user_admin`.`id_user_admin`='".$_GET['id_user_admin']."'");
    
        if($del_user){
            echo "<script>alert('Success deleted user');location.href='user_list.php';</script>";
        }else{
            echo "<script>alert('Failed deleting user');location.href='user_list.php';</script>";
        }
    
    }

?>