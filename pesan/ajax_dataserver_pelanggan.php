<?php
include "../koneksi.php";
$id_pelanggan = $_POST['id_pelanggan'];
$query = mysqli_query($koneksi, "SELECT * from pelanggan where id_pelanggan='$id_pelanggan'");

$kuku = mysqli_fetch_array($query);
$data_pelanggan = array( 'id_pelanggan'    	=>  $kuku['id_pelanggan'],
			   'nama_pelanggan'     		=>  $kuku['nama_pelanggan'],			   
			   'alamat'   					=>  $kuku['alamat'],			   
			   'no_hp'  					=>  $kuku['no_hp']  );
 echo json_encode($data_pelanggan);
?>