<?php

include('database.php');

	date_default_timezone_set("Asia/Jakarta");
	$id = $_POST['id'];
	$title_info = $_POST['title_info'];
	$description_info = $_POST['description_info'];
	$created_on = date("D, d-m-Y H:i");

	$update_info = "UPDATE informations SET title_info = ('$title_info'), description_info = ('$description_info'), created_on = ('$created_on') WHERE id = $id";
	$query = mysqli_query($koneksi, $update_info);

	header("Location: info.php");

?>