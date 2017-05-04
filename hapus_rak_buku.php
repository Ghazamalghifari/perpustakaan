<?php

include 'db.php';
//ambil id barang yang akan di hapus
$id = $_GET['id'];
//perintah untuk menghapus barang yang dipilih
$query_hapus = $db->query ("DELETE FROM letak_rak WHERE id = '$id'");
//untuk pindah ke halaman index lagi
header('location:letak_rak.php');


?>