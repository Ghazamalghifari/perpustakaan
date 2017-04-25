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
<!--panel-->
<div class="card card-block">
    <h4 class="card-title">Denda</h4>
 
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
        Input Data Denda</button>


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
                <h4 class="modal-title w-100" id="myModalLabel">Data Denda</h4>
            </div>
            <!--Body-->
            <div class="modal-body">
           
	<form class="form" action="proses_tambah_data_denda.php" method="post">
		<label>Jumlah Terlambat</label><br>
        <input type="text" name="jumlah_terlambat" required><br>
        <label>Total Denda</label><br>
        <input type="text" name="total_denda" required><br>
        

		</div>
            <!--Footer-->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button> 
		      <button type="submit" class="btn btn-primary">Tambah</button>
		</form>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- /.Live preview-->

		<br> <br>
		<table border="3" class="table table-bordered">
		<thead>
        <th>Jumlah Terlambat</th>
        <th>Total Denda</th>
        <th>Edit</th>
        <th>Hapus</th>
        
        </thead>
</tbody>
<?php
            //koneksi ke data php 
            include 'db.php';
            //buat queri untuk memilih data barang 
            $query_data_denda =$db->query("SELECT * FROM data_denda");
            //buat while udantuk menampilkan baris datanya 
            while ($data_denda = mysqli_fetch_array($query_data_denda)) {
                echo "<tr>
                <td>".$data_denda['jumlah_terlambat']."</td>
                <td>".$data_denda['total_denda']."</td>
                <td><a href='edit_data_denda.php?id=".$data_denda['id']."'type='button' class='btn btn-primary btn-sm'> Edit </a></td>
                <td><a href='hapus_data_denda.php?id=".$data_denda['id']."' type='button' class='btn btn-danger btn-sm'> Hapus </a></td>
                </tr>";
            }
            ?>

            </tbody>
    </table>
    </div>
</div>
<?php include 'footer.php'; ?>      
