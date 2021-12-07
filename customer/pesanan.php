<?php
session_start();

require 'function.php';
$nama = $_SESSION['username'];
$transaksi = tampilkan_transaksi_user($nama);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pesanan</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body>

<div class="container">
<?php foreach ($transaksi as $row) : ?>
    <div class="order">
        <h3>Nama User : <?= $row['id_user']?></h3>
        <p class="card-text">Nama Barang : <?= $row['id_barang'] ?></p>
        <p class="card-text">Jumlah Barang : <?= $row['jumlah_barang'] ?></p>
        <p class="card-text">Harga Total : Rp. <?= number_format($row['total_harga']) ?></p>

        <?php if ($row['status'] == "accept") : ?>
        <p class="btn btn-success" style="margin: 2px;"><?= $row['status'] ?></p>
        <?php elseif ($row['status'] == "batal") : ?>
        <p class="btn btn-danger" style="margin: 2px;"><?= $row['status'] ?></p>
        <?php else: ?>
        <p class="btn btn-warning" style="margin: 2px;"><?= $row['status'] ?></p>
        <?php endif; ?>

    </div>
    <?php endforeach; ?>
</div>

<div class="card-body">
    <div class="form-group cols-sm-6">
    <a href="index.php" class="btn btn-primary btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-arrow-left"></i>
        </span>
        <span class="text">Kembali</span>
    </a>
</div>
    
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>