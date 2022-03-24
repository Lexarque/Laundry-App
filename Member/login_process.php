<?php 

    if($_POST){

        $phone_number=$_POST['phone_number'];

            include "../conn.php";

            $qry_login=mysqli_query($conn,"select * from member where phone_number = '".$phone_number."'");

            if(mysqli_num_rows($qry_login)>0){

                $dt_login=mysqli_fetch_array($qry_login);

                session_start();

                $_SESSION['id_member']=$dt_login['id_member'];

                $_SESSION['name']=$dt_login['name'];

                $_SESSION['status_login']=true;

                header("location: ../Website Page/index.php");

            } else {

                echo "<script>alert('Wrong Username or Password, please try again');location.href='login.php';</script>";

            }

        

    }

?>