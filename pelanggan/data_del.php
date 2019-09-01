<?php
//HAPUS
include "../koneksi.php";
$id	 	= $_GET['id'];
$result = mysqli_query($koneksi, "DELETE FROM pelanggan WHERE id_pelanggan = '$id'");
if ($result){ ?>
	<script language="javascript">
			alert('Berhasil Dihapus');
		document.location.href="pelanggan.php";
	</script>
<?php 
}else { 
		trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $koneksi->error, E_USER_ERROR);
}
?>