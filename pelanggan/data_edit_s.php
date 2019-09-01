<?php
//meminta jembatan koneksi ke database
include "../koneksi.php";
//menerima inputan
$id_pelanggan		= $_POST['id_pelanggan'];
$nama_pelanggan		= $_POST['nama_pelanggan'];
$alamat				= $_POST['alamat'];
$no_hp 				= $_POST['no_hp'];

//pemerikasaan jika ada data inputan kosong
//sesuaikan dengan kebutuhan
if($nama_pelanggan==""||$alamat==""||$no_hp=="")
{
	?>
	<script language="javascript">
		alert('Masih ada data yang kosong');
		document.location.href="data_edit.php?id=<?echo $id; ?>";
	</script>
	<?php
}
//input ke tabel db
else
{ //query simpan ke db
	$sql="UPDATE pelanggan SET nama_pelanggan='$nama_pelanggan',alamat='$alamat',no_hp='$no_hp' WHERE id_pelanggan='$id_pelanggan'";
			 
	if($koneksi->query($sql) === false) { // Jika gagal meng-insert data tampilkan pesan dibawah 'Perintah SQL Salah'
		trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
	} else { // Jika berhasil alihkan ke halaman tampil.php
		?>
		<script language="javascript">
			alert('Berhasil Disimpan');
			document.location.href="pelanggan.php";
		</script>
		<?php
	}
}?> 
  

  
