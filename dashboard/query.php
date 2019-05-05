<?php 

include('header.php');

?>
<div class="content-dashboard min-vh-100">
<h2>Query Report</h2>
<a href="create-query.php"><button class="btn btn-primary">Buat Template Report</button></a>
<hr>
<form method="GET" action="">
<div class="form-group row">
<label class="col-sm-1 col-sm-label">Template Report</label>
<div class="col-sm-5">
<select class="form-control">
	<option></option>
	<option></option>
	<option></option>
</select>
</div>
</div>
<div class="form-group row">
<label class="col-sm-1 col-sm-label">Create Date</label>
<div class="col-sm-5">
<input type="datetime" name="create_date">
</div>
</div>
<div class="form-group row">
<label class="col-sm-1 col-sm-label">End Date</label>
<div class="col-sm-5">
<input type="datetime" name="end_date">
</div>
</div>
<button class="btn btn-primary">Submit</button>
</form>
</div>
<?php 

include('footer.php');

?>