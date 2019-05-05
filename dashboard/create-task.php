<?php 

include('header.php');

?>
<div class="content-dashboard min-vh-100">
<h2>Create Task</h2>
<hr>
<form method="POST" action="processnewtask.php">
<div class="form-group row">
<label class="col-sm-1 col-sm-label">Judul Task</label>
<div class="col-sm-5">
<input type="text" name="task_title" class="form-control" required>
</div>
</div>
<div class="form-group row">
<label class="col-sm-1 col-sm-label">Keterangan Task</label>
<div class="col-sm-5">
<textarea name="task_description" class="form-control" rows="10" required></textarea>
</div>
</div>
<div class="form-group row">
<label class="col-sm-1 col-sm-label">Code Site/Client</label>
<div class="col-sm-5">
<select name="code_site_client" class="form-control" required>
	<option></option>
</select>
</div>
</div>
<div class="form-group row">
<label class="col-sm-1 col-sm-label">Selected Alarm</label>
<div class="col-sm-5">
<select name="code_site_client" class="form-control" required>
	<option></option>
</select>
</div>
</div>
<button class="btn btn-primary">Submit</button>
</form>
</div>
<?php 

include('footer.php');

?>