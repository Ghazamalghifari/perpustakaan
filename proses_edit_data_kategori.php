
<?php 
include 'db.php';
$kategori = $_POST ['kategori']; 
$id = $_POST ['id'];


$query_edit_kategori = $db->query("UPDATE kategori SET kategori = '$kategori' WHERE id ='$id'");


header('location:data_kategori.php');

?>