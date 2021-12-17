<?php

include "../koneksi.php";
    $username= $_POST['username'];
    $password= $_POST['password'];
    $nama= $_POST['nama_user'];
    $role= $_POST['role'];

    $simpan = "INSERT into user (username,password,nama_user,role)
               VALUES ('$username','$password','$nama','$role')";
               
    $result = mysqli_query($conn, $simpan);
    if($result){ //jika simpan berhasil maka muncul pesan dan menuju ke halaman
        echo "<script>alert('Data berhasil disimpan !!!');document.location='../login/index.php'</script>";
    }else{
        echo "<script>alert('Proses simpan gagal, coba kembali');document.location='register.php'</script>";
    }
    
?>