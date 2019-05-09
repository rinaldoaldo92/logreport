<?php

include('database.php');

	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$role = $_POST['role'];
	$status = $_POST['status'];
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

	$create_data = "INSERT into users (nama, email, username, role, status, password) VALUES ('$nama', '$email', '$username', '$role', '$status', '$password')";
	$query = mysqli_query($koneksi, $create_data);

	header('Location: manajemen.php');

?>