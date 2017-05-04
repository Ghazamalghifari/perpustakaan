<?php 
include 'db.php';
date_default_timezone_set('Asia/Jakarta'); 
$nama_anggota= $_POST['nama_anggota'];
$judul_buku= $_POST['judul_buku'];
$tanggal_peminjaman= date('d-m-Y H:i:s');
$tanggal_pengembalian = $_POST['tanggal_pengembalian'];
$jumlah_buku = $_POST['jumlah_buku'];


$query_insert =$db->query("INSERT INTO peminjaman_buku ( nama_anggota, judul_buku, tanggal_peminjaman, tanggal_pengembalian, jumlah_buku) VALUES ('$nama_anggota','$judul_buku', '$tanggal_peminjaman','$tanggal_pengembalian', '$jumlah_buku') ");
header ('location:peminjaman.php');


?>
