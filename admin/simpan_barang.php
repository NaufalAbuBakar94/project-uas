<?php
require '../koneksi.php';
$nama=$_POST['nama_barang'];
$foto = $_FILES["foto"]["name"];
$files = $_FILES["foto"]["tmp_name"];
$jenis= $_POST['jenis_barang'];
$harga=$_POST['harga_satuan'];
$stok=$_POST['stok_barang'];

$sql=mysqli_query($conn, "INSERT INTO barang(nama_barang,foto,jenis_barang,harga_satuan,stok_barang) VALUES('$nama','$foto','$jenis','$harga','$stok') ");
move_uploaded_file($files, "../foto/".$foto);
if($sql) {
    ?>
    <script type="text/javascript">
        alert('Barang Berhasil Di Tambahkan');
        window.location="admin.php?url=data_produk";
    </script>
    <?php
}

?>