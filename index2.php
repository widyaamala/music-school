<?php
session_start();
if(!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}

require 'functions.php';
$user = query("SELECT * FROM user");

//tombol cari diklik
if(isset($_POST["cari"])){
	$user = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>

<a href="logout.php">Logout</a>

<h1>Daftar User</h1>

<a href="tambah.php">Tambah Data User</a>
<br></br>

<form action="" method="post">
	<input type="text" name="keyword" size="30" autofocus 
	placeholder="masukkan keyword pencarian" autocomplete="off">
	<button type="submit" name="cari">Cari</button>
</form>

<br>

<table border="1" cellpading="10" cellspacing="0">

	<tr>
		<th>No.</th>
		<th>Aksi</th>
		<th>Username</th>
		<th>Password</th>
		<th>NIP</th>
		<th>Foto</th>
	</tr>
	
	<?php $i = 1; ?>
	<?php foreach ($user as $row) : ?>
	<tr>
		<td><?= $i; ?></td>
		<td>
			<a href="ubah.php?id=<?= $row["id"]; ?>">Edit</a> |
			<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="
				return confirm('Are You Sure to Delete This Data?');">Delete</a>
		</td>
		<td><?= $row["username"]; ?></td>
		<td><?= $row["password"]; ?></td>
		<td><?= $row["nip"]; ?></td>
		<td><?= $row["foto"]; ?></td>
	</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
</table>
	
</body>
</html>
		