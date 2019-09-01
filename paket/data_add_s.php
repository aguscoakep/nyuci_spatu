<?php
//meminta jembatan koneksi ke database
include "../koneksi.php";
//menerima inputan
$nama_paket		= $_POST['nama_paket'];
$harga			= $_POST['harga'];
$keterangan		= $_POST['keterangan'];


//pemerikasaan jika ada data inputan kosong
//sesuaikan dengan kebutuhan
if($nama_paket==""||$harga==""||$keterangan=="")
{
	?>
	<script language="javascript">
		alert('Masih ada data yang kosong');
		document.location.href="data_add.php";
	</script>
	<?php
}
//input ke tabel db
else
{ //query simpan ke db
	$sql="INSERT INTO paket VALUES ('','$nama_paket','$harga','$keterangan')";
			 
	if($koneksi->query($sql) === false) { // Jika gagal meng-insert data tampilkan pesan dibawah 'Perintah SQL Salah'
		trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
	} else { // Jika berhasil alihkan ke halaman tampil.php
		?>
		<script language="javascript">
			alert('Berhasil Disimpan');
			document.location.href="paket.php";
		</script>
		<?php
	}
}?> <!--tutup php--->
  
