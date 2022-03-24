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
                    <form action="update_package_process.php" method="post">
                    <?php 

                    include "../conn.php";
                    $qry_get=mysqli_query($conn,"select * from packages where id_packages = '".$_GET['id_packages']."'");
                    
                    $dt_get=mysqli_fetch_array($qry_get);

                    // var_dump($_POST);
                    // die();
                    
                    ?>
                     <input type="hidden" name="id_packages" value= "<?=$dt_get['id_packages']?>">
                        <div class="mb-3">
                            <label for="InputPackageType" class="form-label">Package Type : </label>
                            <select class="form-control" id="InputPackageType" name="packages_type" placeholder="Update Package Type" required>
                            <option value="<?=$dt_get['package_type']?>" selected>Package Type : </option>
                            <option value="by_weight">By Weight</option>
                            <option value="blankets">Blankets</option>
                            <option value="bed_cover">Bed Cover</option>
                            <option value="shirts">Shirts</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="InputPrice" class="form-label">Price : </label>
                            <input type="number" class="form-control" id="InputPrice" name="packages_price" placeholder="Update Price" value="<?=$dt_get['price']?>" required>
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