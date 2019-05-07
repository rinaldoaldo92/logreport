<?php 

include('header.php');

?>
<div class="container-fluid min-vh-100">
<h3>Log Report System Manager</h3>
<form method="POST" action="processlogin.php">
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