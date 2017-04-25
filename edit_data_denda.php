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
			$query_data_denda= $db->query("SELECT * FROM data_denda WHERE id = '$id'");
		$data_denda=mysqli_fetch_array($query_data_denda);
		?>
<div class="card card-block">
    <h4 class="card-title">Edit Data denda</h4>	
		<form class="form" action="proses_edit_data_denda.php" method="post">
		<label>Jumlah Terlambat</label><br>
		<input type="text" name="jumlah_terlambat" value="<?php echo $data_denda['jumlah_terlambat']; ?>"><br>
		<label>Total Denda</label><br>
		<input type="text" name="total_denda" value="<?php echo $data_denda['total_denda']; ?>"><br>
		
		<input type="hidden" name="id" value="<?php echo $id ?>">
		<button type="submit" class="btn btn-default">Simpan</button>
		</form>
	</div>
<?php include 'footer.php'; ?>