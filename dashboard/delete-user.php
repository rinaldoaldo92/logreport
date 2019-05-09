<?php

include('database.php');

$get_id = $_GET['id'];

$select_data = "DELETE FROM users WHERE id = $get_id";
$delete = mysqli_query($koneksi, $select_data);

header('Location: manajemen.php');

?>