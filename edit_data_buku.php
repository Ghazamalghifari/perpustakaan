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
			$query_data_buku= $db->query("SELECT * FROM data_buku WHERE id = '$id'");
		$data_buku=mysqli_fetch_array($query_data_buku);
		?>
<div class="card card-block">
    <h4 class="card-title">Edit Data Buku</h4>	
		<form class="form" action="proses_edit_buku.php" method="post">
		<label>Judul Buku</label><br>
		<input type="text" name="judul_buku" value="<?php echo $data_buku['judul_buku']; ?>"><br>
		<label>Pengarang</label><br>
		<input type="text" name="pengarang" value="<?php echo $data_buku['pengarang']; ?>"><br>
		<label>Penerbit</label><br>
		<input type="text" name="penerbit" value="<?php echo $data_buku['penerbit']; ?>"><br>
		<label>Tahun Terbit</label><br>
		<input type="text" name="tahun_terbit" value="<?php echo $data_buku['tahun_terbit']; ?>"><br>
		<label>Jumlah Buku</label><br>
		<input type="text" name="jumlah_buku" value="<?php echo $data_buku['jumlah_buku']; ?>"><br>
		<label>Stok Buku</label><br>
		<input type="text" name="stok_buku" value="<?php echo $data_buku['stok_buku']; ?>"><br>
		
		<input type="hidden" name="id" value="<?php echo $id ?>">
		<button type="submit" class="btn btn-primary">Simpan</button>
		</form>
	</div>
<?php include 'footer.php'; ?>

ph