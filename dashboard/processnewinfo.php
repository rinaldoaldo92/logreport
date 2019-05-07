<?php

include('database.php');

	date_default_timezone_set("Asia/Jakarta");
	$title_info = $_POST['title_info'];
	$description_info = $_POST['description_info'];
	$created_by = $_POST['username'];
	$created_on = date("D, d-m-Y H:i");

	$create_info = "INSERT INTO informations (title_info, description_info, created_by, created_on) VALUES ('$title_info', '$description_info', '$created_by', '$created_on')";
	$query = mysqli_query($koneksi, $create_info);

	header("Location: info.php");

?>