<!DOCTYPE html>

<html>

<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title></title>

</head>

<body>

    <?php include "../Admin Page/sidenav.php"?>

    <h3 class="text-center py-2">Transaction Detail List</h3>

    <div class="container">
    <table class="table table-hover table-striped">

<thead>

    <tr>

        <th>NO</th>
        <th>TRANSACTIONS ID</th>
        <th>PACKAGES ID</th>
        <th>QUANTITY</th>
        <th>SUBTOTAL</th>
        <?php 
        if($_SESSION['role']=='admin'){
        ?>
        <th>ACTION</th>
        <?php } ?>

    </tr>

</thead>

<tbody>

    <?php 

    include "../conn.php";

    $qry_transaction_details=mysqli_query($conn,"SELECT * FROM transaction_details");

    $no=0;

    while($data_transaction_details=mysqli_fetch_array($qry_transaction_details)){

    $no++;?>

<tr>              
        
    <td><?=$no?></td>
    <td><?=$data_transaction_details['id_transactions']?></td> 
    <td><?=$data_transaction_details['id_packages']?></td>
    <td><?=$data_transaction_details['qty']?></td>
    <td><?=$data_transaction_details['subtotal']?></td>
    <?php 
    if($_SESSION['role']=='admin'){
    ?>
    <td>
        <a href="update_transaction_details.php?id_transaction_details=<?=$data_transaction_details['id_transaction_details']?>" class="btn btn-success">Modify</a> 
        | <a href="delete_member.php?id_transaction_details=<?=$data_transaction_details['id_transaction_details']?>" onclick="return confirm('Are you sure you want to delete this transaction_details?')" class="btn btn-danger">Delete</a>
    </td>
    <?php } ?>

</tr>

<?php
    }
?>

</tbody>

</table>
    </div>
    <?php
        if($_SESSION['role']=='admin'){
    ?>
    <div class="container">
    <a href="add_transaction_details.php" class="btn btn-success">Add transaction details</a>  
    </div>
    <?php } ?>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>