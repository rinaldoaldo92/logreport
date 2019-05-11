<?php 

include('header.php');

date_default_timezone_set("Asia/Jakarta");
$now = date("d M Y, H:i");

?>

<div class="container-fluid min-vh-100">
<h2>Selamat datang, <?php echo $_SESSION['username'];?> </h2>
<hr>
<div class="row">
<div class="col-6">
<span class="fas fa-chart-area"></span><h2>Statistik</h2>
<h5><?php echo $now; ?></h5>
<div class="row">
<div class="col-6">
<p><b>Total TT Created :</b> <?php echo mysqli_num_rows($count_all) ?></p>
<p><b>Total TT Open :</b> <?php echo mysqli_num_rows($count_open) ?></p>
<p><b>Total TT Close :</b> <?php echo mysqli_num_rows($count_close) ?></p>
</div>
<div class="col-6">
<p><b>SLA Running :</b> <?php echo mysqli_num_rows($count_sla) ?></p>
<p><b>Limit Access :</b> <?php echo mysqli_num_rows($count_limit) ?></p>
<p><b>Block Access :</b> <?php echo mysqli_num_rows($count_block) ?></p>
<p><b>Vendor :</b> <?php echo mysqli_num_rows($count_vendor) ?></p>
</div>
</div>
</div>
<div class="col-6">
<span class="fas fa-info"></span><h2>Informasi Penting</h2>
<?php foreach($info_rows as $i_r) { ?>
<b><?php echo $i_r['created_on'] ?></b>
<a href="read-info.php?id=<?php echo $i_r['id'] ?>"><?php echo $i_r['title_info'] ?></a>
<br>
<?php } ?>
</div>
</div>
<span class="fas fa-rss"></span><h2>Realtime Report</h2>
<div class="table-responsive">
<table class="table">
	<thead>
	<tr>
		<th>ID TT</th>
		<th>Created Date</th>
		<th>Code Site/Client</th>
		<th>Status TT</th>
		<th>Status Log Action</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($rows_report as $row) { ?>
	<tr>
		<td><?php echo $row['no_tt'] ?></td>
		<td><?php echo $row['created_date'] ?></td>
		<td><?php echo $row['code_site_client'] ?></td>
		<td><?php echo $row['status_tt']?></td>
		<td><?php echo $row['status_log_action'];?></td>
	</tr>
	<?php } ?>
</tbody>
</table>
</div>
</div>
<?php 

include('footer.php');

?>