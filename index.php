<?php
session_start();

require 'koneksi.php';

require 'function.php';

$produk = view();

?>

<?php include 'navbar.php'; ?>

<div class="hero">
    <img src="foto/iklan2.jpg" alt="">
</div>
<div class="container">
    <h2 class="text-produk">Produk Kami</h2>
    <hr />

    <div class="wrapper-produk">
        <?php foreach($produk as $data) : ?>
        <div class="product">
            <a href="detail.php?id=<?= $data["id_barang"]; ?>">
                <img src="foto/<?= $data['foto'];?>" width="250px" alt="">
                <h3><?= $data['nama_barang'];?></h3>
                <p>Rp.<?= number_format($data['harga_satuan']);?></p>
            </a>
        </div>
        <?php endforeach; ?>
    </div>
</div>