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
	<title>Dashboard Log Report System Manager</title>
	<link rel="stylesheet" type="text/css" href="/logreport/assets/style.css">
	<link rel="stylesheet" type="text/css" href="/logreport/assets/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/logreport/assets/bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="/logreport/assets/js/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="/logreport/assets/js/popper.min.js"></script>
	<script type="text/javascript" src="/logreport/assets/bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="/logreport/assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<div class="collapse navbar-collapse">
<ul class="navbar-nav mr-auto">
	<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	<li class="nav-item"><a href="task.php" class="nav-link">Task</a></li>
	<li class="nav-item"><a href="alarm.php" class="nav-link">Alarm</a></li>
	<li class="nav-item"><a href="query.php" class="nav-link">Query</a></li>
	<li class="nav-item"><a href="data.php" class="nav-link">Data Site/Client</a></li>
	<li class="nav-item"><a href="" class="nav-link">Logout</a></li>
</ul>
</div>
</nav>
<div class="content-dashboard">
<h2>Selamat datang, {{username}} </h2>
<hr>
<div class="row">
<div class="col-6">
<h2>Statistik</h2>
<b>01 Mei 2019, 15:32</b>
<p><b>Total TT Created :</b></p>
<p><b>Total TT Open :</b></p>
<p><b>Total TT Close :</b></p>
<hr>
<p><b>SLA Running :</b></p>
<p><b>Limit Access :</b></p>
<p><b>Block Access :</b></p>
<p><b>Project :</b></p>
<p><b>Access Issue :</b></p>
</div>
<div class="col-6">
<h2>Informasi Terbaru</h2>
<b>01 Mei 2019, 15:28</b>
<a href="test.php">[JADWAL] Meeting Koordinasi Engineer dan Koordinator Helpdesk</a>
</div>
</div>
<h2>Realtime Report</h2>
<div class="table-responsive">
<table class="table">
	<thead>
	<tr>
		<th>#</th>
		<th>ID TT</th>
		<th>Alarm Detected</th>
		<th>Created Date</th>
		<th>Code Site/Client</th>
		<th>Name Site/Client</th>
		<th>Status Action</th>
		<th>Log Action</th>
		<th>Status TT</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>1</td>
		<td>TT-0001-001</td>
		<td>2019/05/01 15:12</td>
		<td>2019/05/01 15:30</td>
		<td>CKD009</td>
		<td>RINAWATI_PASARIBU</td>
		<td>SLA Running</td>
		<td>Up1 01/05/2019 15:32 still coordination with team</td>
		<td>Open</td>
	</tr>
</tbody>
</table>
</div>
</div>
<div class="footer">
<h6 style="text-align: center">Copyright 2019, managed by Group of Information Technology and Operations.</h6>
</div>
</body>
</html>