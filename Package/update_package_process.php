<?php

include "../conn.php";

if($_POST){

    // var_dump($_POST);
    // die();

    $package_id=$_POST['id_packages'];

    $package_type=$_POST['packages_type'];

    $package_price=$_POST['packages_price'];
    
    $update=mysqli_query($conn, "UPDATE `packages` SET `package_type` = '".$package_type."', `price` = '".$package_price."' WHERE `packages`.`id_packages` = '".$package_id."'") or die(mysqli_error($conn));

    if($update){
         echo "<script>alert('Success updated package');location.href='package_list.php';</script>";
    }else{
        echo "<script>alert('Failed updating package');location.href='package_list.php'?id_packages=".$id_package."';</script>";
    }

                
    }
?>