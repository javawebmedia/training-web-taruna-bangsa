<?php 
// panggil koneksi database
require_once('include/koneksi.php');
// proses login
if(isset($_POST['submit'])) {
	$username 	= $_POST['username'];
	$password 	= $_POST['password'];
	// query login
	$sql 		= "SELECT * 
	FROM users 
	WHERE username='$username' AND password = '$password' 
	LIMIT 1";
	// Execute the SQL query
	$result = $conn->query($sql);
	$user 	= $result->fetch_assoc();

	// redirect page jika gagal atau sukses
	if($user) {
		// set session saat data ditemukan
		$_SESSION['id_user']		= $user['id_user'];
		$_SESSION['nama']			= $user['nama'];
		$_SESSION['username']		= $user['username'];
		$_SESSION['akses_level']	= $user['akses_level'];
		// end session
		header("Location: dasbor.php");
	}else{
		header("Location: index.php?status=gagal");
	}
}
// untuk logout
if(isset($_GET['logout'])) {
	session_destroy();
	// setelah logout redirect ke halaman index
	header("Location: index.php?status=sukses");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Halaman Beranda</title>
	<!-- css bootstrap -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<!-- css buatan sendiri -->
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container login p-5">
		<h1>Halaman Login</h1>

		<?php if(isset($_GET['status'])) { if($_GET['status']=='gagal') { ?>

			<div class="alert alert-warning">Username atau password salah!</div>
		<!-- case belum login -->
		<?php }elseif($_GET['status']=='akses_gagal') { ?>

			<div class="alert alert-warning">Anda belum login</div>
		<!-- end case belum login -->
		<?php }else{ ?>

			<div class="alert alert-success">Anda berhasil logout.</div>
			
		<?php }} ?>

		<form action="index.php" method="post" accept-charset="utf-8">
			
			<div class="form-floating mb-3">
				<input type="text" name="username" class="form-control" id="username" placeholder="Username">
				<label for="username">Username</label>
			</div>

			<div class="form-floating mb-3">
				<input type="password" name="password" class="form-control" id="password" placeholder="Password">
				<label for="password">Password</label>
			</div>

			<div class="mb-3">
				<button class="btn btn-success btn-lg w-100" name="submit" value="Login" type="submit">
					Login
				</button>
			</div>

		</form>

	</div>
</body>
</html>