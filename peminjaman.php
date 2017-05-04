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
    <h4 class="card-title">Peminjaman</h4>

<!-- Button trigger modal -->
<button type="submit" class="btn btn-primary btn-sm"  data-toggle="modal" data-target="#myModal">Tambah</button>

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
               
                <form class="form" action="proses_tambah_peminjaman.php" method="post">
                    <div class="form-group">
                        <label>Nama Anggota</label>
                        <select  class="form-control"  name="nama_anggota">
                            
                                    <?php 
                                        include 'db.php';
                                      $query = $db->query("SELECT id,nama_anggota FROM data_anggota");
                                     while ( $data = $query->fetch_array())
                                       {
                                        # code...
                                       echo '<option value="'. $data['id'].'">'. $data['nama_anggota'].'</option>';
                                     }
                                     ?>  
                        </select>
                    </div> 
                    <div class="form-group">
                        <label>Judul Buku</label> 
                        <select  class="form-control"  name="judul_buku">
                            
                                    <?php 
                                        include 'db.php';
                                      $query = $db->query("SELECT id,judul_buku FROM data_buku");
                                     while ( $data = $query->fetch_array())
                                       {
                                        # code...
                                       echo '<option value="'. $data['id'].'">'. $data['judul_buku'].'</option>';
                                     }
                                     ?>  
                        </select>
                    </div> 
                    <div class="form-group">
                        <label>Tanggal Pengembalian</label>
                        <input  type="text" class="form-control datepicker" name="tanggal_pengembalian">
                    </div>

                    <div class="form-group">
                        <label>Jumlah Buku</label>
                        <input type="text" name="jumlah_buku">
                    </div>

                        <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button> 
                    
                 </form>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
     
</div>
<br><br>
 <table id="example"  border="3" class="table table-bordered" cellspacing="0" width="100%" >
        <thead>
            <tr>
                <th>Nama Anggota</th>
                <th>Judul Buku</th>
                <th>Letak Rak</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
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
            $query_peminjaman_buku=$db->query("SELECT * FROM peminjaman_buku");
            //buat while untuk menampilkan baris datanya 
            while ($data_peminjaman_buku = mysqli_fetch_array($query_peminjaman_buku)) {
                echo "<tr>
                <td>".$data_peminjaman_buku['nama_anggota']."</td>
                <td>".$data_peminjaman_buku['judul_buku']."</td>
                <td>".$data_peminjaman_buku['letak_rak']."</td>
                <td>".$data_peminjaman_buku ['tanggal_peminjaman']."</td>
                <td>".$data_peminjaman_buku['tanggal_pengembalian']."</td>
                <td>".$data_peminjaman_buku['jumlah_buku']."</td>";
                if ($data_peminjaman_buku['status'] != '1') {
                    # code...
                    echo "
                    <td><a href='kembalikan_buku.php?id=".$data_peminjaman_buku['id']."' class='btn btn-danger btn-sm'> Kembalikan </a></td>
                    <td><a href='perpanjang.php?id=".$data_peminjaman_buku['id']."' class='btn btn-primary btn-sm'> Perpanjang </a></td></tr>";
                }
                else{
                  echo "<td>Sudah Dikembalikan</td>
                        <td>Tidak Bisa diperpanjang</td>";  
                } 
            }
        ?>
           
        </tbody>
 </table>

 </div>

<script type="text/javascript">
    $(document).ready(function(){
        $('.datepicker').datepicker();
    })

</script>
    
<?php include 'footer.php'; ?> 



