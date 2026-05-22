<?php
// panggil koneksi
require_once('include/koneksi.php');

// include layout area header
$title 	= 'Data Pengguna';
include('layout/head.php');
// halaman khusus admin. Hanya bisa diakses user dengan level admin
if($_SESSION['akses_level'] != 'Admin') {
	// jika belum login, suruh login
	header("Location: index.php?status=akses_gagal");
}
include('layout/header.php');
// query user
$sql 		= "SELECT * FROM users ORDER BY id_user DESC";
$result 	= $conn->query($sql);

// proses form
if(isset($_POST['submit'])) {
	// ambil data yg diinput
	$id_user 		= $_POST['id_user'];
	$nama 			= $_POST['nama'];
	$email 			= $_POST['email'];
	$username 		= $_POST['username'];
	$password 		= $_POST['password'];
	$akses_level 	= $_POST['akses_level'];

	if($_POST['submit']=='tambah') {
		// check username dan email yang sama
		$sqlCheck 		= "SELECT * FROM users 
						WHERE username='$username' OR email = '$email' 
					LIMIT 1";
		// Execute the SQL query
		$resultCheck 	= $conn->query($sqlCheck);
		$userCheck 		= $resultCheck->fetch_assoc();
		if($userCheck) {
			header("Location: user.php?status=gagal");
		}
		// end check
		// query tambah
		$sql = "INSERT INTO users (nama, email, username, password, akses_level)
				VALUES ('$nama', '$email', '$username', '$password', '$akses_level')";
		$conn->query($sql);
	}else{
		// query edit
		$sql = "UPDATE users 
				SET nama 		= '$nama', 
					email 		= '$email',
					username 	= '$username',
					password 	= '$password',
					akses_level = '$akses_level'
				WHERE id_user='$id_user'";
		$conn->query($sql);
	}
	// redirect setelah proses tambah dan edit
	header("Location: user.php?status=sukses");
}
// end proses form
// proses delete
if(isset($_GET['delete'])) {
	$id_user = $_GET['delete'];
	// query delete
	$sql = "DELETE FROM users WHERE id_user='$id_user'";
	$conn->query($sql);
	// redirect setelah proses delete
	header("Location: user.php?status=sukses");
}
// end proses delete
// panggil form tambah user
include('include/user/tambah.php');
?>

<?php if(isset($_GET['status'])) { if($_GET['status']=='gagal') { ?>

	<div class="alert alert-warning">Username atau email sudah ada!</div>
<?php }elseif($_GET['status']=='sukses') { ?>

	<div class="alert alert-success">User berhasil ditambah/diupdate.</div>
<!-- end case belum login -->

<?php }} ?>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Username</th>
			<th>Level</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; while($row = $result->fetch_assoc()) { ?>
		<tr>
			<td><?php echo $no ?></td>
			<td><?php echo $row['nama'] ?></td>
			<td><?php echo $row['email'] ?></td>
			<td><?php echo $row['username'] ?></td>
			<td><?php echo $row['akses_level'] ?></td>
			<td>
				<?php include('include/user/edit.php'); ?>

				
			</td>
		</tr>
		<?php $no++; } ?>
	</tbody>
</table>

<?php 
// include layout area footer
include('layout/footer.php');
?>
