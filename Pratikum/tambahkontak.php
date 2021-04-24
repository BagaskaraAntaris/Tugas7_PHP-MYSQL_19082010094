<!DOCTYPE html>
<html>
<head>
	<title>Form Input</title>
</head>
<body>
	<form method="post" action="tambahkontak.php">
		<table>
			<tr>
				<td>Nama</td>
				<td>
					<input type="text" name="nama" required="">
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<input type="radio" name="jkel" value="Laki-laki" required=""> Laki - Laki
					<input type="radio" name="jkel" value="Perempuan" required=""> Perempuan
				</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>
					<input type="text" name="email" required="">
				</td>
			</tr>
			<tr>
				<td>ALAMAT</td>
				<td>
					<input type="text" name="alamat" required="">
				</td>
			</tr>
			<tr>
				<td>Kota</td>
				<td>
					<input type="text" name="kota" required="">
				</td>
			</tr>
			<tr>
				<td>Pesan</td>
				<td>
					<input type="text" name="pesan" required="">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<button type="submit" name="submit" value="simpan">SIMPAN</button>
				</td>
			</tr>
		</table>
	</form>
	<?php  
	//konfigurasi database
	$host 		= "localhost";
	$user 		= "root";
	$password 	= "";
	$database 	= "pratikum";

	// Perintah php untuk akses ke database
	$koneksi = mysqli_connect($host, $user, $password, $database);
	if(isset($_POST['submit'])) {
		//menyimpan data ke dalam variable
		$nama			= $_POST['nama'];
		$jeniskelamin	= $_POST['jkel'];
		$email			= $_POST['email'];
		$alamat			= $_POST['alamat'];
		$kota			= $_POST['kota'];
		$pesan			= $_POST['pesan'];


		//query SQL untunk insert data
		$query = "INSERT INTO kontak (nama,jkel,email,alamat,kota,pesan) VALUES('$nama','$jeniskelamin','$email','$alamat','$kota','$pesan')";
		mysqli_query($koneksi,$query);
		header("location:index.php");
	}
	
?>
</body>
</html>