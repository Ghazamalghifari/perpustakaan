<?php 
include 'db.php';
$judul_buku = $_POST ['judul_buku'];
$nama_penulis = $_POST ['nama_penulis'];
$tahun_terbit = $_POST ['tahun_terbit'];
$kategori_buku = $_POST ['kategori_buku'];
$jumlah_buku = $_POST ['jumlah_buku'];
$id = $_POST ['id'];

$query_edit_data_buku =$db->query("UPDATE data_buku SET judul_buku = '$judul_buku', nama_penulis = '$nama_penulis', tahun_terbit = '$tahun_terbit', kategori_buku = '$kategori_buku', jumlah_buku = '$jumlah_buku' WHERE id = '$id'");
header("location:data_buku.php");

 ?>