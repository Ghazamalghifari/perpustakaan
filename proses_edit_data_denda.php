<?php 
include 'db.php';
$jumlah_terlambat = $_POST ['jumlah_terlambat'];
$total_denda = $_POST ['total_denda']; 
$id = $_POST ['id'];

$query_edit_kategori = $db->query("UPDATE data_denda SET jumlah_terlambat = '$jumlah_terlambat', total_denda = '$total_denda' WHERE id ='$id'");

header('location:data_denda.php');

?>