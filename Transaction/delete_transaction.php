<?php 

    include "../conn.php";

    if($_GET['id_transactions']){

        $del_transaction=mysqli_query($conn,"delete from transactions where transactions.id_transactions='".$_GET['id_transactions']."'");
    
        if($del_transaction){
            echo "<script>alert('Success deleted transaction');location.href='transaction_list.php';</script>";
        }else{
            echo "<script>alert('Failed deleting transactions');location.href='transaction_list.php';</script>";
        }
    
    }

?>