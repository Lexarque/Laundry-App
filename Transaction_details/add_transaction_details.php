<?php
include "../conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../Member/style/style_member.css" rel="stylesheet">
</head>
<body>
    <div class="global-container">
        <div class="card login-form p-3 col-12 col-sm-6 col-md-4">
            <div class="card-body">
                <h1 class="text-center pb-2"><img src="../Img/CleanHolic_SM.svg" alt="small-logo"></h1>
                <div class="card-text mt-3">
                    <form action="add_transaction_details_process.php" method="post">
                    <div class="mb-3">
                            <label for="InputTransactionsID" class="form-label">Transactions ID : </label>
                            <select class="form-control" id="InputTransactionsID" name="id_transactions" placeholder="Add Transactions ID">
                            <option disabled selected>Transactions ID : </option>
                            <?php
                                 $qry_get_transactions=mysqli_query($conn,"select * from transactions join member on member.id_member=transactions.id_member");
                    
                                 while($dt_get_transactions=mysqli_fetch_array($qry_get_transactions)){
                                    echo '<option value="'.$dt_get_transactions['id_transactions'].'">'.$dt_get_transactions['name'].' = '.$dt_get_transactions['date'].'</option>';
                                 }
                            ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="InputPackagesID" class="form-label">Packages ID : </label>
                            <select class="form-control" id="InputPackagesID" name="id_packages" placeholder="Add Package Type" required>
                            <option disabled selected>Package Type : </option>
                            <?php
                                 $qry_get_packages=mysqli_query($conn,"select * from packages");
                    
                                 while($dt_get_packages=mysqli_fetch_array($qry_get_packages)){
                                    echo '<option value="'.$dt_get_packages['id_packages'].'">'.$dt_get_packages['package_type'].'</option>';
                                 }
                            ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="InputQty" class="form-label">Quantity : </label>
                            <input type="number" placeholder="Quantity : " class="form-control" id="InputQty" name="qty">
                        </div>
                        <button type="submit" class="btn btn-danger d-block col-12 pt-2">Submit</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>