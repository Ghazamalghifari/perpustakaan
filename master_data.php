<?php session_start();

if(!isset($_SESSION['username']))
{
 # code...

 echo '<script> window.location.href="index.php";</script>';
}
else
{ 
 include "db.php";
 include "navbar.php";
 
}
 ?>

<h2>ALUR APLIKASI PERPUSTAKAAN MEMBUAT DATA ANGGOTA,DATA BUKU SETELAH ITU PEMINJAMAN BUKU KETIKA INGIN MENGEMBALIKAN BUKU MAKA STATUS PEMINJAMAN MENJADI 1 YANG ARTINYA BUKU SUDAH DI KEMBALIKAN</h2>
 
<?php include 'footer.php'; ?>