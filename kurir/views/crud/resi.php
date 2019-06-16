<?php
require_once('koneksi.php');
$urlcrud = "index.php?page=crud/";
?>
<h3>Form Pencarian Nomor Resi</h3>

<form action="<?= $urlcrud.'cariresi' ?>" method="POST">
	<label>Cari :</label>
	<input type="text" name="resi">
	<input type="submit" value="Cari">
</form>

<?php
mysqli_close($koneksi);
?>