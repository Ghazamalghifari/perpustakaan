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
		<label>Judul Buku</label><br>
		<input type="text" name="judul_buku" required><br>
		<label>Nama Penulis</label><br>
		<input type="text" name="nama_penulis" required><br>
		<label>Tahun Terbit</label><br>
		<input type="number" name="tahun_terbit" required><br>
		<label>Kategori Buku</label><br>
		<input type="text" name="kategori_buku" required><br>
		<label>Jumlah Buku</label><br>
		<input type="text" name="jumlah_buku" required><br>
		

            </div>
            <!--Footer-->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button> 
		<button type="submit" class="btn btn-default">Tambah</button>
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
			<th>Judul Buku</th>
			<th>Nama Penulis</th>
			<th>Tahun Terbit</th>
			<th>Kategori Buku</th>
			<th>Jumlah Buku</th>
			<th>Edit</th>
			<th> Hapus </th>


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
				<td>".$data_buku['judul_buku']."</td>
				<td>".$data_buku ['nama_penulis']."</td>
				<td>".$data_buku['tahun_terbit']."</td>
				<td>".$data_buku ['kategori_buku']."</td>
				<td>".$data_buku['jumlah_buku']."</td>
				<td><a href='edit_data_buku.php?id=".$data_buku['id']."'type='button' class='btn btn-primary btn-sm'> Edit </a></td>
				<td><a href='hapus_data_buku.php?id=".$data_buku['id']."' type='button' class='btn btn-danger btn-sm'> Hapus </a></td>
				</tr>";
			}
				?>
				
		</tbody>
	</table>
    </div>
</div>
<!--/.Panel-->

<?php include 'footer.php'; ?>