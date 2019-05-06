<?php 

include('header.php');

$report = "SELECT * FROM log_action INNER JOIN data_trouble_ticket ON log_action.no_tt = data_trouble_ticket.no_tt";
$rows = mysqli_query($koneksi, $report);

$info = "SELECT * FROM informations";
$info_rows = mysqli_query($koneksi, $info);

$select_all = "SELECT COUNT(no_tt) from data_trouble_ticket";
$count_all = mysqli_query($koneksi, $select_all);

$select_open = "SELECT COUNT(no_tt) from data_trouble_ticket WHERE status_tt = 'Open'";
$count_open = mysqli_query($koneksi, $select_open);

$select_close = "SELECT COUNT(no_tt) from data_trouble_ticket WHERE status_tt = 'Close'";
$count_close = mysqli_query($koneksi, $select_close);

date_default_timezone_set("Asia/Jakarta");
$now = date("d M Y, H:i");

?>

<div class="content-dashboard min-vh-100">
<h2>Selamat datang, <?php echo $_SESSION['username'];?> </h2>
<hr>
<div class="row">
<div class="col-6">
<h2>Statistik</h2>
<b><?php echo $now; ?></b>
<p><b>Total TT Created :</b>
<?php 
print_r($count_all); 
?>
</p>
<p><b>Total TT Open :</b><?php $count_open; ?></p>
<p><b>Total TT Close :</b><?php $count_close; ?></p>
<hr>
<p><b>SLA Running :</b></p>
<p><b>Limit Access :</b></p>
<p><b>Block Access :</b></p>
<p><b>Project :</b></p>
<p><b>Access Issue :</b></p>
</div>
<div class="col-6">
<h2>Informasi Penting</h2>
<?php foreach($info_rows as $i_r) { ?>
<b><?php echo $i_r['created_on'] ?></b>
<a href="read-info.php?id=<?php echo $i_r['id'] ?>"><?php echo $i_r['title_info'] ?></a>
<?php } ?>
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