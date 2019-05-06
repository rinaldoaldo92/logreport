<?php 

include('header.php');

$data = "SELECT * FROM informations";
$rows = mysqli_query($koneksi, $data);

?>

<div class="content-dashboard min-vh-100">
<h2>Informasi Penting</h2>
<a href="create-info.php"><button class="btn btn-primary">Buat Informasi</button></a>
<hr>
<div class="table-responsive">
<table class="table">
	<thead>
	<tr>
		<th>Judul Informasi</th>
		<th>Dibuat Pada</th>
		<th>Dibuat Oleh</th>
		<th>Actions</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<?php foreach ($rows as $row) { ?>
		<td><?php echo $row['title_info'] ?></td>
		<td><?php echo $row['created_on'] ?></td>
		<td><?php echo $row['created_by'] ?></td>
		<td><a href="edit-info.php?id=<?php echo $row['id'] ?>"><button class="btn btn-secondary">Edit</button></a> | <a href="delete-info.php?id=<?php echo $row['id'] ?>"><button class="btn btn-danger">Delete</button></a> | <a href="read-info.php?id=<?php echo $row['id'] ?>"><button class="btn btn-primary">Open</button></td>
	</tr>
		<?php } ?>
</tbody>
</table>
</div>
</div>
<?php 

include('footer.php');

?>