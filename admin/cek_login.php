<?php
require '../koneksi.php';
$user=$_POST["username"];
$password=$_POST["password"];
$sql=mysqli_query($conn,"SELECT * FROM user WHERE username = '$user' AND password='$password' ");
$cek =mysqli_num_rows($sql);
    
    if ($cek>0)//jika ketemu
    {
        $data=mysqli_fetch_array($sql);
        if ($data['role'] =="admin")
        {

        session_start();
        $_SESSION['id_user']=$data['id_user'];
        $_SESSION['user']=$user;
        $_SESSION['nama']=$data['nama_user'];
        $_SESSION['role']=$data['role'];
        header('location:admin.php');
        }
    }
    else{
        ?>
        <script type="text/javascript">
        alert('Username atau password tidak ditemukan');
        window.location="index.php";
        </script>    
        <?php
    }


?>