<?php 

include('header.php');

?>
<div class="content-dashboard">
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
		<td>1</td>
		<td>Adi Aryanto</td>
		<td>Koordinator</td>
		<td>koor.helpdesk.wj</td>
		<td>koorhelpdesk.wj@agus.net.id</td>
		<td>ON</td>
		<td><button class="btn btn-secondary">Edit</button> | <button class="btn btn-danger">Delete</button> | <button class="btn btn-primary">Open</button></td>
	</tr>
	<tr>
		<td>2</td>
		<td>Tonny Kusno</td>
		<td>Koordinator</td>
		<td>koor.helpdesk.cj</td>
		<td>koorhelpdesk.cj@agus.net.id</td>
		<td>ON</td>
		<td><button class="btn btn-secondary">Edit</button> | <button class="btn btn-danger">Delete</button> | <button class="btn btn-primary">Open</button></td>
	</tr>
	<tr>
		<td>3</td>
		<td>Helpdesk West Java</td>
		<td>Helpdesk</td>
		<td>helpdesk.wj</td>
		<td>helpdesk.wj@agus.net.id</td>
		<td>ON</td>
		<td><button class="btn btn-secondary">Edit</button> | <button class="btn btn-danger">Delete</button> | <button class="btn btn-primary">Open</button></td>
	</tr>
	<tr>
		<td>4</td>
		<td>Helpdesk Central Java</td>
		<td>Helpdesk</td>
		<td>helpdesk.cj</td>
		<td>helpdesk.cj@agus.net.id</td>
		<td>ON</td>
		<td><button class="btn btn-secondary">Edit</button> | <button class="btn btn-danger">Delete</button> | <button class="btn btn-primary">Open</button></td>
	</tr>
	<tr>
		<td>5</td>
		<td>Reno Nursyamsul</td>
		<td>Engineer</td>
		<td>engineer.java</td>
		<td>engineer.java@agus.net.id</td>
		<td>ON</td>
		<td><button class="btn btn-secondary">Edit</button> | <button class="btn btn-danger">Delete</button> | <button class="btn btn-primary">Open</button></td>
	</tr>
	<tr>
		<td>6</td>
		<td>Ubaidillah</td>
		<td>Engineer</td>
		<td>engineer.java</td>
		<td>engineer.java@agus.net.id</td>
		<td>ON</td>
		<td><button class="btn btn-secondary">Edit</button> | <button class="btn btn-danger">Delete</button> | <button class="btn btn-primary">Open</button></td>
	</tr>
	<tr>
		<td>6</td>
		<td>Nana Suryana</td>
		<td>Engineer</td>
		<td>engineer.java</td>
		<td>engineer.java@agus.net.id</td>
		<td>ON</td>
		<td><button class="btn btn-secondary">Edit</button> | <button class="btn btn-danger">Delete</button> | <button class="btn btn-primary">Open</button></td>
	</tr>
</tbody>
</table>
</div>
</div>
<?php 

include('footer.php');

?>
</body>
</html>