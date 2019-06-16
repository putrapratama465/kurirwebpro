<?php
require_once('koneksi.php');
if($_POST){

	$sql = "UPDATE tb_paket SET resi='".$_POST['resi']."',nama_pengirim='".$_POST['nama_pengirim']."', alamat_pengirim='".$_POST['alamat_pengirim']."',telp_pengirim='".$_POST['telp_pengirim']."',nama_penerima='".$_POST['nama_penerima']."', alamat_penerima='".$_POST['alamat_penerima']."',telp_penerima='".$_POST['telp_penerima']."', jenis='".$_POST['jenis']."', berat='".$_POST['berat']."', harga='".$_POST['harga']."',tanggal_kirim='".$_POST['tanggal_kirim']."',tanggal_terima='".$_POST['tanggal_terima']."',lokasi='".$_POST['lokasi']."',status='".$_POST['status']."',keterangan='".$_POST['keterangan']."' WHERE resi=".$_POST['resi'];

	if ($koneksi->query($sql) === TRUE) {
	    echo "<script>
	alert('Data berhasil di update');
	window.location.href='index.php?page=crud/index';
	</script>";
	} else {
	    echo "Gagal: " . $koneksi->error;
	}

	$koneksi->close();
	
}else{
	$query = $koneksi->query("SELECT * FROM tb_paket WHERE resi=".$_GET['resi']);

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
			<input type="hidden" name="resi" value="<?= $data->resi ?>">
			<label><font color=Red>INPUT PENGIRIM</font></label>
			<hr>
			<div class="form-group">
				<label>Nama Pengirim</label>
				<input type="text" value="<?= $data->nama_pengirim ?>" class="form-control" name="nama_pengirim">
			</div>
			<div class="form-group">
				<label>Alamat Pengirim</label>
				<input type="textarea" value="<?= $data->alamat_pengirim ?>" class="form-control" name="alamat_pengirim">
			</div>
			<div class="form-group">
				<label>Telp Pengirim</label>
				<input type="text" value="<?= $data->telp_pengirim ?>" class="form-control" name="telp_pengirim">
			</div>
			<label><font color=Red>INPUT PENERIMA</font></label>
			<hr>
			<div class="form-group">
				<label>Nama Penerima</label>
				<input type="text" value="<?= $data->nama_penerima ?>" class="form-control" name="nama_penerima">
			</div>
			<div class="form-group">
				<label>Alamat Penerima</label>
				<input type="text" value="<?= $data->alamat_penerima ?>" class="form-control" name="alamat_penerima">
			</div>
			<div class="form-group">
				<label>Telp Penerima</label>
				<input type="text" value="<?= $data->telp_penerima ?>" class="form-control" name="telp_penerima">
			</div>
			<label><font color=Red>INPUT PAKET</font></label>
			<hr>
			<div class="form-group">
				<label>Jenis</label>
				<select class="form-control" name="jenis">
				<option value='<?= $data->jenis ?>'><?= $data->jenis ?></option>
				<option value='Dokumen'>Dokumen</option>
				<option value='Barang Pecah Belah'>barang Pecah Belah</option>
				<option value='Barang Umum'>Barang Umum</option>
				</select>
			</div>			
			<div class="form-group">
				<label>Berat (Kilo Gram)</label>
				<input type="text" value="<?= $data->berat ?>" class="form-control" name="berat">
			</div>			
			<div class="form-group">
				<label>Harga (RP)</label>
				<input type="text" value="<?= $data->harga ?>" class="form-control" name="harga">
			</div>			
			<div class="form-group">
				<label>Tanggal Kirim</label>
				<?php
				 $tgl=date('Y-m-d h:i:s');
				 ?>
				<input type="text" disabled value="<?= $data->tanggal_kirim ?>" class="form-control" name="tanggal_kirim">
				<input type="hidden" value="<?= $data->tanggal_kirim ?>" class="form-control" name="tanggal_kirim">
			</div>
			<div class="form-group">
				<label>Tanggal Update</label>
				<input type="text" value="<?php echo $tgl ; ?>" class="form-control" name="tanggal_terima">
			</div>
			<div class="form-group">
				<label>Lokasi</label>
				<select class="form-control" name="lokasi">
					<option value='<?= $data->lokasi ?>'><?= $data->lokasi ?></option>
					<option value='Jakarta'>Jakarta</option>
					<option value='Bandung'>Bandung</option>
					<option value='Surabaya'>Surabaya</option>
				</select>
			</div>
			<div class="form-group">
				<label>Status</label>
				<select class="form-control" name="status">
					<option value='<?= $data->status ?>'><?= $data->status ?></option>
					<option value='In Transit'>In Transit</option>
					<option value='Delivered'>Delivered</option>
					<option value='Delay'>Delay</option>
					<option value='OnHold'>OnHold</option>
					<option value='Return'>Return</option>
				</select>
			</div>
			<div class="form-group">
				<label>Keterangan</label>
				<input type="text" value="<?= $data->keterangan ?>" class="form-control" name="keterangan">
			</div>
			<input type="submit" class="btn btn-primary btn-sm" name="Update" value="Update">
		</form>
	</div>
</div>
<?php
}
mysqli_close($koneksi);
?>