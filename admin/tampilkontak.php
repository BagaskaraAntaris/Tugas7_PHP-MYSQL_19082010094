<?php 
session_start();
include("config.php"); //include the config
$koneksi = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
?>
<html>
<head>
</head>
<body>
<?php 
if(isset($_SESSION['username']))
{
	echo "Welcome <h1>".$_SESSION['username']."</h1>";
?>	
	<table border="1">
		<tr>
			<th>Id</th>
			<th>USERNAME</th>
			<th>EMAIL</th>
			<th>NAMA DEPAN</th>
			<th>NAMA BELAKANG</th>
			<th>KOTA</th>
		</tr>
		<?php  
			$kontak = mysqli_query($koneksi, "SELECT * FROM tugas");
			foreach ($kontak as $row ) {
				echo 	"<tr>
							<td>".$row['id']."</td>
							<td>".$row['username']."</td>
							<td>".$row['email']."</td>
							<td>".$row['fname']."</td>
							<td>".$row['lname']."</td>
							<td>".$row['country']."</td>
						</tr>";
			}
		?>
<a href="logout.php">Logout</a>
<?php
}
else
{
	Header("location:login.php");
}
?>
</body>
</html>