<?php
require_once('koneksi.php');
try {
	$sql = "DELETE FROM tb_paket WHERE resi=".$_GET['resi'];
	$koneksi->query($sql);
} catch (Exception $e) {
	echo $e;
	die();
}
  echo "<script>
	alert('Data berhasil di hapus');
	window.location.href='index.php?page=crud/index';
	</script>";
?>