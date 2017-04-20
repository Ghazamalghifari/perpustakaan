<html>
<head>
	<title></title>
</head>
<body>
	<?php
			//koneksi ke data php 
			include 'db.php';
			include 'navbar.php';
			$id = $_GET['id'];

			//buat queri untuk memilih data barang 
			$query_data_buku= $db->query("SELECT * FROM data_buku WHERE id = '$id'");
		$data_barang=mysqli_fetch_array($query_data_buku);
		?>
<div class="card card-block">
    <h4 class="card-title">Edit Data Buku</h4>	
		<form class="form" action="proses_edit_data_buku.php" method="post">
		<label>Judul Buku</label><br>
		<input type="text" name="judul_buku" value="<?php echo $data_barang['judul_buku']; ?>"><br>
		<label>Nama Penulis</label><br>
		<input type="text" name="nama_penulis" value="<?php echo $data_barang['nama_penulis']; ?>"><br>
		<label>Tahun Terbit</label><br>
		<input type="number" name="tahun_terbit" value="<?php echo $data_barang['tahun_terbit']; ?>"><br>
		<label>Kategori Buku</label><br>
		<input type="text" name="kategori_buku"value="<?php echo $data_barang['kategori_buku']; ?>"><br>
		<label>Jumlah Buku</label><br>
		<input type="number" name="jumlah_buku" value="<?php echo $data_barang['jumlah_buku']; ?>"><br>
		
		<input type="hidden" name="id" value="<?php echo $id ?>">
		<button type="submit" class="btn btn-default">Simpan</button>
		</form>
	</div>
<?php include 'footer.php'; ?>