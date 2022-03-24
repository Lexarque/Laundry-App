<?php

if($_POST){

    $member_name=$_POST['member_name'];

    $user_name=$_POST['user_name'];
    
    $due_date=$_POST['due_date'];
    
    include "../conn.php";

        $insert=mysqli_query($conn,"insert into transactions (id_member,id_user,due_date) value ('".$member_name."','".$user_name."','".$due_date."')") or die(mysqli_error($conn));

        if($insert){

            echo "<script>alert('Successfully added transaction');location.href='transaction_list.php';</script>";

        } else {

            echo "<script>alert('Failed adding transaction');location.href='transaction_list.php';</script>";
        }
    }

?>