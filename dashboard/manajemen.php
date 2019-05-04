<?php 

include('header.php');
include('database.php');

$data = "SELECT * FROM users";
$rows = mysqli_query($koneksi, $data);

?>

<div class="content-dashboard min-vh-100">
<h2>Manajemen User</h2>
<a href="create-user.php"><button class="btn btn-primary">Tambah User</button></a>
<hr>
<div class="table-responsive">
<table class="table">
	<thead>
	<tr>
		<th>#</th>
		<th>Nama User</th>
		<th>Jabatan User</th>
		<th>Username</th>
		<th>E-mail</th>
		<th>Status User</th>
		<th>Actions</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<?php foreach ($rows as $row) { ?>
		<td><?php echo $row['id'] ?></td>
		<td><?php echo $row['nama'] ?></td>
		<td><?php echo $row['role'] ?></td>
		<td><?php echo $row['email'] ?></td>
		<td><?php echo $row['username'] ?></td>
		<td><?php echo $row['status'] ?></td> 
		<td><a href="edit-user.php?<?php echo $row['id'] ?>"><button class="btn btn-secondary">Edit</button></a> | <a href="delete-user.php?<?php echo $row['id'] ?>"><button class="btn btn-danger">Delete</button></a></td>
	</tr>
	<?php } ?>
</tbody>
</table>
</div>
</div>
<?php 

include('footer.php');

?>
</body>
</html>