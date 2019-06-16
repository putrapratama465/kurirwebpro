<?php
require_once('koneksi.php');
if($_POST){

	$sql = "UPDATE users SET nama='".$_POST['nama']."', username='".$_POST['username']."'
					, password='".MD5($_POST['password'])."' WHERE id_user=".$_POST['id_user'];

	if ($koneksi->query($sql) === TRUE) {
	    echo "<script>
	alert('Data berhasil di update');
	window.location.href='index.php?page=crud/admin';
	</script>";
	} else {
	    echo "Gagal: " . $koneksi->error;
	}

	$koneksi->close();
	
}else{
	$query = $koneksi->query("SELECT * FROM users WHERE id_user=".$_GET['id_user']);

	if($query->num_rows > 0){
		$data = mysqli_fetch_object($query);
	}else{
		echo "data tidak tersedia";
		die();
	}
?>
<div class="row">
	<div class="col-lg-6">
		<form action="" method="POST">
			<input type="hidden" name="id_user" value="<?= $data->id_user ?>">
			<label><font color=Red>INPUT DATA ADMIN</font></label>
			<hr>
			<div class="form-group">
				<label>Nama User</label>
				<input type="text" value="<?= $data->nama ?>" class="form-control" name="nama">
			</div>
			<div class="form-group">
				<label>Username</label>
				<input type="textarea" value="<?= $data->username ?>" class="form-control" name="username">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="text" value="<?= $data->password ?>" class="form-control" name="password">
			</div>
			<input type="submit" class="btn btn-primary btn-sm" name="Update" value="Update">
		</form>
	</div>
</div>
<?php
}
mysqli_close($koneksi);
?>