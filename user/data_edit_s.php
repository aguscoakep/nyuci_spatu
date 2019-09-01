<?php
//meminta jembatan koneksi ke database
include "../koneksi.php";
//menerima inputan
$id_pengguna		= $_POST['id_pengguna'];
$nama_pengguna		= $_POST['nama_pengguna'];
$alamat_pengguna	= $_POST['alamat_pengguna'];
$no_hp_pengguna 	= $_POST['no_hp_pengguna'];
$username 			= $_POST['username'];
$password 			= $_POST['password'];
$role 				= $_POST['role'];

//pemerikasaan jika ada data inputan kosong
//sesuaikan dengan kebutuhan
if($nama_pengguna==""||$alamat_pengguna==""||$no_hp_pengguna==""||$username==""||$password==""||$role=="")
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
	$sql="UPDATE pengguna SET nama_pengguna='$nama_pengguna',alamat_pengguna='$alamat_pengguna',no_hp_pengguna='$no_hp_pengguna',username='$username',password='$password',role='$role' WHERE id_pengguna='$id_pengguna'";
			 
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
}?> 
  

  
