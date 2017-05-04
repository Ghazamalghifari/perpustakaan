<?php 
include 'db.php';

$id = $_GET['id'];

$query_update_status_peminjaman_buku =$db->query("UPDATE peminjaman_buku SET status = '1' WHERE id = '$id'");
header("location:peminjaman.php");

 ?>