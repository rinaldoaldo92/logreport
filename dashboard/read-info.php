<?php 

include('header.php');

$data_informations = "SELECT * FROM informations where id = '$_GET[id]'";
$rows_informations = mysqli_query($koneksi, $data_informations);

?>

<div class="container-fluid min-vh-100">
<h2>Informasi Penting</h2>
<hr>
<?php foreach ($rows_informations as $row) { ?>
<h2><?php echo $row['title_info'] ?></h2>
<b>Created by : <?php echo $row['created_by'] ?></b> | <b>Created on : <?php echo $row['created_on'] ?> </b>
<p><?php echo $row['description_info'] ?></p>
</div>
<?php } ?>
<?php 

include('footer.php');

?>