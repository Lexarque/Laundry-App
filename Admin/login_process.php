<?php 

    if($_POST){

        $username=$_POST['username_user'];

        $password=$_POST['password_user'];

            include "../conn.php";

            $qry_login=mysqli_query($conn,"select * from user_admin where username = '".$username."' and password = '".md5($password)."'");

            if(mysqli_num_rows($qry_login)>0){

                $dt_login=mysqli_fetch_array($qry_login);

                session_start();

                $_SESSION['id_user_admin']=$dt_login['id_user_admin'];

                $_SESSION['name']=$dt_login['name'];

                $_SESSION['role']=$dt_login['role'];

                $_SESSION['login_status']=true;
                // var_dump($_SESSION); die();
                header("location: ../Member/member_list.php");

            } else {

                echo "<script>alert('Wrong Username or Password, please try again');location.href='login.php';</script>";

            }

        

    }

?>