<?php 

include('header.php');

?>
<div class="content-dashboard">
<h2>Create Task</h2>
<hr>
<form method="POST" action="">
<div class="form-group">
<label>Judul Task</label>
<input type="text" name="task_title">
</div>
<div class="form-group">
<label>Keterangan Task</label>
<textarea name="task_description"></textarea>
</div>
<div class="form-group">
<label>Code Site/Client</label>
<select name="code_site_client">
	<option></option>
</select>
</div>
<div class="form-group">
<label>Selected Alarm</label>
</div>
</form>
</div>
<?php 

include('footer.php');

?>
</body>
</html>