<?php

include('database.php');

session_start();

if(isset($_SESSION['username']) ?: isset($_SESSION['username'])) {
	header("Location: /logreport/dashboard");
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
	<meta content="" name="description">
	<title>Log Report System Manager</title>
	<link rel="stylesheet" type="text/css" href="assets/style.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="assets/js/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="assets/js/popper.min.js"></script>
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>