<?php

include "../conn.php";

if($_POST){

    // var_dump($_POST);
    // die();

    $transaction_details_id=$_POST['id_transaction_details'];

    $transaction_id=$_POST['transactions_id'];

    $package_id=$_POST['packages_id'];

    $qty=$_POST['quantity'];
    
    $update=mysqli_query($conn, "UPDATE `transaction_details` SET `id_transactions` = '".$transaction_id."', `id_packages` = '".$package_id."', `qty` = '".$qty."' WHERE `transaction_details`.`id_transaction_details` = '".$transaction_details_id."'") or die(mysqli_error($conn));

    if($update){
         echo "<script>alert('Success updated transaction details');location.href='transaction_detail_list.php';</script>";
    }else{
        echo "<script>alert('Failed updating package');location.href='transaction_detail_list.php'?id_transaction_details=".$transaction_details_id."';</script>";
    }

                
    }
?>