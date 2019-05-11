<?php 

include('header.php');

if(isset($_SESSION['username'])) {
	header("Location: /logreport/dashboard");
}

?>
<div class="container-fluid min-vh-100">
<h3>Log Report System Manager</h3>
<form method="POST" action="processlogin.php">
<?php

if(isset($_GET['pesan'])) {
	if($_GET['pesan'] == 'gagal_login') {
		echo "<div class='alert alert-danger'>Username dan password yang diinput salah. Silahkan cek kembali.</div>";
	} elseif ($_GET['pesan'] == 'sudah_logout') {
		echo "<div class='alert alert-info'>Anda telah logout.</div>";
	} elseif ($_GET['pesan'] == 'belum_login') {
		echo "<div class='alert alert-danger'>Anda belum login, silahkan login dulu disini.</div>";
	}
}
?>
<div class="form-group row">
<label class="col-sm-1 col-form-label">Username</label>
<div class="col-sm-3">
<input type="text" name="username" class="form-control" required>
</div>
</div>
<div class="form-group row">
<label class="col-sm-1 col-form-label">Password</label>
<div class="col-sm-3">
<input type="password" name="password" class="form-control" required>
</div>
</div>
<button class="btn btn-primary">Masuk</button>
</form>
</div>
<?php 

include('footer.php');

?>