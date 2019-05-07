<?php 

include('header.php');

$select_data = "SELECT * FROM informations where id=$_GET[id]";
$rows = mysqli_query($koneksi, $select_data);

?>

<div class="container-fluid min-vh-100">
<h2>Edit Info</h2>
<hr>
<form method="POST" action="processupdateinfo.php">
<?php foreach($rows as $row) { ?>
<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
<div class="form-group row">
<label class="col-sm-1 col-sm-label">Judul Info</label>
<div class="col-sm-5">
<input type="text" name="title_info" class="form-control" value="<?php echo $row['title_info'] ?>">
</div>
</div>
<div class="form-group row">
<label class="col-sm-1 col-sm-label">Keterangan Info</label>
<div class="col-sm-5">
<textarea name="description_info" class="form-control" rows="10" required><?php echo $row['description_info'] ?></textarea>
</div>
</div>
<button class="btn btn-primary">Submit</button>
</form>
<?php } ?>
</div>
<?php 

include('footer.php');

?>