<?php 

include('header.php');

$data = "SELECT * FROM informations where id = '$_GET[id]'";
$rows = mysqli_query($koneksi, $data);

?>

<div class="container-fluid min-vh-100">
<h2>Informasi Penting</h2>
<hr>
<?php foreach ($rows as $row) { ?>
<h2><?php echo $row['title_info'] ?></h2>
<b>Created by : </b> | <b>Created on : <?php echo $row['created_on'] ?> </b>
<p><?php echo $row['description_info'] ?></p>
</div>
<?php } ?>
<?php 

include('footer.php');

?>