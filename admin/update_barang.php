<?php
require '../koneksi.php';
$nama=$_POST['nama_barang'];
$foto = $_FILES["foto"]["name"];
$files = $_FILES["foto"]["tmp_name"];
$jenis= $_POST['jenis_barang'];
$harga=$_POST['harga_satuan'];
$stok=$_POST['stok_barang'];
$id=$_POST['id_barang'];

$sql=mysqli_query($conn, "UPDATE barang set nama_barang='$nama',foto='$foto',jenis_barang='$jenis',harga_satuan='$harga',stok_barang='$stok' WHERE id_barang='$id' ");
move_uploaded_file($files, "../foto/".$foto);
if($sql) {
    ?>
    <script type="text/javascript">
        alert('Barang Berhasil Di Edit');
        window.location="admin.php?url=data_produk";
    </script>
    <?php
}

?>