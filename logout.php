<?php

session_start();

unset($_SESSION["username"]);
session_destroy();
echo "<script type='text/javascript'>
alert('Anda Berhasil Logout, Terimakasih Sudah Berkunjung');
window.location = 'login/index.php';
</script>";

?>