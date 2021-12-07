<?php
require '../customer/function.php';

$id = $_GET["id"];
if (batal($id) > 0) {
    echo "<script>
        alert('Transaksi Dibatalkan');
        location='verifikasi_pesanan.php';
    </script>";
} else{
    echo "<script>
        alert('Terjadi Kesalahan');
        location='verifikasi_pesanan.php';
    </script>";
}

?>