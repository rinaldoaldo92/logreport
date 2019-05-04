<?php 

include('header.php');

?>
<div class="content-dashboard min-vh-100">
<h2>Create User</h2>
<hr>
<form method="POST" action="">
<div class="form-group">
<label>Nama</label>
<input type="text" name="nama">
</div>
<div class="form-group">
<label>Username</label>
<input type="text" name="username">
</div>
<div class="form-group">
<label>E-mail</label>
<input type="email" name="email">
</div>
<div class="form-group">
<label>Jabatan</label>
<select name="role">
	<option>Direktur</option>
	<option>VP</option>
	<option>GM</option>
	<option>Engineer</option>
	<option>Koordinator</option>
	<option>Helpdesk</option>
</select>
</div>
<div class="form-group">
<label>Status</label>
<select name="status">
	<option>ON</option>
	<option>OFF</option>
</select>
</div>
<div class="form-group">
<label>Buat Password</label>
<input type="password" name="password">
</div>
<div class="form-group">
<label>Ulangi Password</label>
<input type="password" name="re_password">
</div>
<button class="btn btn-primary">Submit</button>
</form>
</div>
<?php 

include('footer.php');

?>
</body>
</html>