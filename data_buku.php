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
    <h4 class="card-title">Data Buku</h4>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
    Tambah Data Buku
</button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title w-100" id="myModalLabel">Input Buku</h4>
                </div>
                <!--Body-->
                <div class="modal-body">
               
                <form class="form" action="proses_tambah_data_buku.php" method="post">  
                    <label>Judul buku</label>
                        <input type="text" name="judul_buku">
                    <label>Pengarang</label><br>
                        <input type="text" name="pengarang"><br>
                    <label>Penerbit</label><br>
                        <input type="text" name="penerbit"><br>
                    <label>Tahun Terbit</label>
                        <input type="text" name="tahun_terbit">
                    <label>Kategori Buku</label><br>
                        <input type="text" name="kategori_buku" ><br>
                    <label>Letak Rak</label><br>
                        <input type="text" name="letak_rak" ><br>
                    <label>Jumlah Buku</label>
                        <input type="text" name="jumlah_buku">
                    <label>Stok Buku</label><br>
                        <input type="text" name="stok_buku"><br>
                        <!--Footer-->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button> 
                    
                        </form>
                    </div>
                </div>

            </div>
        </div>
        
    </div>
<br><br>
 <table id="example"  border="3" class="table table-bordered" cellspacing="0" width="100%" >
        <thead>
            <tr>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Kategori Buku</th>
                <th>Letak Rak</th>
                <th>Jumlah Buku</th>
                <th>Stok Buku</th>
                <th>Edit</th>
                <th>Kembalikan</th>
            </tr>
        </thead>
        <tbody>
         
<?php
            //koneksi ke data php 
            include 'db.php';
            //buat queri untuk memilih data barang 
            $query_data_buku=$db->query("SELECT * FROM data_buku");
            //buat while untuk menampilkan baris datanya 
            while ($data_buku = mysqli_fetch_array($query_data_buku)) {
                echo "<tr>
                <td>".$data_buku ['judul_buku']."</td>
                <td>".$data_buku['pengarang']."</td>
                <td>".$data_buku ['penerbit']."</td>
                <td>".$data_buku ['tahun_terbit']."</td>
                <td>".$data_buku ['kategori_buku']."</td>
                <td>".$data_buku['letak_rak']."</td>
                <td>".$data_buku['jumlah_buku']."</td>
                <td>".$data_buku ['stok_buku']."</td>
                <td><a href='edit_data_buku.php?id=".$data_buku['id']."'type='button' class='btn btn-primary btn-sm'> Edit </a></td>
                <td><a href='hapus_data_buku.php?id=".$data_buku['id']."'type='button' class='btn btn-danger btn-sm'> Hapus </a></td>
                </tr>";
            }
                ?>
           
        </tbody>
 </table>


    </div>
<?php include 'footer.php'; ?> 
