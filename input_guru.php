<?php 
include("connect.php");
$celas = $_POST['celas'];
$wali = $_POST['wali_kelas'];
$bk = $_POST['bk'];

$query = "INSERT INTO wali values('','$celas','$wali','$bk')";
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
		margin-top: 5%; 
	}
</style>
<h3>Data Berhasil Ditambahkan</h3>
 <a href="wali.php"><h2>Tampilkan</h2></a>