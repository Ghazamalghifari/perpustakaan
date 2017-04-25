
<?php 
include 'db.php';
$nama_kategori = $_POST ['nama_kategori']; 
$id = $_POST ['id'];


$query_edit_kategori = $db->query("UPDATE kategori SET nama_kategori = '$nama_kategori' WHERE id ='$id'");


header('location:data_kategori.php');

?>