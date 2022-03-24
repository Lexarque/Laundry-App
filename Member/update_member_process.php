<?php

include "../conn.php";

if($_POST){

    // var_dump($_POST);
    // die();

    $member_id=$_POST['id_member'];

    $member_name=$_POST['member_name'];

    $member_address=$_POST['member_address'];

    $member_gender=$_POST['member_gender'];

    $member_phoneNum=$_POST['member_phone_number'];
    
    $update=mysqli_query($conn, "UPDATE `member` SET `name` = '".$member_name."', `address` = '".$member_address."', `genders` = '".$member_gender."', `phone_number` = '".$member_phoneNum."' WHERE `member`.`id_member` = '".$member_id."'") or die(mysqli_error($conn));

    if($update){
         echo "<script>alert('Success updated member');location.href='member_list.php';</script>";
    }else{
        echo "<script>alert('Failed updating member');location.href='member_list.php'?id_member=".$id_member."';</script>";
    }

                
    }
?>