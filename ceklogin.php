<?php
    session_start();
    include 'database/connect.php';

    $username = $_POST['username'];
    $password = $_POST['password'];


    $login = mysqli_query($db, "SELECT * FROM user WHERE username='$username' and password='$password'");
    $cek = mysqli_num_rows($login);
    if($cek > 0){

    $data = mysqli_fetch_assoc($login);
        if ($data['level']=="Admin"){
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "Admin";
            $_SESSION['status'] = "login";
            header("location:dashboard_admin.php");
        } else if ($data['level']=="Customer") {
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "Customer";
            $_SESSION['status'] = "login";
            header("location:dashboard_cust.php");
        }        
    }
    else{

        echo "<script> alert ('login gagal ! username dan password tidak benar ');</script>";
        echo "<script> window.location = 'login.php';</script>";
    }
?>