<?php 
include 'db.php'; 
$jumlah_terlambat = $_POST['jumlah_terlambat'];
$total_denda = $_POST['total_denda'];

$query_insert =$db->query("INSERT INTO data_denda (jumlah_terlambat, total_denda) VALUES ('$jumlah_terlambat','$total_denda')"); 

header('location: data_denda.php');

?>