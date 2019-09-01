<?php
//meminta jembatan koneksi ke database
include "../koneksi.php";
//menerima inputan
$no_sepatu		= $_POST['no_sepatu'];
$tanggal_pesan	= $_POST['tanggal_pesan'];
$sub_total		= $_POST['sub_total'];
$total_bayar	= $_POST['total_bayar'];
$kembalian		= $_POST['kembalian'];

//query simpan ke db
$sql="INSERT INTO transaksi VALUES ('','$no_sepatu','$tanggal_pesan','$sub_total','$total_bayar','$kembalian')";
?> <!--tutup php--->
  
