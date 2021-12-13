<?php
require 'koneksi.php';

function view(){
    global $conn;

    $query = "SELECT * FROM barang";

    $result = mysqli_query($conn, $query);

    $rows = [];
        
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;

}
?>