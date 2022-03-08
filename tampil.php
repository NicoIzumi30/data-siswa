<?php 
include("connect.php");
include("atas.php");
$result = mysqli_query($konek, "select * from siswa12");



 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tampil</title>
	<style>
		}
		table{
			border-collapse: collapse;
			width: 100%;		
		}
		th,td {
			text-align: center;
			padding: 8px;
		}
		tr:nth-child(even){
			background-color: #f2f2f2;
		}
		th {
			background-color:#8da3c7;
			color: white;
		}
	</style>
</head>
<body>

<center>
 <table border="1" width="100%">
 	<thead>
 		<th>NIS</th>
 		<th>NAMA</th>
 		<th>KELAS</th>
 		<th>JURUSAN</th>
 		<th>UBAH</th>
 		<th>HAPUS</th>
 	</thead>
 <?php
 while ($kol=mysqli_fetch_array($result)) {
	  echo "<tr>
			  <td>$kol[0]</td>
			  <td>$kol[1]</td>
			  <td>$kol[2]</td>
			  <td>$kol[3]</td>
			  <td> <a href='ambil_nilai.php?nis=$kol[0]&nama=$kol[1]&kelas=$kol[2]&jurusan=$kol[3]'>Edit</a></td>
			  <td> <a href='hapus_nilai.php?nis=$kol[0]'>Hapus</a></td>
	      </tr>";

}



  ?>
  </table>
  <a href="isi_siswa2.php"><button class="btn fourth" style=" margin: 0; margin-top: 10px; background-color: #8da3c7; font-size: 8px; ">Data Baru</button></a>
  </center>
</body>
</html>
<?php include("bawah.php") ?>
