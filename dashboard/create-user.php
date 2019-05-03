<?php 

include('header.php');

?>
<div class="content-dashboard">
<h2>Create User</h2>
<hr>
<form method="POST" action="">
<div class="form-group">
<label>Nama</label>
<input type="text" name="task_title">
</div>
<div class="form-group">
<label>Username</label>
<textarea name="task_description"></textarea>
</div>
<div class="form-group">
<label>E-mail</label>
<textarea name="task_description"></textarea>
</div>
<div class="form-group">
<label>Jabatan</label>
<select name="code_site_client">
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
<select name="code_site_client">
	<option>ON</option>
	<option>OFF</option>
</select>
</div>
<div class="form-group">
<label>Buat Password</label>
<textarea name="task_description"></textarea>
</div>
<div class="form-group">
<label>Ulangi Password</label>
<textarea name="task_description"></textarea>
</div>
</form>
</div>
<?php 

include('footer.php');

?>
</body>
</html>