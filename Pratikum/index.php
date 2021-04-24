<?php
	//konfigurasi database
	$host 		= "localhost";
	$user 		= "root";
	$password 	= "";
	$database 	= "pratikum";

	// Perintah php untuk akses ke database
	$koneksi = mysqli_connect($host, $user, $password, $database);
 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa</title>
	<style type="text/css">
		a{
			text-decoration: none;
			color: black;
		}
	</style>
</head>
<body>
	<h2>KONTAK</h2>
	<table border="1">
		<tr>
			<th>Id</th>
			<th>NAMA</th>
			<th>GENDER</th>
			<th>EMAIL</th>
			<th>ALAMAT</th>
			<th>KOTA</th>
			<th>PESAN</th>
		</tr>
		<?php  
			$kontak = mysqli_query($koneksi, "SELECT * FROM kontak");
			foreach ($kontak as $row ) {
				echo 	"<tr>
							<td>".$row['id']."</td>
							<td>".$row['nama']."</td>
							<td>".$row['jkel']."</td>
							<td>".$row['email']."</td>
							<td>".$row['alamat']."</td>
							<td>".$row['kota']."</td>
							<td>".$row['pesan']."</td>
						</tr>";
			}
		?>
	</table>
	<button>
		<a href="tambahkontak.php">INSERT</a>
	</button>
</body>
</html>