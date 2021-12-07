<?php
session_start();

require 'function.php';

$id = $_GET['id'];

$barang = mysqli_query($conn,"SELECT * FROM barang WHERE id_barang = '$id'");

?>

<?php include '../layout/navbar.php'; ?>

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

<section>
<?php while ($result = mysqli_fetch_assoc($barang)) : ?>
    <div class="container-detail">
        <img src="../foto/<?= $result['foto']; ?>" width="30%" alt="...">

        <div style="margin-left: 100px;">
        <h2 class="title"><?= $result['nama_barang']; ?></h2>

        <p class="paragraph"><?= $result['jenis_barang']; ?></p>

        <div class="quantity-detail">
            <h4>Stok Barang :</h4>

            <form method="post">
                
           
                <h3><?= $result['stok_barang']; ?></h3>
                <h3>Harga Satuan : </h3>
                <div style="display: flex;">
                <span style="margin-top: 5px; font-weight: bold; font-size: 23px; margin-right: 5px;">Rp. </span>
                    <h3 style="margin-top: 5px;" id="harga_satuan"><?= number_format($result['harga_satuan']); ?></h3>
                </div> <br>
                <a href="checkout.php?id=<?= $result['id_barang'];?>">
                    <h4>Beli Barang</h4>
                </a>
            </form>
        </div>
        </div>
    </div>
<?php endwhile ?>
</section>
    
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>