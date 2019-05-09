<?php 

include('header.php');

$data = "SELECT * FROM users";
$rows = mysqli_query($koneksi, $data);

?>

<div class="container-fluid min-vh-100">
<h2>Manajemen User</h2>
<a href="create-user.php"><button class="btn btn-primary">Tambah User</button></a>
<hr>
<div class="table-responsive">
<table class="table">
	<thead>
	<tr>
		<th>Nama User</th>
		<th>Jabatan User</th>
		<th>E-mail</th>
		<th>Username</th>
		<th>Status User</th>
		<th>Actions</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($rows as $row) { ?>
	<tr>
		<td><?php echo $row['nama'] ?></td>
		<td><?php echo $row['role'] ?></td>
		<td><?php echo $row['email'] ?></td>
		<td><?php echo $row['username'] ?></td>
		<td><?php echo $row['status'] ?></td> 
		<td><a href="edit-user.php?id=<?php echo $row['id'] ?>"><button class="btn btn-secondary">Edit</button></a> | <a href="delete-user.php?id=<?php echo $row['id'] ?>"><button class="btn btn-danger">Delete</button></a></td>
	</tr>
	<?php } ?>
</tbody>
</table>
</div>
</div>
<?php 

include('footer.php');

?>