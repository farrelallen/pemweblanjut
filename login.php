<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Account</title>
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
              <p class="login-card-description" style="font-family: Arial; font-size: 35px;">Sign into your account</p>
              <form class="formlogin" method="POST" action="ceklogin.php">
                  <div class="form-group">
                    <label class="label-user" for="username"></label>
                    <input class="form-control" type="text" placeholder="Username" name="username" required>
                  </div>
                  <div class="form-group mb-4">
                  <label class="label-pass"></label>
                <input class="form-control" type="password" placeholder="Password" name="password" required>
                  </div>
                  <input class="btn btn-block login-btn mb-4" type="submit"  class="btn-login"></button>
                </form>
                <p class="login-card-footer-text">Don't have an account? <a href="register.php" class="text-reset">Register here</a></p>
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
