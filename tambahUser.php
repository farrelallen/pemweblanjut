<?php
require '../../database/connect.php';

//ketika button submit dipencet
if (isset($_POST["submit"])) {
    //Cek data masuk atau tidak
    if (tambahUser($_POST) > 0) {
        echo "<script>
        alert('User berhasil ditambahkan!');
        document.location.href = 'user.php';
        </script>";
    } else {
        echo "<script>
        alert('User gagal ditambahkan!');
        document.location.href = 'user.php';
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah User</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link href="../../css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
</head>

<body>
    <div class="container-fluid">
        <h1 class="mt-4">Tambah Produk</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="../../dashboard_admin.php">Menu Utama</a></li>
            <li class="breadcrumb-item"><a href="../user/user.php">User</a></li>
            <li class="breadcrumb-item active">Tambah User</li>
        </ol>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-grup">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" id="username" placeholder="Masukan username . . . " required>
            </div>
            <div class="form-grup">
                <label for="password">Password</label>
                <input type="text" name="password" class="form-control" id="password" placeholder="Masukan password . . . " required>
            </div>
            <div class="form-grup">
                <label for="status">status</label>
                <select name="status" id="status" placeholder= "Pilih status" class="form-select form-select-sm" aria-label=".form-select-sm example" required>
                    <option value="1">admin</option>
                    <option value="2">customer</option>
                </select>
                <!--<label for="status">status</label>
                <input type="text" name="status" class="form-control" id="status" placeholder="Admin/Customer " required>-->
            </div>
            <button type="submit" class="btn btn-primary mt-3" name="submit">Tambah</button>
        </form>
    </div>
</body>

</html>