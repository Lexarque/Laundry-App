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
                    <form action="update_user_process.php" method="post">
                    <?php 

                    include "../conn.php";
                    $qry_get=mysqli_query($conn,"select * from user_admin where id_user_admin = '".$_GET['id_user_admin']."'");
                    
                    $dt_get=mysqli_fetch_array($qry_get);

                    // var_dump($_POST);
                    // die();
                    
                    ?>
                     <input type="hidden" name="id_user" value= "<?=$dt_get['id_user_admin']?>">
                        <div class="mb-3">
                            <label for="InputUserName" class="form-label">Name : </label>
                            <input type="text" class="form-control" id="InputUserName" name="user_name" placeholder="Update User Name" value="<?=$dt_get['name']?>">
                        </div>
                        <div class="mb-3">
                            <label for="InputUserUsername" class="form-label">Username : </label>
                            <input type="text" class="form-control" id="InputUserUsername" name="user_username" placeholder="Update User Username" value="<?=$dt_get['username']?>">
                        </div>
                        <div class="mb-3">
                            <label for="InputUserPassword" class="form-label">Password : </label>
                            <input type="password" class="form-control" id="InputUserPassword" name="user_password" placeholder="Update User Password" value="<?=$dt_get['password']?>">
                        </div>
                        <div class="mb-3">
                            <input type="checkbox" id="pass_toggle" onclick="ShowOrHide()">
                            <script>
                            function ShowOrHide() {
                            var x = document.getElementById("InputUserPassword");
                            if (x.type === "password") {
                                x.type = "text";
                            } else {
                                x.type = "password";
                            }
                        }
                            </script>
                            <label for="pass_toggle">Show Password</label>
                        </div>
                        <div class="mb-3">
                            <label for="InputUserRole" class="form-label">Role : </label>
                            <select class="form-control" id="InputUserRole" name="user_role" placeholder="Update Role">
                            <option value="<?=$dt_get['role']?>" selected>Role : </option>
                            <option value="admin">Admin</option>
                            <option value="cashier">Cashier</option>
                            </select>
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