<?php
  session_start();

  if($_SESSION['login_status']!=true){
    header("location: ../Admin/login.php");

  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include "../conn.php"
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style_sidenav.css">
</head>
<body>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-vertical navbar-light bg-light" style="box-shadow:5px 5px 5px -5px">
  <div class="container-fluid">
    <div class="navbar-brand mb-0" href="#"><img src="../Img/CleanHolic_SM.svg" alt=""></div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php
            if($_SESSION['role'] == 'admin'){ 
        ?>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../Admin/user_list.php">User List</a>
        </li>
        <?php } ?>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../Member/member_list.php">Member List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../Package/package_list.php">Packages List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../Transaction/transaction_list.php">Transaction List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../Transaction_details/transaction_detail_list.php">Transaction Details List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active justify-content-end" aria-current="page" href="../logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>