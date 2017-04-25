<?php 
include 'db.php';

$judul_buku= $_POST['judul_buku'];
$nama_penulis= $_POST['nama_penulis'];
$tahun_terbit = $_POST['tahun_terbit'];
$kategori_buku = $_POST['kategori_buku'];
$jumlah_buku= $_POST['jumlah_buku'];


$query_edit_data_buku = $db->query("INSERT INTO data_buku (judul_buku, nama_penulis, tahun_terbit,kategori_buku, jumlah_buku) VALUES ('$judul_buku','$nama_penulis', '$tahun_terbit', '$kategori_buku', '$jumlah_buku') ");
header ('location:data_buku.php');


?>
