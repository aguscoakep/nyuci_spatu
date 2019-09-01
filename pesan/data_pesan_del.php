<?php
//HAPUS
include "../koneksi.php";
$id	 	= $_GET['id'];
$result = mysqli_query($koneksi, "DELETE FROM pesan WHERE id_pesan = '$id'");
if ($result){ ?>
	<script language="javascript">
		document.location.href="data_add_pesan.php";
	</script>
<?php 
}else { 
		trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $koneksi->error, E_USER_ERROR);
}
?>