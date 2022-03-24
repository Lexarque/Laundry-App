<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style/style_member.css" rel="stylesheet">
</head>
<body>
    <div class="global-container">
        <div class="card login-form p-3 col-12 col-sm-6 col-md-4">
            <div class="card-body">
                <h1 class="text-center pb-2"><img src="../Img/CleanHolic_SM.svg" alt="small-logo"></h1>
                <div class="card-text mt-3">
                    <form action="update_member_process.php" method="post">
                    <?php 

                    include "../conn.php";
                    $qry_get=mysqli_query($conn,"select * from member where id_member = '".$_GET['id_member']."'");
                    
                    $dt_get=mysqli_fetch_array($qry_get);

                    // var_dump($_POST);
                    // die();
                    
                    ?>
                     <input type="hidden" name="id_member" value= "<?=$dt_get['id_member']?>">
                        <div class="mb-3">
                            <label for="InputMemberName" class="form-label">Name : </label>
                            <input type="text" class="form-control" id="InputMemberName" name="member_name" placeholder="Update Name" value="<?=$dt_get['name']?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="InputMemberAddress" class="form-label">Address : </label>
                            <input type="text" class="form-control" id="InputMemberAddress" name="member_address" placeholder="Update Address" value="<?=$dt_get['address']?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="InputMemberGender" class="form-label">Gender : </label>
                            <select class="form-control" id="InputGender" name="member_gender" placeholder="Update Gender" required>
                            <option  value="<?=$dt_get['genders']?>" disabled selected>Gender : </option>
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="InputMemberPhoneNumber" class="form-label">Phone Number : </label>
                            <input type="number" class="form-control" id="InputMemberPhoneNumber" name="member_phone_number" placeholder="Update Phone Number" value="<?=$dt_get['phone_number']?>" required>
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