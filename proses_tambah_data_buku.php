<?php 
include 'db.php';

$kode_buku= (rand());
$judul_buku=$_POST['judul_buku'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$tahun_terbit=$_POST['tahun_terbit'];
$kategori_buku= $_POST['kategori_buku'];
$letak_rak=$_POST['letak_rak'];
$jumlah_buku=$_POST['jumlah_buku'];
$stok_buku = $_POST['stok_buku'];


$query_insert =$db->query("INSERT INTO data_buku (kode_buku, judul_buku, pengarang, penerbit, tahun_terbit, kategori_buku, letak_rak, jumlah_buku, stok_buku) VALUES ('$kode_buku', '$judul_buku', '$pengarang','$penerbit', '$tahun_terbit', '$kategori_buku', '$letak_rak', '$jumlah_buku', '$stok_buku') ");
header ('location:data_buku.php');


?>
