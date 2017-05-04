<?php 
include 'db.php';
$judul_buku = $_POST['judul_buku'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$tahun_terbit = $_POST['tahun_terbit'];
$jumlah_buku = $_POST['jumlah_buku'];
$stok_buku = $_POST['stok_buku'];
$id = $_POST['id'];

$query_edit_data_buku =$db->query("UPDATE data_buku SET judul_buku = '$judul_buku', pengarang = '$pengarang' , penerbit = '$penerbit', tahun_terbit = '$tahun_terbit', jumlah_buku = '$jumlah_buku' , stok_buku = '$stok_buku' WHERE id = '$id'");
header("location:data_buku.php");

 ?>