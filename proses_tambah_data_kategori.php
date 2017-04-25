<?php 
include 'db.php'; 
$nama_kategori = $_POST['nama_kategori'];

$query_insert_kategori =$db->query("INSERT INTO kategori(nama_kategori) VALUES ('$nama_kategori')"); 

header('location:data_kategori.php');

?>