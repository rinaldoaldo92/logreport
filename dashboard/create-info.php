<?php 

include('header.php');

?>
<div class="content-dashboard min-vh-100">
<h2>Create Info</h2>
<hr>
<form method="POST" action="processnewinfo.php">
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
<button class="btn btn-primary">Submit</button>
</form>
</div>
<?php 

include('footer.php');

?>