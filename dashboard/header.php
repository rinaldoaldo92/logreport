<?php 

include('database.php');
include('execute_dashboard.php');

session_start();

if(!isset($_SESSION['username'])) {
	header("Location: /logreport/index.php?pesan=belum_login");
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta content='#29C5FF' name='theme-color'>
	<meta content="#29C5FF" name="msapplication-navbutton-color">
	<meta content="#29C5FF" name="apple-mobile-web-app-status-bar-style">
	<meta content="dashboard log report" name="description">
	<title>Dashboard Log Report System Manager</title>
	<link rel="stylesheet" type="text/css" href="/logreport/assets/style.css">
	<link rel="stylesheet" type="text/css" href="/logreport/assets/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/logreport/assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/logreport/assets/fontawesome/webfontcss/css/fontawesome-all.css">
	<link rel="stylesheet" type="text/css" href="/logreport/assets/fontawesome/webfontcss/css/fontawesome-all.min.css">
	<script type="text/javascript" src="/logreport/assets/js/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="/logreport/assets/js/popper.min.js"></script>
	<script type="text/javascript" src="/logreport/assets/bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="/logreport/assets/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/logreport/assets/js/ckeditor/ckeditor.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
	<ul class="navbar-nav mr-auto">
	<li class="nav-item"><a href="index.php" class="nav-link"><span class="fas fa-home"></span> Home</a></li>
	<li class="nav-item"><a href="task.php" class="nav-link"><span class="fas fa-tasks"></span> Task</a></li>
	<li class="nav-item"><a href="query.php" class="nav-link"><span class="fas fa-angle-double-right"></span> Query</a></li>
	<li class="nav-item"><a href="data.php" class="nav-link"><span class="fas fa-database"></span> Data Site/Client</a></li>
	<?php if($_SESSION['role'] == 'Engineer') { 
	 echo "<li class='nav-item'><a href='info.php' class='nav-link'><span class='fas fa-info'></span> Informasi Penting</a></li>";
	 echo "<li class='nav-item'><a href='manajemen.php' class='nav-link'><span class='fas fa-users'></span> Manajemen User</a></li>";
	} ?>
	<li class="nav-item"><a href="logout.php" class="nav-link"><span class="fas fa-sign-out-alt"></span> Logout</a></li>
</ul>
</div>
</nav>