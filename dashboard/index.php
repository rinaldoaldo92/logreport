<?php 

include('header.php');

?>

<div class="content-dashboard">
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