<?php 
include("connect.php");
include("atas2.php");
$result = mysqli_query($konek, "select * from wali");



 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Wali</title>
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
 <table border="1" width="70%">
 	<thead>
 		<th>No</th>
 		<th>KELAS</th>
 		<th>WALI KELAS</th>
 		<th>GURU BK</th>
 	</thead>
 <?php
 while ($kol=mysqli_fetch_array($result)) {

	  echo "<tr>
			  <td>$kol[0]</td>
			  <td>$kol[1]</td>
			  <td>$kol[2]</td>
			  <td>$kol[3]</td>
	      </tr>";

}



  ?>
  </table>
  </center>
</body>
</html>
