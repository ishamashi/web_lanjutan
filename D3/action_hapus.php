<?php 
include 'koneksi.php';

$id = $_GET['s_id'];

mysqli_query($koneksi, "DELETE FROM dt_siswa WHERE s_id='$id'");

header("location:index.php");

?>