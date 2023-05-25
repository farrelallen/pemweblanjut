<?php
$servername = "localhost";
$database = "uaspwl";
$username = "root";
$password ="";

//koneksi ke database:
$db = mysqli_connect($servername, $username, $password, $database);

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

function query($query){
    global $db;
    $hasil = mysqli_query($db, $query);
    $baris = [];
    while ($row = mysqli_fetch_assoc($hasil)){
        $baris[] = $row;
    }

    return $baris;
}

//ambil data:
function tambah($data){
    global $db;
    $namaProduk = htmlspecialchars($data["nama_produk"]);
    $harga = htmlspecialchars($data["harga"]);
    $descProduk = htmlspecialchars($data["deskripsi_produk"]);

    // upload gambar
    $fotoProduk = upload();
    if(!$fotoProduk){
        return false;
    }

    //Masukin data
    $value = "INSERT INTO produk VALUES ('','$namaProduk','$harga','$descProduk','$fotoProduk')";
    mysqli_query($db, $value);

    return mysqli_affected_rows($db);
}

// Fungsi upload gambar
function upload(){
    $namaFile = $_FILES["foto_produk"]["name"];
    $sizeFile = $_FILES["foto_produk"]["size"];
    $error = $_FILES["foto_produk"]["error"];
    $tmpName = $_FILES["foto_produk"]["tmp_name"];

    // Cek apakah yang diupload adalah gambar
    $ekstensiValid = ["jpg","jpeg","png"];
    $ekstensiFotoProduk = explode(".","$namaFile");
    $ekstensiFotoProduk = strtolower(end($ekstensiFotoProduk));
    if(!in_array($ekstensiFotoProduk,$ekstensiValid)){
        echo "<script>
        alert('Yang anda upload bukan gambar!');
        document.location.href = 'TambahBarang.php';
        </script>";
        die();
    }

    //cek ukuran foto terlalu besar
    if($sizeFile > 500000){
        echo "<script>
        alert('Foto yang anda upload terlalu besar!');
        document.location.href = 'TambahBarang.php';
        </script>";
        return false;
    }

    //generate nama baru
        $namafileBaru = uniqid();
        $namafileBaru .= '.';
        $namafileBaru .= $ekstensiFotoProduk;

    //gambar siap diupload
    move_uploaded_file($tmpName, '../img/'.$namaFile);
    return $namaFile;
}

//Hapus data
function hapus($id){
    global $db;
    $value = "DELETE FROM produk WHERE id_produk = $id ";
    mysqli_query($db, $value);

    return mysqli_affected_rows($db);

}

//fungsi search pada form pencarian
function cari($keyword){
    $cari = "SELECT * FROM produk WHERE nama_produk LIKE '%$keyword%'";
    return query($cari);
}

function cariUser($keyword){
    $cari = "SELECT * FROM user WHERE username LIKE '%$keyword%'";
    return query($cari);
}

function ubah($data){
    global $db;

    $id = $data["id_produk"];
    $namaProduk = htmlspecialchars($data["nama_produk"]);
    $harga = htmlspecialchars($data["harga"]);
    $descProduk = htmlspecialchars($data["deskripsi_produk"]);
    $gambarlama = strip_tags($data['foto_produk']);

    //cek foto lama
    if($_FILES['foto_produk']['error']== 4){
        $fotoProduk = $gambarlama;
    }else{
        $fotoProduk = upload();
    }

    //Masukin data
    $value = "UPDATE produk SET nama_produk = '$namaProduk', harga = '$harga', deskripsi_produk = '$descProduk', foto_produk = '$fotoProduk' WHERE id_produk = '$id' ";
    mysqli_query($db, $value);

    return mysqli_affected_rows($db);
}

function editUser($data){
    global $db;

    $id = $data['id'];
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $level = htmlspecialchars($data["level"]);

    $value = "UPDATE user SET username = '$username', password = '$password', level = '$level' WHERE id ='$id' ";

    mysqli_query($db, $value);

    return mysqli_affected_rows($db);  

}

function edit($data){
    global $db;
    //mengambil data dari table 
    $id = $_POST["id"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $level = $_POST["level"];

    //query insert data
    $query = "UPDATE user SET 
                username = '$username',
                password = '$password',
                level = '$level'
                WHERE id = '$id'
            ";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);  
}

function tambahUser($data){
    global $db;

    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $level = htmlspecialchars($data["level"]);

    $value = "INSERT INTO user VALUES ('','$username','$password','$level')";
    mysqli_query($db, $value);

    return mysqli_affected_rows($db);
}


function hapusUser($id){
    global $db;
    $value = "DELETE FROM user WHERE id = $id ";
    mysqli_query($db, $value);

    return mysqli_affected_rows($db);

}

?>