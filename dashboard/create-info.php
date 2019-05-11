<?php 

include('header.php');

?>
<div class="container-fluid min-vh-100">
<h2>Create Info</h2>
<hr>
<form method="POST" action="processnewinfo.php">
<input type="hidden" name="username" value="<?php echo $_SESSION['username'] ?>">
<div class="form-group row">
<label class="col-sm-1 col-sm-label">Judul Info</label>
<div class="col-sm-5">
<input type="text" name="title_info" class="form-control" required>
</div>
</div>
<div class="form-group row">
<label class="col-sm-1 col-sm-label">Keterangan Info</label>
<div class="col-sm-5">
<textarea name="description_info" id="textarea_dashboard" class="form-control" rows="15" required></textarea>
</div>
</div>
<button class="btn btn-primary">Submit</button>
</form>
</div>
<script type="text/javascript">
CKEDITOR.replace('textarea_dashboard');
</script>
<?php

include('footer.php');

?>