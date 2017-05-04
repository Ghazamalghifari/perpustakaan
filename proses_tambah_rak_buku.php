<?php 
include 'db.php';


$no= $_POST['no'];
$nama_rak_buku=$_POST['nama_rak_buku'];
$jumlah_buku = $_POST['jumlah_buku'];


$query_insert =$db->query("INSERT INTO letak_rak ( no, nama_rak_buku, jumlah_buku) VALUES ('$no', '$nama_rak_buku', '$jumlah_buku') ");
header ('location:letak_rak.php');


?>
