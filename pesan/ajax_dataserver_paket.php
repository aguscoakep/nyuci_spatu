<?php
include "../koneksi.php";
$id_paket = $_POST['id_paket'];
$query = mysqli_query($koneksi, "SELECT * from paket where id_paket='$id_paket'");

$kuku = mysqli_fetch_array($query);
$data_paket = array( 'id_paket' =>  $kuku['id_paket'],
			   'nama_paket'     =>  $kuku['nama_paket'],			   
			   'harga'   		=>  $kuku['harga'],			   
			   'keterangan'  	=>  $kuku['keterangan']  );
 echo json_encode($data_paket);
?>