<?php session_start();

if(!isset($_SESSION['username']))
{
 # code...

 echo '<script> window.location.href="index.php";</script>';
}
else
{  

 include "navbar.php";
 
}
 ?>


<!--Panel-->

<div class="card card-block">
    <h4 class="card-title">Pengembalian</h4>

<!-- Button trigger modal -->
 <table id="example"  border="3" class="table table-bordered" cellspacing="0" width="100%" >
        <thead>
            <tr>
                <th>Nama Anggota</th>
                <th>Judul Buku</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Jatuh Tempo</th>
                <th>Jumlah Buku</th>
                <th>Kembalikan</th>
                <th>Perpanjang</th>
            </tr>
        </thead>
        <tbody>
         
        <?php
            //koneksi ke data php 
            include 'db.php';
            //buat queri untuk memilih data barang 
            $query_pengembalian_buku=$db->query("SELECT * FROM pengembalian_buku");
            //buat while untuk menampilkan baris datanya 
            while ($data_pengembalian_buku = mysqli_fetch_array($query_pengembalian_buku)) {
                echo "<tr>
                <td>".$data_pengembalian_buku['nama_anggota']."</td>
                <td>".$data_pengembalian_buku['judul_buku']."</td>
                <td>".$data_pengembalian_buku['letak_rak']."</td>
                <td>".$data_pengembalian_buku ['tanggal_peminjaman']."</td>
                <td>".$data_pengembalian_buku['tanggal_jatuh_tempo']."</td>
                <td>".$data_pengembalian_buku['jumlah_buku']."</td>";
                if ($data_pengembalian_buku['status'] != '1') {
                    # code...
                    echo "<td><a href='kembalikan_buku.php?id=".$data_pengembalian_buku['id']."' class='btn btn-danger btn-sm'> Kembalikan </a></td>";
                }
                else{
                  echo "<td>Sudah Dikembalikan</td>";  
                }
                echo "<td><a href='perpanjang.php?id=".$data_pengembalian_buku['id']."' class='btn btn-primary btn-sm'> Perpanjang </a></td>
                </tr>";
            }
        ?>
           
        </tbody>
 </table>

 </div>

<script type="text/javascript">
    
    $('.datepicker').datepicker();


</script>


<?php include 'footer.php'; ?> 



