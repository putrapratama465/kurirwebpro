<?php
require_once('koneksi.php');
if($_POST){
	try {
		$sql = "INSERT INTO users (id_user, nama, username, password, level_user) 
				VALUES ('','".$_POST['nama']."','".$_POST['username']."','".MD5($_POST['password'])."','admin')";
		if(!$koneksi->query($sql)){
			echo $koneksi->error;
			die();
		}

	} catch (Exception $e) {
		echo $e;
		die();
	}
	  echo "<script>
	alert('Data berhasil di simpan');
	window.location.href='index.php?page=crud/admin';
	</script>";
}
?>
<div class="row">
	<div class="col-lg-6">
		<form action="" method="POST">
			<label><font color=Red>INPUT ADMIN USER</font></label>
			<hr>
			<div class="form-group">
				<label>Nama User</label>
				<input type="text" value="" class="form-control" name="nama">
			</div>
			<div class="form-group">
				<label>Username</label>
				<input type="textarea" value="" class="form-control" name="username">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="text" value="" class="form-control" name="password">
			</div>
			<input type="submit" class="btn btn-primary btn-sm" name="create" value="Create">
		</form>
	</div>
</div>