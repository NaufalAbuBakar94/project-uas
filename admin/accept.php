<?php
require '../customer/function.php';

$id = $_GET["id"];

if (accept($id) > 0) {
    echo "<script>
        alert('Transaksi Diterima');
        location='verifikasi_pesanan.php';
    </script>";
} else{
    echo "<script>
        alert('Terjadi Kesalahan');
        location='verifikasi_pesanan.php';
    </script>";
}

?>