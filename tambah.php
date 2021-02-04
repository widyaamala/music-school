<?php
session_start();
if(!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}

require 'functions.php';

//cek apakah tombol submit telah ditekan
if(isset($_POST["submit"])){
	//cek keberhasilan
	if(tambah($_POST) > 0){
		echo "
		<script> 
			alert('Data Berhasil Ditambahkan!');
			document.location.href = 'index.php';
		</script>
		";
	} else {
		echo "
		<script> 
			alert('Data Gagal Ditambahkan!');
			document.location.href = 'index.php';
		</script>
		";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data User</title>
</head>
<body>

	<h1>Tambah Data User</h1>
	
		<form action="" method="post" enctype="multipart/form-data">
		<ul>
			<li>
				<label for="username">Username :</label>
				<input type="text" name="username" id="username"
				required>
			</li>
			<li>
				<label for="email">Email :</label>
				<input type="text" name="email" id="email"
				required>
			</li>
			<li>
				<label for="password">Password :</label>
				<input type="password" name="password" id="password"
				required>
			</li>
			<li>
				<label for="gambar">Gambar :</label>
				<input type="file" name="gambar" id="gambar">
			</li>
			<li>
				<button type="submit" name="submit">Tambah Data</button>
			</li>
		</ul>
		</form>

</body>
</html>
		