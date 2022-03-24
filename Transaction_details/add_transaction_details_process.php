<?php

include "../conn.php";

if($_POST){

    $id_transactions=$_POST['id_transactions'];

    $id_packages=$_POST['id_packages'];
    
    $qty=$_POST['qty'];

    $qry_get_packages=mysqli_query($conn,"select packages.price from transaction_details join packages on packages.id_packages=transaction_details.id_packages");

    $qry_get=mysqli_fetch_array($qry_get_packages);

    $subtotal=$qry_get['price'] * $qty;

        $insert=mysqli_query($conn,"insert into transaction_details (id_transactions,id_packages,subtotal,qty) value ('".$id_transactions."','".$id_packages."','".$subtotal."', '".$qty."')") or die(mysqli_error($conn));

        if($insert){

            echo "<script>alert('Successfully added transaction details');location.href='transaction_detail_list.php';</script>";

        } else {

            echo "<script>alert('Failed adding transaction details');location.href='transaction_detail_list.php';</script>";
        }
    }

?>