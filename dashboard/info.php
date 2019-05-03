<?php 

include('header.php');

?>
<div class="content-dashboard">
<h2>Informasi Penting</h2>
<button class="btn btn-primary">Buat Informasi</button>
<hr>
<div class="table-responsive">
<table class="table">
	<thead>
	<tr>
		<th>#</th>
		<th>Judul Informasi</th>
		<th>Dibuat Pada</th>
		<th>Dibuat Oleh</th>
		<th>Actions</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>1</td>
		<td>[JADWAL] Meeting Koordinasi Engineer dan Koordinator Helpdesk</td>
		<td>01/05/2019, 15:28</td>
		<td>koor.helpdesk.wj</td>
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