<?php 
include 'koneksi.php';

$id = $_POST['id'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];

mysqli_query($koneksi, "UPDATE dt_siswa SET s_nis='$nis', s_nama='$nama', s_kelas='$kelas' WHERE s_id='$id' ");

header("location:index.php");

?>