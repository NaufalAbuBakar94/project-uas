<?php
if (isset($_GET['url']))
{
    $url=$_GET['url'];

    switch($url)
    {
        case 'admin';
        include 'admin.php';
        break;
        
        case 'data_produk';
        include 'data_produk.php';
        break;

        case 'stok';
        include 'stok.php';
        break;

        case 'tambah_barang';
        include 'tambah_barang.php';
        break;

        case 'edit_barang';
        include 'edit_barang.php';
        break;

        case 'verifikasi_pesanan';
        include 'verifikasi_pesanan.php';
        break;
        
    }
}
else
{
    ?> 
    Selamat datang Admin, Semangat Kerjanya Mamang Admin<br>
    Kalo Males Malesan Nanti Gajinya Kena Potong Min<br><br>
    Anda Login Sebagai : <h2><b> <?php echo $_SESSION['nama'];


}

?>