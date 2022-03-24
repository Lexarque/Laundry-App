<!DOCTYPE html>

<html>

<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title></title>

</head>

<body>

    <?php
        include "../Admin Page/sidenav.php"
    ?>

    <h3 class="text-center py-2">Member List</h3>

    <div class="container">
        <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>CUSTOMER NAMES</th>
                <th>ADDRESS</th>
                <th>GENDERS</th>
                <th>PHONE NUMBER</th>
                <?php if($_SESSION['role'] == 'admin'){?>
                <th>ACTION</th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php 

    include "../conn.php";

    $qry_member=mysqli_query($conn,"SELECT * FROM member");

    $no=0;

    while($data_member=mysqli_fetch_array($qry_member)){

    $no++;?>
    <tr>              
        <td><?=$no?></td>
        <td><?=$data_member['name']?></td> 
        <td><?=$data_member['address']?></td>
        <td><?=$data_member['genders']?></td>
        <td><?=$data_member['phone_number']?></td>
    <?php

    if($_SESSION['role'] == 'admin'){

    ?>
        <td>
        <a href="update_member.php?id_member=<?=$data_member['id_member']?>" class="btn btn-success">Modify</a> 
        | <a href="delete_member.php?id_member=<?=$data_member['id_member']?>" onclick="return confirm('Are you sure you want to delete this member?')" class="btn btn-danger">Delete</a>
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
    <a href="add_member.php" class="btn btn-success">Add member</a>  
    <?php } ?>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>