<?php 

include('header.php');

$data = "SELECT * FROM information_site_client";
$rows = mysqli_query($koneksi, $data);

?>

<div class="content-dashboard min-vh-100">
<h2>Data Site/Client</h2>
<div class="table-responsive">
<table class="table">
	<thead>
	<tr>
		<th>Code Site/Client</th>
		<th>Name Site/Client</th>
		<th>PIC Site/Client</th>
		<th>Alamat Site/Client</th>
		<th>Service Class</th>
	</tr>
	</thead>
	<tbody>
	<tr>
	<?php foreach ($rows as $row) { ?>
		<td><?php echo $row['code_site_client']?></td>
		<td><?php echo $row['name_site_client']?></td>
		<td><?php echo $row['pic_site_client']?></td>
		<td><?php echo $row['alamat_site_client']?></td>
		<td><?php echo $row['service_class']?></td>
	</tr>
	<?php } ?>
</tbody>
</table>
</div>
</div>
<?php 

include('footer.php');

?>