<?php

include('database.php');

	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$role = $_POST['role'];
	$status = $_POST['status'];
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

	$update_data = "UPDATE users SET nama = ('$nama'), role = ('$role'), status = ('$status'), password = ('$password') WHERE id = $id";
	$query = mysqli_query($koneksi, $update_data);

	header('Location: manajemen.php');

?>