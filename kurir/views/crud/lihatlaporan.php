<?php
require_once ('koneksi.php');
$dari		= $_POST['dari'];
$sampai		= $_POST['sampai'];
$query = "SELECT * FROM tb_paket
			WHERE tanggal_kirim 
			BETWEEN '$dari' AND '$sampai' 
			ORDER BY resi ASC";
?>
<center><font size='5'><b>LAPORAN JASA KURIR PRIODE <?php echo $dari.' S/d '.$sampai ;?></font></b><br>
=================================================================================<br>
<table class="table table-bordered" border='1'>
<tr>
				<td>No</td>
				<td>Resi</td>
				<td>Nama Pengirim</td>
				<td>Alamat Pengirim</td>
				<td>Telp Pengirim</td>
				<td>Nama Penerima</td>
				<td>Alamat Penerima</td>
				<td>Telp Penerima</td>
				<td>Jenis</td>
				<td>Berat</td>
				<td>Harga</td>
				<td>Tgl Kirim</td>
				<td>Tgl Terima</td>
				<td>Lokasi</td>
				<td>Status</td>
				<td>Keterangan</td>
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
						</td>
					</tr>
					<?php
					$a++;
				}
				mysqli_free_result($data);
			}
			?>
	<br>
	<button onClick="window.print();">Print</button>
</table>