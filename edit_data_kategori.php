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
			$query_data_kategori= $db->query("SELECT * FROM kategori WHERE id = '$id'");
		$data_kategori =mysqli_fetch_array($query_data_kategori);
		?>
<div class="card card-block">
    <h4 class="card-title">Edit Data Kategori Buku</h4>	
		<form class="form" action="proses_edit_data_kategori.php" method="post">
		<label>Buku</label><br>
		<input type="text" name="kategori" value="<?php echo $data_kategori['kategori'] ; ?>"><br>
		
					
<input type="hidden" name="id" value="<?php echo $id ?>">
		<button type="submit" class="btn btn-default">Simpan</button>
		</form>
	</div>
<?php include 'footer.php'; ?>
