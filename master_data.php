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
 
Kode Buku <?php
echo(rand() . "<br>");  
?>
WAKTU SEKARANG <?php 
date_default_timezone_set('Asia/Jakarta');
echo date('d-m-Y H:i:s');
 ?>

<div class="panel-body">
 <table id="example" class="display nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
                <th>Extn.</th>
                <th>E-mail</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger</td>
                <td>Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
                <td>5421</td>
                <td>t.nixon@datatables.net</td>
            </tr>
 </tbody>
 </table>
 </div>
<?php include 'footer.php'; ?> 