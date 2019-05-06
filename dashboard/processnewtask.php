<?php

include('database.php');

	date_default_timezone_set("Asia/Jakarta");
	$task_title = $_POST['task_title'];
	$task_description = $_POST['task_description'];
	$code_site_client = $_POST['code_site_client'];
	$status_tt = 'Open';
	$generate_tt = 'TT-000' echo $;
	$no_tt = ++$generate_tt;
	$created_date = date("d-m-Y, H:i:s");

	$create_data = "INSERT INTO data_trouble_ticket (no_tt, created_date, task_title, task_description, status_tt) VALUES ('$no_tt', '$created_date', '$task_title', '$task_description', '$status_tt')"; 
	$create_data2 = "INSERT INTO log_action (no_tt, code_site_client) VALUES ('$no_tt', '$code_site_client')";
	$query = mysqli_query($koneksi, $create_data);
	$query2 = mysqli_query($koneksi, $create_data2);

	header('Location: task.php');

?>