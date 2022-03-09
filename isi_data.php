<?php 
include("connect.php");
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];

$query = "INSERT INTO siswa12 values('$nis','$nama','$kelas', '$jurusan')";
mysqli_query($konek, $query);
 ?>
<style type="text/css">
	body {
		background-image: url(images/aa.png);
		background-repeat: no-repeat;
		background-position: center;
		text-align: center;
		background-size: 20%;
	}
	a  {
	
		text-decoration: none;
	}
	a h2 {
		color: #94919a;;
	}
	h3 {
		color: #94919a;
		margin-top: 4%; 
	}
</style>
<h3>Data Berhasil Ditambahkan</h3>
 <a href="tampil.php"><h2>Tampilkan</h2></a>