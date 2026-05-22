<?php 
// proteksi halaman harus login
if( ! isset($_SESSION['username'])) {
	// jika belum login, suruh login
	header("Location: index.php?status=akses_gagal");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $title ?></title>
	<!-- css bootstrap -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<!-- css buatan sendiri -->
	<link rel="stylesheet" href="css/style.css">
</head>




