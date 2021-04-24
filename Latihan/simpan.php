<?php  
	include 'koneksi.php';
	//menyimpan data ke dalam variable
	$nim			= $_POST['nim'];
	$nama			= $_POST['nama'];
	$jurusan		= $_POST['jurusan'];
	$jeniskelamin	= $_POST['jeniskelamin'];
	$alamat			= $_POST['alamat'];

	//query SQL untunk insert data
	$query = "INSERT INTO mahasiswa SET nim='$nim',nama='$nama', 
	jurusan='$jurusan', jeniskelamin='$jeniskelamin', alamat='$alamat'";

	mysqli_query($koneksi,$query);
	// mengalihkan ke halaman index.php

	header("location:index.php")
?>