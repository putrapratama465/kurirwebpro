<?php
require_once('koneksi.php');
try {
	$sql = "DELETE FROM users WHERE id_user=".$_GET['id_user'];
	$koneksi->query($sql);
} catch (Exception $e) {
	echo $e;
	die();
}
  echo "<script>
	alert('Data berhasil di hapus');
	window.location.href='index.php?page=crud/admin';
	</script>";
?>