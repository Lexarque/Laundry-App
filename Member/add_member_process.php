<?php

if($_POST){

    $member_name=$_POST['member_name'];

    $member_address=$_POST['member_address'];

    $member_gender=$_POST['member_gender'];

    $member_phoneNum=$_POST['member_phone_number'];
    
    include "../conn.php";

        $insert=mysqli_query($conn,"insert into member (name,address,genders,phone_number) value ('".$member_name."','".$member_address."','".$member_gender."','".$member_phoneNum."')") or die(mysqli_error($conn));

        if($insert){

            echo "<script>alert('Successfully added member');location.href='member_list.php';</script>";

        } else {

            echo "<script>alert('Failed adding member');location.href='member_list.php';</script>";
        }
    }

?>