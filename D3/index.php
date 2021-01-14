<?php 
	include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CRUD</title>
</head>
<body>
	<h1>CRUD PHP ISHAMASHI</h1>
	<form action="action_simpan.php" method="post">
		NIS : <br>
		<input type="number" name="nis" id="nis"><br>
		Nama : <br>
		<input type="text" name="nama" id="nama"><br>
		Kelas : <br>
		<input type="text" name="kelas" id="kelas"><br>
		<input type="submit" value="Simpan">
	</form>
	<hr>
	<table border="1" width="600px">
		<tr>
			<td>No</td>
			<td>NIS</td>
			<td>Nama</td>
			<td>Kelas</td>
			<td>Action</td>
		</tr>
		<?php 
			$data = mysqli_query($koneksi, "SELECT * FROM dt_siswa");
			while($d = mysqli_fetch_array($data)){
		?>
			<tr>
				<td><?= $d['s_id']; ?></td>
				<td><?= $d['s_nis']; ?></td>
				<td><?= $d['s_nama']; ?></td>
				<td><?= $d['s_kelas']; ?></td>
				<td><a href="action_hapus.php?s_id=<?= $d['s_id'] ?>">Hapus</a> || <a href="edit.php?s_id=<?= $d['s_id'] ?>">Edit</a></td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>