<?php
require 'database/connect.php';

$produk = query("SELECT * FROM produk");

// Ketika button submit dipencet
if (isset($_POST["submit"])) {
    //Cek data berhasil diubah atau tidak
    if (ubah($_POST) > 0) {
        echo "<script>
        alert('Produk berhasil diubah!');
        document.location.href = 'dashboard_cust.php';
        </script>";
    } else {
        echo "<script>
        alert('Produk gagal diubah!');
        document.location.href = 'dashboard_cust.php';
        </script>";
        die;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-Fd4wFATM8F+pzaxuU99oc9jsB86sBSVgfaLp6O/qE1fBCXOoyx8i8k9T9fC9F+ZTcgjMlkHG+Uh8zyI+jQt+MQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Kawan Kopi co.</title>
    <link rel="icon" href="assets/kawanlogo.png" type="" />
</head>

<body>
    <div class="container-fluid">
        <h1 class="mt-4">Menu Tersedia</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="../client/dashboard_cust.php">Menu Utama</a></li>
            <li class="breadcrumb-item">Produk</li>
        </ol>
        <table class="table table-hover">
            <thead>
                <tr class="text-center" role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="offline" rowspan="1" colspan="1" style="width: 99px;" aria-sort="ascending" aria-label="No: activate to sort column descending">No.</th>
                    <th class="sorting" tabindex="0" aria-controls="offline" rowspan="1" colspan="1" style="width: 147px;" aria-label="Nama: activate to sort column ascending">Gambar</th>
                    <th class="sorting" tabindex="0" aria-controls="offline" rowspan="1" colspan="1" style="width: 147px;" aria-label="Nama: activate to sort column ascending">Nama Produk</th>
                    <th class="sorting" tabindex="0" aria-controls="offline" rowspan="1" colspan="1" style="width: 111px;" aria-label="NIK: activate to sort column ascending">Harga</th>
                    <th class="sorting" tabindex="0" aria-controls="offline" rowspan="1" colspan="1" style="width: 139px;" aria-label="Email: activate to sort column ascending">Deskripsi</th>
                    <th class="sorting" tabindex="0" aria-controls="offline" rowspan="1" colspan="1" style="width: 118px;" aria-label="Aksi: activate to sort column ascending">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $nomor = 1; ?>
                <?php foreach ($produk as $row) : ?>
                    <tr class="odd">
                        <td class="text-center"><?= $nomor; ?></td>
                        <td><img src="img/<?php echo $row["foto_produk"]; ?>" width="100"></td>
                        <td><?= $row['nama_produk']; ?></td>
                        <td>Rp. <?= number_format($row['harga']); ?></td>
                        <td><?= substr($row['deskripsi_produk'], 0, 50), ""; ?></td>
                        <td>
                        <button type="submit" class="btn btn-primary mt-3" name="submit">Beli</button>
                        </td>
                    </tr>
                    <?php $nomor++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="footer" style="background-color: #EBD8C8">
        <div class="container pt-5" style="background-color: #EBD8C8">
            <div class="d-flex justify-content-between">
                <div class="d-flex flex-column ml-5">
                    <p class="desc font-weight-bold">There's Kawan In Every Moments</p>
                    <p class="desc">Open Everyday | 08.00 - 23.00 WIB</p>
                    <p class="desc">Contact Us</p>
                    <div class="d-flex align-items-center">
                        <span class="desc font-weight-bold">Ikuti kami di</span>
                        <a href="https://www.youtube.com/@kawankopi5810/featured">
                            <img class="icon-media mr-2 ml-2" src="assets/youtube.png" alt="YouTube" />
                        </a>
                        <a href="https://www.instagram.com/kawankopi.co/?hl=en">
                            <img class="icon-media mr-2" src="assets/instagram.png" alt="Instagram" />
                        </a>
                        <a href="https://linktr.ee/kawankopi">
                            <img class="icon-media mr-2" src="assets/link.png" alt="LinkedIn" />
                        </a>
                        <a href="https://api.whatsapp.com/send/?phone=6285722677081&text=Hello%20Kawan%20Kopi&type=phone_number&app_absent=0" target="_blank">
                            <img class="icon-media mr-2" src="assets/whatsapp.png" alt="WhatsApp" />
                        </a>
                    </div>
                </div>
                <div class="d-flex flex-column ml-5">
                    <p class="desc font-weight-bold">Our Location</p>
                    <p class="desc d-flex align-items-center">Jl. Imam Bonjol No.48, Lebakgede, Kecamatan Coblong, KotaBandung, Jawa Barat 40132</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.999562800826!2d107.61292487494795!3d-6.890654193108413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7726c6db909%3A0xd5b20117a8c242e8!2sKawan%20Kopi!5e0!3m2!1sen!2sid!4v1684718232434!5m2!1sen!2sid" width="460" height="200" style="border: 2px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-5 pb-3" style="color: #888">
                <span> &copy; Kawan Kopi 2023. Hak Cipta Dilindungi </span>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>
