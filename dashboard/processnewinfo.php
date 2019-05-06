<?php

include('database.php');

	date_default_timezone_set("Asia/Jakarta");
	$title_info = $_POST['title_info'];
	$description_info = $_POST['description_info'];
	$created_on = date("d-m-Y H:i:a");

	$create_info = "INSERT INTO informations ($title_info, $description_info, $created_on) VALUES ('$title_info', '$description_info', '$created_on')";
	$query = mysqli_query($koneksi, $create_info);

?>