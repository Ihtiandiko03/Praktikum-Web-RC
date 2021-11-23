<?php  
	//koneksi ke database
	require 'fungsi.php';
	require 'bootstrap.html';
	$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id ASC");

	//tombol cari diklik
	if ( isset($_POST["cari"]) ) {
		$mahasiswa = cari($_POST["keyword"]);
	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>BIODATA MAHASISWA</title>
	<style type="text/css">
		body{
			background-image: url("https://daridesignstudio.com/wp-content/uploads/2021/02/Fungsi-Gradasi-Warna.jpg");
			background-size: cover;
			background-repeat: no-repeat;
			color: white;
			font-family: Montserrat;
    		font-style: italic;
    		font-variant: small-caps;
		}
		th, td, a{
			color: white;
			font-family: Montserrat;
    		font-style: italic;
    		font-variant: small-caps;
		}
		h1{
			text-align: center;
			font-weight: bold;
		}
		a{
			text-decoration: none;
		}
		input{
			border-radius: 30px;
			border-color: blue;
		}
		a:hover {
		  color: blue;
		}
	</style>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>

	<form action="" method="post" style="float:right; margin-right: 30px;">
		<button type="submit" name="cari" class="btn btn-info" style="margin-left:30px; font-weight: bold;">Cari</button>
		<input type="text" name="keyword" size="30"  class="col-form-label" autofocus placeholder="Searching..." autocomplete="off">

	</form>
	<br>
	<a href="tambah.php" style="margin-left: 750px; font-weight: bold;">Tambah Data Mahasiswa</a>
	<br><br>

	<table class="table table-striped">

		<thead>
		<tr>
			<th scope="col">No.</th>
			<th scope="col">Aksi</th>
			<th scope="col">Gambar</th>
			<th scope="col">NIM</th>
			<th scope="col">Nama</th>
			<th scope="col">Prodi</th>
			<th scope="col">Email</th>
		</tr>
		</thead>

		<tbody>
		<?php $i = 1; ?>
		<?php foreach ( $mahasiswa as $row ):?>

		<tr>
			<td style="font-weight:bold;"><?= $i; ?></td>
			<td>
				<a style="color: #404040; font-weight: bold;" href="ubah.php?id=<?= $row["id"]; ?>">|Ubah|</a>
				<a style="color: red; font-weight: bold;" href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah anda yakin akan menghapus? ')">|Hapus|</a>
			</td>
			<td><img src="img/<?= $row["gambar"]; ?>" width="80" style="border-radius: 20px;"></td>
			<td><?= $row["nim"]; ?></td>
			<td><?= $row["nama"]; ?></td>
			<td><?= $row["jurusan"]; ?></td>
			<td><?= $row["email"]; ?></td>
		</tr>
		<?php $i++; ?>
		<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>