<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Blank</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <div class="card shadow">
        <div class="card-header">
            Edit Barang
        </div>
        <div class="card-body">

        <?php
            require '../koneksi.php';
            $sql=mysqli_query($conn, "SELECT * from barang WHERE id_barang='$_GET[id]' ");
            if ($data=mysqli_fetch_array($sql))
            {
                ?>
            <form action="update_barang.php" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="form-group cols-sm-6">
                <label>ID Produk</label>
                <input type="text" name="id_barang" value="<?php echo $data['id_barang']; ?>" class="form-control" readonly>
            </div>
            <div class="form-group cols-sm-6">
            <label>Nama Produk</label>
                <input type="text" name="nama_barang" value="<?php echo $data['nama_barang']; ?>" class="form-control">
            </div>
            <div class="form-group cols-sm-6">
                <label>Foto Produk</label>
                <input type="file" name="foto" value="<?php echo $data['foto']; ?>" class="form-control" readonly>
            </div>
            <div class="form-group cols-sm-6">
                <label>Jenis Produk</label>
                <input type="text" name="jenis_barang" value="<?php echo $data['jenis_barang']; ?>" class="form-control">
            </div>
            <div class="form-group cols-sm-6">
                <label>Harga</label>
                <input type="text" name="harga_satuan" value="<?php echo $data['harga_satuan']; ?>" class="form-control">
            </div>
            <div class="form-group cols-sm-6">
                <label>Stok</label>
                <input type="text" name="stok_barang" value="<?php echo $data['stok_barang']; ?>" class="form-control">
            </div>

            <div class="form-group col-sm-6">
                    <input type="submit" value="Edit Barang" class="btn btn-primary">
                    <input type="reset" value="Kosongkan" class="btn btn-warning">
                </div>
            </form>
            <?php } ?>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>