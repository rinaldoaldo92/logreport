<?php

include('database.php');

	$id = $_POST['id'];
	$role = $_POST['role'];
	$status = $_POST['status'];
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

	$update_data = "UPDATE users SET role = '$role', status = ($status), password = ($password) WHERE users.id = $id";
	$query = mysqli_query($koneksi, $update_data);

	header('Location: manajemen.php');

?>