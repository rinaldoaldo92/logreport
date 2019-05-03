<?php 

include('header.php');

?>
<div class="content-dashboard">
<h2>Task Open</h2>
<a href="create-task.php"><button class="btn btn-primary">Create Task</button></a>
<hr>
<div class="table-responsive">
<table class="table">
	<thead>
	<tr>
		<th>#</th>
		<th>ID TT</th>
		<th>Alarm Detected</th>
		<th>Created Date</th>
		<th>Code Site/Client</th>
		<th>Name Site/Client</th>
		<th>Status Action</th>
		<th>Log Action</th>
		<th>Status TT</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>1</td>
		<td>TT-0001-001</td>
		<td>2019/05/01 15:12</td>
		<td>2019/05/01 15:30</td>
		<td>CKD009</td>
		<td>RINAWATI_PASARIBU</td>
		<td>SLA Running</td>
		<td>Up1 01/05/2019 15:32 still coordination with team</td>
		<td>Open</td>
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