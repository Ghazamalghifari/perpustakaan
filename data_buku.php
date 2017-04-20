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

	<form class="form" action="proses_tambah_data_buku.php" method="post">
		<label>Judul Buku</label><br>
		<input type="text" name="judul_buku"><br>
		<label>Nama Penulis</label><br>
		<input type="text" name="nama_penulis"><br>
		<label>Tahun Terbit</label><br>
		<input type="number" name="tahun_terbit"><br>
		<label>Kategori Buku</label><br>
		<input type="text" name="kategori_buku"><br>
		<label>Jumlah Buku</label><br>
		<input type="text" name="jumlah_buku"><br>
		
		<button type="submit" class="btn btn-default">Tambah</button>
		</form>
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