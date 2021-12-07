<?php
if (isset($_GET['url']))
{
    $url=$_GET['url'];

    switch($url){
        
    }
}
else
{
    ?> 
    Selamat datang di Web Toko AC kami, Silahkan Berbelanja. Pilihlah Barang Barang yang sesuai dengan 
    kebutuhan anda dan jangan lupa juga sesuai dengan isi dompet anda -_- <br><br>
    TIDAK TERIMA HUTANGG!!! <br><br>
    Rugi saya kalo di Utangin Mulu <br><br> 
    Enjoy Shopping, Have A Nice Day <br><br>
    Anda Login Sebagai : <h2><b> <?php echo $_SESSION['nama_user'];
}

?>