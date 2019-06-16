<?php
require_once('koneksi.php');
if($_POST){
	try {
		$sql = "INSERT INTO tb_paket (resi, nama_pengirim, alamat_pengirim, 
									telp_pengirim, nama_penerima, alamat_penerima, 
									telp_penerima, jenis, berat, harga, tanggal_kirim, 
									tanggal_terima, lokasi, status, keterangan) 
				VALUES ('','".$_POST['nama_pengirim']."','".$_POST['alamat_pengirim']."'
									,'".$_POST['telp_pengirim']."','".$_POST['nama_penerima']."'
									,'".$_POST['alamat_penerima']."','".$_POST['telp_penerima']."'
									,'".$_POST['jenis']."','".$_POST['berat']."','".$_POST['harga']."'
									,'".$_POST['tanggal_kirim']."','".$_POST['tanggal_terima']."'
									,'".$_POST['lokasi']."','".$_POST['status']."','".$_POST['keterangan']."')";
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
	window.location.href='index.php?page=crud/index';
	</script>";
}
?>
<div class="row">
	<div class="col-lg-6">
		<form action="" method="POST">
			<label><font color=Red>INPUT PENGIRIM</font></label>
			<hr>
			<div class="form-group">
				<label>Nama Pengirim</label>
				<input type="text" value="" class="form-control" name="nama_pengirim">
			</div>
			<div class="form-group">
				<label>Alamat Pengirim</label>
				<input type="textarea" value="" class="form-control" name="alamat_pengirim">
			</div>
			<div class="form-group">
				<label>Telp Pengirim</label>
				<input type="text" value="" class="form-control" name="telp_pengirim">
			</div>
			<label><font color=Red>INPUT PENERIMA</font></label>
			<hr>
			<div class="form-group">
				<label>Nama Penerima</label>
				<input type="text" value="" class="form-control" name="nama_penerima">
			</div>
			<div class="form-group">
				<label>Alamat Penerima</label>
				<input type="text" value="" class="form-control" name="alamat_penerima">
			</div>
			<div class="form-group">
				<label>Telp Penerima</label>
				<input type="text" value="" class="form-control" name="telp_penerima">
			</div>
			<label><font color=Red>INPUT PAKET</font></label>
			<hr>
			<div class="form-group">
				<label>Jenis</label>
				<select class="form-control" name="jenis">
				<option value='Dokumen'>Dokumen</option>
				<option value='Barang Pecah Belah'>barang Pecah Belah</option>
				<option value='Barang Umum'>Barang Umum</option>
				</select>
			</div>			
			<div class="form-group">
				<label>Berat (Kilo Gram)</label>
				<input type="text" value="" class="form-control" name="berat">
			</div>			
			<div class="form-group">
				<label>Harga (RP)</label>
				<input type="text" value="" class="form-control" name="harga">
			</div>			
			<div class="form-group">
				<label>Tanggal Kirim</label>
				<?php
				 $tgl=date('Y-m-d h:i:s');
				 ?>
				<input type="text" value="<?php echo $tgl ; ?>" class="form-control" name="tanggal_kirim">
			</div>
			<div class="form-group">
				<label>Tanggal Update</label>
				<input disabled type="text" value="" class="form-control" name="tanggal_terima">
			</div>
			<div class="form-group">
				<label>Lokasi</label>
				<select class="form-control" name="lokasi">
					<option value='Jakarta'>Jakarta</option>
					<option value='Bandung'>Bandung</option>
					<option value='Surabaya'>Surabaya</option>
				</select>
			</div>
			<div class="form-group">
				<label>Status</label>
				<select class="form-control" name="status">
					<option value='In Transit'>In Transit</option>
					<option value='Delivered'>Delivered</option>
					<option value='Delay'>Delay</option>
					<option value='OnHold'>Sedang dalam perjalanan</option>
					<option value='Return'>Return</option>
				</select>
			</div>
			<div class="form-group">
				<label>Keterangan</label>
				<input type="text" value="" class="form-control" name="keterangan">
			</div>
			<input type="submit" class="btn btn-primary btn-sm" name="create" value="Create">
		</form>
	</div>
</div>