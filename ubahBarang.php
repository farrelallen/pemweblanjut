<?php
require '../database/connect.php';
$idProduk = $_GET["id_produk"];

//query data mahasiswa
$Produk = query("SELECT * FROM produk WHERE id_produk = $idProduk")[0];

//ketika button submit dipencet
if (isset($_POST["submit"])) {
    //Cek data berhasil diubah atau tidak
    if (ubah($_POST) > 0) {
        echo "<script>
        alert('Produk berhasil diubah!');
        document.location.href = 'Barang.php';
        </script>";
    } else {
        echo "<script>
        alert('Produk gagal diubah!');
        document.location.href = 'Barang.php';
        </script>";
        die;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
</head>

<body>
    <div class="container-fluid">
        <h1 class="mt-4">Ubah Produk</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="../dashboard_admin.php">Menu Utama</a></li>
            <li class="breadcrumb-item"><a href="barang.php">Produk</a></li>
            <li class="breadcrumb-item active">Ubah Produk</li>
        </ol>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_produk" value="<?= $Produk["id_produk"] ?>">
            <div class="form-grup">
                <label for="nama_produk">Nama Produk</label>
                <input type="text" name="nama_produk" class="form-control" id="nama_produk" placeholder="Masukan nama produk . . . " required value="<?= $Produk["nama_produk"] ?>">
            </div>
            <div class="form-grup">
                <label for="harga">Harga (Rp)</label>
                <input type="number" name="harga" class="form-control" id="harga_produk" placeholder="Masukan harga produk . . . " required value="<?= $Produk["harga"] ?>" > 
            </div>
            <div class="form-grup">
                <label for="deskripsi">Deskripsi Produk</label>
                <textarea class="form-control" name="deskripsi_produk" class="form-control" id="deskripsi" rows=5 placeholder="Masukan deskripsi produk . . . " required><?= $Produk["deskripsi_produk"] ?></textarea>
            </div>
            <div class="form-grup">
                <label for="foto">Foto Produk</label>
                <input type="file" name="foto_produk" class="form-control" id="foto" require value="<?= $Produk["foto_produk"] ?>" >
            </div>
            <button type="submit" class="btn btn-primary mt-3" name="submit">Ubah</button>
        </form>
    </div>
</body>

</html>