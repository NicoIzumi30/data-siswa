<?php 
include("connect.php");
$nis = $_GET['nis'];

$query = "DELETE FROM siswa12 WHERE nis='$nis'";
mysqli_query($konek, $query);
 ?>

 <style type="text/css">
	body {
		background-image: url(images/pp.png);
		background-repeat: no-repeat;
		background-position: center;
		text-align: center;
		background-size: 15%;
	}
	a  {
	
		text-decoration: none;
	}
	a h2 {
		margin-top: 2%;
		color: #cb4f37;
	}
	h4 {
		color: #cb4f37;
		margin-top: 4%; 
	}
</style>
<h4>Data Berhasil Dihapus</h4>
 <a href="tampil2.php"><h2>Tampilkan</h2></a>