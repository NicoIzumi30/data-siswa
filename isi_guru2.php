<?php 
include("connect.php");
$no = $_POST['no'];
$celas = $_POST['y1'];
$wali = $_POST['y2'];
$bk = $_POST['y3'];

$query = "UPDATE wali SET kelas='$celas', wali_kelas='$wali', guru_bk='$bk' WHERE id_wali='$no'";
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
 <a href="wali.php"><h2>Tampilkan</h2></a>