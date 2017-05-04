<?php 
include 'db.php';
$nama_anggota = $_POST['nama_anggota'];
$judul_buku = $_POST['judul_buku'];
$tanggal_peminjaman = $_POST['tanggal_peminjaman'];
$tanggal_pengembalian = $_POST['tanggal_pengembalian'];
$jumlah_buku = $_POST['jumlah_buku'];
$id = $_POST['id'];


$query_edit_peminjaman_buku =$db->query("UPDATE peminjaman_buku SET nama_anggota = '$nama_anggota', judul_buku = '$judul_buku', tanggal_peminjaman = '$tanggal_peminjaman' , tanggal_pengembalian = '$tanggal_pengembalian', jumlah_buku = '$jumlah_buku' WHERE id = '$id'");
header("location:peminjaman.php");

 ?>