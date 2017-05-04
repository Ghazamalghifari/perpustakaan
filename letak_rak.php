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
    <h4 class="card-title">Letak Rak</h4>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
    Rak Buku
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
               
                <form class="form" action="proses_tambah_rak_buku.php" method="post">  
                    <label>No</label><br>
                    <input type="text" name="no" ><br>
                    <label>Nama Rak-Buku</label>
                    <input type="text" name="nama_rak_buku">
                    <label>Jumlah Buku</label><br>
                    <input type="text" name="jumlah_buku"><br>
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
                <th>N0</th>
                <th>Nama Rak-Buku</th>
                <th>Jumlah Buku</th>
                <th>Edit</th>
                <th>Hapus</th>
            </tr>
        </thead>
        <tbody>
         
<?php
            //koneksi ke data php 
            include 'db.php';
            //buat queri untuk memilih data barang 
            $query_letak_rak=$db->query("SELECT * FROM letak_rak");
            //buat while untuk menampilkan baris datanya 
            while ($data_letak_rak = mysqli_fetch_array($query_letak_rak)) {
                echo "<tr>
                <td>".$data_letak_rak['no']."</td>
                <td>".$data_letak_rak ['nama_rak_buku']."</td>
                <td>".$data_letak_rak['jumlah_buku']."</td>
                <td><a href='edit_rak_buku.php?id=".$data_letak_rak['id']."'type='button' class='btn btn-primary btn-sm'> Edit </a></td>
                <td><a href='hapus_rak_buku.php?id=".$data_letak_rak['id']."'type='button' class='btn btn-danger btn-sm'> Hapus </a></td>
                </tr>";
            }
                ?>
           
 </tbody>
 </table>


 </div>
<?php include 'cc.php'; ?> 
