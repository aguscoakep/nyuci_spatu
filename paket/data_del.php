<?php
//HAPUS
include "../koneksi.php";
$id	 	= $_GET['id'];
$result = mysqli_query($koneksi, "DELETE FROM paket WHERE id_paket = '$id'");
if ($result){ ?>
	<script language="javascript">
			alert('Berhasil Dihapus');
		document.location.href="paket.php";
	</script>
<?php 
}else { 
		trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $koneksi->error, E_USER_ERROR);
}
?>