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
	<h1>EDIT DATA</h1>
	<?php
		$id = $_GET['s_id'];
		$data = mysqli_query($koneksi, "SELECT * FROM dt_siswa WHERE s_id='$id'");
		while ($d = mysqli_fetch_array($data)) {
	?>
		<form action="action_edit.php" method="post">
			NIS : <br>
			<input type="hidden" value="<?= $d['s_id'] ?>" name="id" id="id"><br>
			<input type="number" value="<?= $d['s_nis'] ?>" name="nis" id="nis"><br>
			Nama : <br>
			<input type="text"  value="<?= $d['s_nama'] ?>" name="nama" id="nama"><br>
			Kelas : <br>
			<input type="text"  value="<?= $d['s_kelas'] ?>" name="kelas" id="kelas"><br>
			<input type="submit" value="Simpan">
		</form>
	<?php 
		}
	?>
</body>
</html>