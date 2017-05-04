<html>
<head>
	<title></title>
</head>
<body>
	<?php
			//koneksi kse data php 
			include 'db.php';
			include 'navbar.php';
			$id = $_GET['id'];

			//buat queri untuk memilih data barang 
			$query_letak_rak= $db->query("SELECT * FROM letak_rak WHERE id = '$id'");
		$letak_rak=mysqli_fetch_array($query_letak_rak);
		?>
<div class="card card-block">
    <h4 class="card-title">Edit Data Buku</h4>	
		<form class="form" action="proses_edit_rak_buku.php" method="post">
		<label>No</label><br>
		<input type="text" name="no" value="<?php echo $letak_rak['no']; ?>"><br>
		<label>Nama Kategory</label><br>
		<input type="text" name="nama_kategori" value="<?php echo $letak_rak['nama_kategori']; ?>"><br>
		<label>Jumlah_buku</label><br>
		<input type="text" name="jumlah_buku" value="<?php echo $letak_rak['jumlah_buku']; ?>"><br>


		<input type="hidden" name="id" value="<?php echo $id ?>">
		<button type="submit" class="btn btn-primary">Simpan</button>
		</form>
	</div>
<?php include 'footer.php'; ?>

ph