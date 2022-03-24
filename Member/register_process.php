<?php

if($_POST){

    $name=$_POST['name_member'];
    $address=$_POST['address_member'];
    $gender=$_POST['gender_member'];
    $phone_number=$_POST['phone_number_member'];
    
    include "../conn.php";

        $insert=mysqli_query($conn,"insert into member (name,address,genders,phone_number) value ('".$name."','".$address."','".$gender."','".$phone_number."')") or die(mysqli_error($conn));

        if($insert){

            echo "<script>alert('Successfully registered your account');location.href='login.php';</script>";

        } else {

            echo "<script>alert('Failed registering your account');location.href='register.php';</script>";
        }
    }

?>