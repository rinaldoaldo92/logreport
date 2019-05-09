<?php 

include('header.php');

$data_tt = "SELECT no_tt, status_tt FROM data_trouble_ticket WHERE alarm_detected = ''";
$query_data_tt = mysqli_query($koneksi, $data_tt);

?>
<div class="container-fluid min-vh-100">
<h2>Alarm</h2>
<div class="table-responsive">
<table class="table">
	<thead>
	<tr>
		<th>Alarm Detected</th>
		<th>Alarm Cleared</th>
		<th>Status Alarm</th>
		<th>ID TT</th>
		<th>Status TT</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($query_data_tt as $q) { ?>
	<tr>
		<td>2019/05/01 15:12</td>
		<td>2019/05/01 15:30</td>
		<td>Open</td>
		<td><?php echo $q['no_tt'] ?></td>
		<td><?php echo $q['status_tt'] ?></td>
	</tr>
	<?php } ?>
</tbody>
</table>
</div>
</div>
<?php 

include('footer.php');

?>