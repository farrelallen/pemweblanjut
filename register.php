<?php
require 'database/connect.php';

//ketika button submit dipencet
if (isset($_POST["submit"])) {
    //Cek data masuk atau tidak
    if (tambahUser($_POST) > 0) {
        echo "<script>
        alert('User berhasil ditambahkan!');
        document.location.href = 'login.php';
        </script>";
    } else {
        echo "<script>
        alert('User gagal ditambahkan!');
        document.location.href = 'register.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register Account</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/login.css">
  <link rel="icon" href="assets/kawanlogo.png" type="" />
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0" style="background: linear-gradient(to bottom right, #137576, #EBD8C8);">
    <div class="container">
      <div class="card login-card" style="background-color: #EBD8C8;">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="assets/kawanlogo.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <p class="login-card-description" style="font-family: Arial; font-size: 35px;">Sign up your account</p>
              <form action="" method="post" enctype="multipart/form-data">
            <div class="form-grup">
                <input type="text" name="username" class="form-control" id="username" placeholder="Masukan username . . . " required>
            </div>
            <div class="form-grup">
                <input type="text" name="password" class="form-control" id="password" placeholder="Masukan password . . . " required>
            </div>
            <div class="form-grup">
                <input type="hidden" name="level" class="form-control" id="level" value="Customer">
                <!--<label for="level">Level</label>
                <input type="text" name="level" class="form-control" id="level" placeholder="Admin/Customer " required>-->
            </div>
            <button type="submit" class="btn btn-block login-btn mb-4" name="submit" value="Create Account">Tambah</button>
        </form>
                <p class="login-card-footer-text">Already have an account? <a href="login.php" class="text-reset">Login</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
