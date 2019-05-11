<?php 

include('header.php');

?>
<div class="container-fluid min-vh-100">
<h2>Create User</h2>
<hr>
<form method="POST" action="processnewuser.php">
<div class="form-group row">
<label class="col-sm-1 col-sm-label">Nama</label>
<div class="col-sm-5">
<input type="text" name="nama" class="form-control" required>
</div>
</div>
<div class="form-group row">
<label class="col-sm-1 col-sm-label">Username</label>
<div class="col-sm-5">
<input type="text" name="username" class="form-control" required>
</div>
</div>
<div class="form-group row">
<label class="col-sm-1 col-sm-label">E-mail</label>
<div class="col-sm-5">
<input type="email" name="email" class="form-control" required>
</div>
</div>
<div class="form-group row">
<label class="col-sm-1 col-sm-label">Jabatan</label>
<div class="col-sm-5">
<select name="role" class="form-control" required>
	<option>Direktur</option>
	<option>VP</option>
	<option>GM</option>
	<option>Engineer</option>
	<option>Koordinator</option>
	<option>Helpdesk</option>
</select>
</div>
</div>
<div class="form-group row">
<label class="col-sm-1 col-sm-label">Status</label>
<div class="col-sm-5">
<select name="status" class="form-control" required>
	<option>ON</option>
	<option>OFF</option>
</select>
</div>
</div>
<div class="form-group row">
<label class="col-sm-1 col-sm-label">Buat Password</label>
<div class="col-sm-5">
<input type="password" name="password" class="form-control" required>
</div>
</div>
<div class="form-group row">
<label class="col-sm-1 col-sm-label">Ulangi Password</label>
<div class="col-sm-5">
<input type="password" name="re_password" class="form-control" required>
</div>
</div>
<button class="btn btn-primary">Submit</button>
</form>
</div>
<?php

include('footer.php');

?>