<?php 
include 'db.php'; 
$kategori = $_POST['data_kategori'];

$query_insert_kategori =$db->query("INSERT INTO kategori(kategori) VALUES ('$kategori')"); 

header('location:data_kategori.php');

?>