<?php

include('database.php');

$username = $_POST['username']; 
$password = $_POST['password'];

$select_data = "SELECT * FROM users";
$result = mysqli_query($koneksi ,$select_data, $username, $password);

if (mysqli_num_rows($result) > 0) {

	session_start();
	header('Location: dashboard');

} else {

	header('Location: index.php');
}

?>