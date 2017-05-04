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
			$query_peminjaman_buku= $db->query("SELECT * FROM peminjaman_buku WHERE id = '$id'");
		$peminjaman_buku=mysqli_fetch_array($query_peminjaman_buku);
		?>
<div class="card card-block">
    <h4 class="card-title">Perpanjang</h4>	
		<form class="form" action="proses_edit_perpanjang.php" method="post">
		<label>Nama Anggota</label><br>
		<input type="text" name="nama_anggota" value="<?php echo $peminjaman_buku['nama_anggota']; ?>"><br>
		<label>Judul Buku</label><br>
		<input type="text" name="judul_buku" value="<?php echo $peminjaman_buku['judul_buku']; ?>"><br>
		<label>Tanggal Peminjaman</label><br>
		<input type="text" name="tanggal_peminjaman" value="<?php echo $peminjaman_buku['tanggal_peminjaman']; ?>"><br>
		<label>Tanggal Pengembalian</label><br>
		<input type="text" name="tanggal_pengembalian" value="<?php echo $peminjaman_buku['tanggal_pengembalian']; ?>"><br>
		<label>Jumlah Buku</label><br>
		<input type="text" name="jumlah_buku" value="<?php echo $peminjaman_buku['jumlah_buku']; ?>"><br>
		
		<input type="hidden" name="id" value="<?php echo $id ?>">
		<button type="submit" class="btn btn-primary">Simpan</button>
		</form>
	</div>
<?php include 'footer.php'; ?>

ph