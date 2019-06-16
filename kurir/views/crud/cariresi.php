<?php
require_once('koneksi.php');
$resi		= $_POST['resi'];

$query = "SELECT * FROM tb_paket WHERE resi='$resi'";
$urlcrud = "index.php?page=crud/";
?>
<h3>Hasil Pencarian Nomor Resi</h3>

<div class="row">
	<div class="col-lg-12">
		<a href="<?= $urlcrud.'create' ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
		<table class="table table-hover table-bordered" style="margin-top: 10px">
			<tr class="success">
				<th width="50px">No</th>
				<th>Resi</th>
				<th>Nama Pengirim</th>
				<th>Alamat Pengirim</th>
				<th>Telp Pengirim</th>
				<th>Nama Penerima</th>
				<th>Alamat Penerima</th>
				<th>Telp Penerima</th>
				<th>Jenis</th>
				<th>Berat</th>
				<th>Harga</th>
				<th>Tgl Kirim</th>
				<th>Tgl Update</th>
				<th>Lokasi</th>
				<th>Status</th>
				<th>Keterangan</th>
				<th style="text-align: center;">Actions</th>
			</tr>
			<?php
			if($data=mysqli_query($koneksi,$query)){
				$a=1;
				while($obj=mysqli_fetch_object($data)){
					?>
					<tr>
						<td><?= $a ?></td>
						<td><?= $obj->resi ?></td>
						<td><?= $obj->nama_pengirim ?></td>
						<td><?= $obj->alamat_pengirim ?></td>
						<td><?= $obj->telp_pengirim ?></td>
						<td><?= $obj->nama_penerima ?></td>
						<td><?= $obj->alamat_penerima ?></td>
						<td><?= $obj->telp_penerima ?></td>
						<td><?= $obj->jenis ?></td>
						<td><?= $obj->berat ?></td>
						<td><?= $obj->harga ?></td>
						<td><?= $obj->tanggal_kirim ?></td>
						<td><?= $obj->tanggal_terima ?></td>
						<td><?= $obj->lokasi ?></td>
						<td><?= $obj->status ?></td>
						<td><?= $obj->keterangan ?></td>
						<td style="text-align: center;">
						<a onclick="return confirm('Apakah yakin data akan di hapus?')" href="<?= $urlcrud.'hapus&resi='.$obj->resi ?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
						<a href="<?= $urlcrud.'edit&resi='.$obj->resi ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span></a>
						</td>
					</tr>
					<?php
					$a++;
				}
				mysqli_free_result($data);
			}
			?>
		</table>
	</div>
</div>
<?php
mysqli_close($koneksi);
?>