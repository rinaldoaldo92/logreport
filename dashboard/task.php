<?php 

include('header.php');

$data = "SELECT * FROM log_action INNER JOIN data_trouble_ticket ON log_action.no_tt = data_trouble_ticket.no_tt";
$rows = mysqli_query($koneksi, $data);

?>

<div class="container-fluid min-vh-100">
<h2>Task Open</h2>
<a href="create-task.php"><button class="btn btn-primary">Create Task</button></a>
<hr>
<div class="table-responsive">
<table class="table">
	<thead>
	<tr>
		<th>ID TT</th>
		<th>Created Date</th>
		<th>Code Site/Client</th>
		<th>Task Title</th>
		<th>Task Description</th>
		<th>Status Action</th>
		<th>Log Action</th>
		<th>PIC Engineer on Site</th>
		<th>Status TT</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($rows as $row) { ?>
	<tr>
		<td><?php echo $row['no_tt'] ?></td>
		<td><?php echo $row['created_date'] ?></td>
		<td><?php echo $row['code_site_client'] ?></td>
		<td><?php echo $row['task_title'] ?></td>
		<td><?php echo $row['task_description'] ?></td>
		<td>
		<select>
			<option>SLA Running</option>
			<option>Limit Access</option>
			<option>Vendor</option>
			<option>Block Access</option>
		</select>
		</td>
		<td><p>Up1 07/05/2019 20:17 dummy</p></td>
		<td>
		<select>
			<option>Dedi</option>
			<option>Carli</option>
			<option>Otoy</option>
		</select>	
		</td>
		<td>
		<select>
			<option><?php echo $row['status_tt'] ?></option>
			<option>Open</option>
			<option>Close</option>
		</select>
		</td>
	</tr>
	<?php } ?>
</tbody>
</table>
</div>
</div>
<?php 

include('footer.php');

?>