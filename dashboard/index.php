<?php 

include('header.php');
include('database.php');

$data = "SELECT * FROM ((log_action INNER JOIN data_trouble_ticket ON log_action.no_tt = data_trouble_ticket.no_tt) INNER JOIN information_site_client ON log_action.code_site_client = information_site_client.code_site_client)";
$rows = mysqli_query($koneksi, $data);

?>

<div class="content-dashboard min-vh-100">
<h2>Selamat datang, <?php echo $_SESSION['username'];?> </h2>
<hr>
<div class="row">
<div class="col-6">
<h2>Statistik</h2>
<b>01 Mei 2019, 15:32</b>
<p><b>Total TT Created :</b></p>
<p><b>Total TT Open :</b></p>
<p><b>Total TT Close :</b></p>
<hr>
<p><b>SLA Running :</b></p>
<p><b>Limit Access :</b></p>
<p><b>Block Access :</b></p>
<p><b>Project :</b></p>
<p><b>Access Issue :</b></p>
</div>
<div class="col-6">
<h2>Informasi Penting</h2>
<b>01 Mei 2019, 15:28</b>
<a href="test.php">[JADWAL] Meeting Koordinasi Engineer dan Koordinator Helpdesk</a>
</div>
</div>
<h2>Realtime Report</h2>
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
		<th>Status TT</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<?php foreach ($rows as $row) { ?>
		<td><?php echo $row['id'] ?></td>
		<td><?php echo $row['no_tt'] ?></td>
		<td><?php echo $row['alarm_detected'] ?></td>
		<td><?php echo $row['created_date'] ?></td>
		<td><?php echo $row['code_site_client'] ?></td>
		<td><?php echo $row['name_site_client'] ?></td>
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
</body>
</html>