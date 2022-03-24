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
                    <form action="update_transaction_process.php" method="post">
                    <?php 

                    $qry_get=mysqli_query($conn,"select * from transactions where id_transactions = '".$_GET['id_transactions']."'");
                    
                    $dt_get=mysqli_fetch_array($qry_get);
    
                    // var_dump($_POST);
                    // die();
                    
                    ?>
                    <input type="hidden" name="id_transactions" value= "<?=$dt_get['id_transactions']?>">
                    <div class="mb-3">
                            <label for="InputMemberName" class="form-label">Update Member Name : </label>
                            <select class="form-control" id="InputMemberName" name="member_name" placeholder="Update Member Name">
                            <option value="<?=$dt_get['id_member']?>" selected>Member Name : </option>
                            <?php
                                 $qry_get_member=mysqli_query($conn,"select * from member");
                    
                                 while($dt_get_member=mysqli_fetch_array($qry_get_member)){
                                    echo '<option value="'.$dt_get_member['id_member'].'">'.$dt_get_member['name'].'</option>';
                                 }
                            ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="InputUserName" class="form-label">Update User Name : </label>
                            <select class="form-control" id="InputUserName" name="user_name" placeholder="Update User Name">
                            <option value="<?=$dt_get['id_user']?>" selected>User Name : </option>
                            <?php
                                 $qry_get_user=mysqli_query($conn,"SELECT * FROM `user_admin` WHERE `role` = 'cashier'");
                    
                                 while($dt_get_user=mysqli_fetch_array($qry_get_user)){
                                    echo '<option value="'.$dt_get_user['id_user_admin'].'">'.$dt_get_user['name'].'</option>';
                                 }
                            ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="InputDueDate" class="form-label">Due Date : </label>
                            <input type="date" class="form-control" id="InputDueDate" name="due_date" placeholder="Fix Due Date" value="<?=$dt_get['due_date']?>">
                        </div>
                        <div class="mb-3">
                            <label for="InputPaymentDate" class="form-label">Payment Date : </label>
                            <input type="date" class="form-control" id="InputPaymentDate" name="payment_date" placeholder="Input Payment Date" value="<?=$dt_get['payment_date']?>">
                        </div>
                        <div class="mb-3">
                            <label for="InputStatus" class="form-label">Transaction Status : </label>
                            <select class="form-control" id="InputStatus" name="transactions_status" placeholder="Update Status" required>
                            <option value="<?=$dt_get['status']?>" selected>Transaction Status : </option>
                            <option value="new">New</option>
                            <option value="processed">Process</option>
                            <option value="done">Done</option>
                            <option value="picked_up">Picked Up</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="InputPaymentStatus" class="form-label">Payment Status : </label>
                            <select class="form-control" id="InputPaymentStatus" name="transactions_payment_status" placeholder="Update Payment Status" required>
                            <option value="<?=$dt_get['payment_status']?>" selected>Payment Status : </option>
                            <option value="paid">Paid</option>
                            <option value="not_paid">Not Paid</option>
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