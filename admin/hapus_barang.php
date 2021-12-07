<?php
require '../koneksi.php';
$id=$_GET['id'];

$sql=mysqli_query($conn, "DELETE from barang WHERE id_barang='$id' ");

if($sql) {
    ?>
    <script type="text/javascript">
        alert('Barang Berhasil Dihapus');
        window.location="admin.php?url=data_produk";
    </script>
    <?php
}

?>