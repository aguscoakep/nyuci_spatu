<?php
//meminta jembatan koneksi ke database
include "../koneksi.php";
//menerima inputan
$nama_pengguna		= $_POST['nama_pengguna'];
$alamat_pengguna	= $_POST['alamat_pengguna'];
$no_hp_pengguna		= $_POST['no_hp_pengguna'];
$username			= $_POST['no_hp_pengguna'];
$password			= $_POST['password'];
$role				= $_POST['role'];


//pemerikasaan jika ada data inputan kosong
//sesuaikan dengan kebutuhan
if($nama_pengguna==""||$alamat_pengguna==""||$no_hp_pengguna=="")
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
	$sql="INSERT INTO pengguna VALUES ('','$nama_pengguna','$alamat_pengguna','$no_hp_pengguna','$username','$password','$role')";
			 
	if($koneksi->query($sql) === false) { // Jika gagal meng-insert data tampilkan pesan dibawah 'Perintah SQL Salah'
		trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
	} else { // Jika berhasil alihkan ke halaman tampil.php
		?>
		<script language="javascript">
			alert('Berhasil Disimpan');
			document.location.href="pengguna.php";
		</script>
		<?php
	}
}?> <!--tutup php--->
  
