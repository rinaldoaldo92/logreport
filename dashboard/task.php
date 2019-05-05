<?php 

include('header.php');

$data = "SELECT * FROM ((log_action INNER JOIN data_trouble_ticket ON log_action.no_tt = data_trouble_ticket.no_tt) INNER JOIN information_site_client ON log_action.code_site_client = information_site_client.code_site_client)";
$rows = mysqli_query($koneksi, $data);

?>

<div class="content-dashboard min-vh-100">
<h2>Task Open</h2>
<a href="create-task.php"><button class="btn btn-primary">Create Task</button></a>
<hr>
<div class="table-responsive">
<table class="table">
	<thead>
	<tr>
		<th>ID TT</th>
		<th>Alarm Detected</th>
		<th>Created Date</th>
		<th>Code Site/Client</th>
		<th>Name Site/Client</th>
		<th>Task Title</th>
		<th>Task Description</th>
		<th>Status Action</th>
		<th>Log Action</th>
		<th>PIC Engineer on Site</th>
		<th>Status TT</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<?php foreach ($rows as $row) { ?>
		<td><?php echo $row['no_tt'] ?></td>
		<td><?php echo $row['alarm_detected'] ?></td>
		<td><?php echo $row['created_date'] ?></td>
		<td><?php echo $row['code_site_client'] ?></td>
		<td><?php echo $row['name_site_client'] ?></td>
		<td><?php echo $row['task_title'] ?></td>
		<td><?php echo $row['task_description'] ?></td>
		<td><?php echo $row['status_log_action'] ?></td>
		<td><?php echo $row['log_action'] ?></td>
		<td><?php echo $row['pic_engineer_on_site'] ?></td>
		<td><?php echo $row['status_tt']?></td>
		<?php } ?>
	</tr>
</tbody>
</table>
</div>
</div>
<?php 

include('footer.php');

?>