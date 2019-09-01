<?php
//meminta jembatan koneksi ke database
include "../koneksi.php";
//menerima inputan
$no_pesan		= $_POST['no_pesan'];
$id_pelanggan	= $_POST['id_pelanggan'];
$merk_sepatu	= $_POST['merk_sepatu'];
$no_sepatu		= $_POST['no_sepatu'];
$warna_sepatu	= $_POST['warna_sepatu'];
$id_paket		= $_POST['id_paket'];
$harga			= $_POST['harga'];
$pengguna		= $_POST['id_pengguna'];


//pemerikasaan jika ada data inputan kosong
//sesuaikan dengan kebutuhan
if($no_sepatu==""||$id_pelanggan==""||$merk_sepatu==""||$no_sepatu==""||$warna_sepatu==""||$id_paket==""||$harga==""||$pengguna=="")
{
	?>
	<script language="javascript">
		alert('Masih ada data yang kosong');
		document.location.href="data_add_pesan.php";
	</script>
	<?php
}
//input ke tabel db
else
{ //query simpan ke db
	$sql="INSERT INTO pesan VALUES ('','$no_pesan','$id_pelanggan','$merk_sepatu','$no_sepatu','$warna_sepatu','$id_paket','$harga','$pengguna')";
			 
	if($koneksi->query($sql) === false) { // Jika gagal meng-insert data tampilkan pesan dibawah 'Perintah SQL Salah'
		trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
	} else { // Jika berhasil alihkan ke halaman tampil.php
		?>
		<script language="javascript">
			alert('Berhasil Disimpan');
			document.location.href="data_add_pesan.php";
		</script>
		<?php
	}
}?> <!--tutup php--->
  
