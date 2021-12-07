<?php
require '../koneksi.php';


?>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List Pesanan</h6>
    </div>
<div class="card-body">
    <div class="table-responsive">
    <div class="container">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
    <tr>
        <th>No</th>
        <th>Nama User</th>
        <th>Nama Barang</th>
        <th>Tanggal Transaksi</th>
        <th>Jumlah Barang</th>
        <th>Total Harga</th>
        <th>Status</th>
        </tr>
        </thead>
        <?php
        require '../koneksi.php';
        $sql=mysqli_query($conn, "SELECT * from transaksi");
        while ($data=mysqli_fetch_array($sql)) {

        ?>
        <tbody>
        <tr>
        <td><?php echo $data['id_transaksi']; ?></td>
        <td><?php echo $data['id_user']; ?></td>
        <td><?php echo $data['id_barang']; ?></td>
        <td><?php echo $data['tgl_transaksi']; ?></td>
        <td><?php echo $data['jumlah_barang']; ?></td>
        <td>Rp. <?= number_format($data['total_harga']); ?></td>
        
    <td>
        <?php if ($data['status'] == "accept") : ?>
        <p style="color: green; font-weight: bold"><?= $data['status'] ?></p>
        <?php elseif ($data['status'] == "batal") : ?>
        <p style="color: red; font-weight: bold;"><?= $data['status'] ?></p>
        <?php else: ?>
        <p><?= $data['status'] ?></p>
        <a href="accept.php?id=<?= $data['id_transaksi'] ?>" class="btn btn-success">Accept</a>
        <a href="batal.php?id=<?= $data['id_transaksi'] ?>" class="btn btn-danger">Batal</a>
        <?php endif;?>
      </td>
    </tr>
  </tbody>
  <?php } ?>
</table>
</div>
</div>
</div>