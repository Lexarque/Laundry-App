<!DOCTYPE html>

<html>

<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Package List</title>

</head>

<body>

    <?php include "../Admin Page/sidenav.php" ?>

    <h3 class="text-center py-2">Package List</h3>

    <div class="container">
    <table class="table table-hover table-striped">

<thead>

    <tr>

        <th>NO</th>
        <th>PACKAGE TYPE</th>
        <th>PRICE</th>
        <?php

        if($_SESSION['role'] == 'admin'){

        ?>
        <th>ACTION</th>
        <?php } ?>
    </tr>

</thead>

<tbody>

    <?php 

    include "../conn.php";

    $qry_package=mysqli_query($conn,"SELECT * FROM packages");

    $no=0;

    while($data_package=mysqli_fetch_array($qry_package)){

    $no++;?>

<tr>              
        
    <td><?=$no?></td>
    <td><?=$data_package['package_type']?></td>
    <td><?=$data_package['price']?></td>
    <?php if($_SESSION['role']=='admin'){ ?>
    <td>
        <a href="update_package.php?id_packages=<?=$data_package['id_packages']?>" class="btn btn-success">Modify</a> 
        | <a href="delete_package.php?id_packages=<?=$data_package['id_packages']?>" onclick="return confirm('Are you sure you want to delete this package?')" class="btn btn-danger">Delete</a>
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
    <a href="register.php" class="btn btn-success">Add package</a>  
    </div>
    <?php } ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>