<?php 
include("connect.php");
$nis = $_POST['x1'];
$nama = $_POST['x2'];
$kelas = $_POST['x3'];
$jurusan = $_POST['x4'];

$query = "UPDATE siswa12 SET nama='$nama', kelas='$kelas',jurusan='$jurusan' WHERE nis='$nis'";
mysqli_query($konek, $query);
 ?>
<style type="text/css">
	body {
		background-image: url(images/bb.png);
		background-repeat: no-repeat;
		background-position: center;
		text-align: center;
		background-size: 15%;
	}
	a  {
	
		text-decoration: none;
	}
	a h2 {
		color: #879db9;
	}
	h3 {
		color: #879db9;
		margin-top: 5%; 
	}
</style>
<h3>Data Berhasil Di Ubah</h3>
 <a href="tampil2.php"><h2>Tampilkan</h2></a>