<?php 
include 'db.php';
$no = $_POST['no'];
$nama_kategori = $_POST['nama_kategori'];
$jumlah_buku = $_POST['jumlah_buku'];
$id = $_POST['id'];


$query_edit_letak_rak =$db->query("UPDATE letak_rak SET no = '$no', nama_kategori = '$nama_kategori', jumlah_buku = '$jumlah_buku'  WHERE id = '$id'");
header("location:letak_rak.php");

 ?>