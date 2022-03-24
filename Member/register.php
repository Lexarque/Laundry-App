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
                    <form action="register_process.php" method="post">
                        <div class="mb-3">
                            <label for="InputName" class="form-label">Name : </label>
                            <input type="text" class="form-control" id="InputName" name="name_member" required>
                        </div>
                        <div class="mb-3">
                            <label for="InputAddress" class="form-label">Address : </label>
                            <input type="text" class="form-control" id="InputAddress" name="address_member" required>
                        </div>
                        <div class="mb-3"> 
                            <label for="InputGender" class="form-label">Gender : </label>
                            <select name="gender_member" class="form-control" id="InputGender">
                            <option value="" disabled selected>Gender : </option>
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="InputPhoneNumb" class="form-label">Phone Number : </label>
                            <input type="number" class="form-control" id="InputPhoneNumb" name="phone_number_member" required>
                        </div>
                        <button type="submit" class="btn btn-danger d-block col-12 pt-2">Submit</button>
                    </form>
                    <hr>
                    <div class="row">
                        <div class="text-center">Already Have An Account ?<a href="login.php"> Login</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>