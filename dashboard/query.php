<?php 

include('header.php');

?>
<div class="content-dashboard">
<h2>Query Report</h2>
<button class="btn btn-primary">Buat Template Report</button>
<hr>
<form method="GET" action="">
<div class="form-group">
<label>Template Report</label>
<select>
	<option></option>
	<option></option>
	<option></option>
</select>
</div>
<div class="form-group">
<label>Create Date</label>
<input type="datetime" name="create_date">
</div>
<div class="form-group">
<label>End Date</label>
<input type="datetime" name="end_date">
</div>
</form>
</div>
<?php 

include('footer.php');

?>
</body>
</html>