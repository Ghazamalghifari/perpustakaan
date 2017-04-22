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
    <h4 class="card-title">Kategori</h4>
 
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
        Input Data Kategori
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
                <h4 class="modal-title w-100" id="myModalLabel">Kategori</h4>
            </div>
            <!--Body-->
            <div class="modal-body">
           
	<form class="form" action="proses_tambah_data_kategori.php" method="post">
		<label>Data Kategori</label><br>
        <input type="text" name="data_kategori" required><br>
        

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
        <th>Kategori</th>
        <th>Edit</th>
        <th>Hapus</th>
        
        </thead>
</tbody>
<?php
            //koneksi ke data php 
            include 'db.php';
            //buat queri untuk memilih data barang 
            $query_kategori =$db->query("SELECT * FROM kategori");
            //buat while untuk menampilkan baris datanya 
            while ($data_kategori = mysqli_fetch_array($query_kategori)) {
                echo "<tr>
                <td>".$data_kategori['kategori']."</td>
                <td><a href='edit_data_kategori.php?id=".$data_kategori['id']."'type='button' class='btn btn-primary btn-sm'> Edit </a></td>
                <td><a href='hapus_data_kategori.php?id=".$data_kategori['id']."' type='button' class='btn btn-danger btn-sm'> Hapus </a></td>
                </tr>";
            }
            ?>

            </tbody>
    </table>
    </div>
</div>
<?php include 'footer.php'; ?>      
