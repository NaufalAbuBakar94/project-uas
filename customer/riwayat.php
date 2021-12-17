<?php
require '../koneksi.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Riwayat Pembelian</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-dark">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List Pesanan</h6>
    </div>
<div class="card-body">
    <div class="table-responsive">
    <div class="container">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
    <tr>
        <th>No</th>
        <th>Nama User</th>
        <th>Nama Barang</th>
        <th>Tanggal Transaksi</th>
        <th>Jumlah Barang</th>
        <th>Total Harga</th>
        <th>Status</th>
        </tr>
        </thead>
        <?php
        require '../koneksi.php';
        $sql=mysqli_query($conn, "SELECT * from transaksi");
        while ($data=mysqli_fetch_array($sql)) {

        ?>
        <tbody>
        <tr>
        <td><?php echo $data['id_transaksi']; ?></td>
        <td><?php echo $data['id_user']; ?></td>
        <td><?php echo $data['id_barang']; ?></td>
        <td><?php echo $data['tgl_transaksi']; ?></td>
        <td><?php echo $data['jumlah_barang']; ?></td>
        <td>Rp. <?= number_format($data['total_harga']); ?></td>
        
    <td>
        <?php if ($data['status'] == "accept") : ?>
        <p style="color: green; font-weight: bold"><?= $data['status'] ?></p>
        <?php elseif ($data['status'] == "batal") : ?>
        <p style="color: red; font-weight: bold;"><?= $data['status'] ?></p>
        <?php else: ?>
        <p style="color: yellow; font-weight: bold;"><?= $data['status'] ?></p>
        <?php endif;?>
      </td>
    </tr>
  </tbody>
  <?php } ?>
</table>
</div>
</div>
</div>
<div class="card-body">
    <div class="form-group cols-sm-6">
    <a href="index.php" class="btn btn-primary btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-arrow-left"></i>
        </span>
        <span class="text">Kembali</span>
    </a>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>