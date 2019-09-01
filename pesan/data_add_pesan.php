<?php include 'header.php';  ?>

<section class="content">
    <div class="container-fluid">
        <!-- Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                           DATA PELANGGAN
                            <small> Silahkan Masukan Data Pelanggan</small>
                         
                        </h2>
                    </div>
                    <form action="data_add_s.php" class="form-user" method="POST" >
                        <div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <label>ID PELANGGAN</label>
                                        <select class="form-control show-tick" data-live-search="true" name="id_pelanggan" onchange="isi_otomatis_pelanggan()" id="id_pelanggan">
                                            <option value="">--Pilih Pelanggan--</option>}
                                            <?php
                                                include '../koneksi.php';
                                                $result = mysqli_query($koneksi, "SELECT * FROM pelanggan");
                                                while($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                            <option value="<?php echo $row['id_pelanggan'] ?>"> <?php echo $row['id_pelanggan']; ?>  | <?php echo $row['nama_pelanggan']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <label>NO TELEPON / HP</label>
                                        <input type="number" name="no_hp"class="form-control" id="no_hp" placeholder="No HP" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <label>KASIR</label>
                                        <select class="form-control show-tick" data-live-search="true" name="id_pengguna" >
                                            <option value="">--Pilih pengguna--</option>}
                                            <?php
                                                include '../koneksi.php';
                                                $result = mysqli_query($koneksi, "SELECT * FROM pengguna");
                                                while($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                            <option value="<?php echo $row['id_pengguna'] ?>"> <?php echo $row['id_pengguna']; ?>  | <?php echo $row['nama_pengguna']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <label>PAKET</label>
                                        <select class="form-control show-tick" onchange="isi_otomatis_paket()" id="id_paket" data-live-search="true" name="id_paket" >
                                            <option value="">--Pilih paket--</option>}
                                            <?php
                                                include '../koneksi.php';
                                                $result = mysqli_query($koneksi, "SELECT * FROM paket");
                                                while($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                            <option value="<?php echo $row['id_paket'] ?>"> <?php echo $row['id_paket']; ?>  | <?php echo $row['nama_paket']; ?></option>
                                            <?php } ?>
                                        </select>
                                        
                                    </div>
                                </div>




                                <div class="form-group">
                                    <div class="form-line">
                                        <label>Harga</label>
                                        <input type="text" name="harga"class="form-control" id="harga"  placeholder="Harga" >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <!-- Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>

                            INPUT DATA PESAN
                            <small> Silahkan Masukan Data Pesanan</small>
                            <?php
                            include '../koneksi.php';
                            $no=1;//variabel no
                            $tampil = mysqli_query($koneksi,"SELECT * FROM transaksi ORDER BY no_pesan ASC");
                            while ($r=mysqli_fetch_array($tampil)){
                            $no++;
                           

                            }


                            ?>
                            <input type="text" name="no_pesan" value="<?php echo $no;?>">

                        </h2>
                    </div>
                        <div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <label>MERK SEPATU</label>
                                        <input type="text" name="merk_sepatu"  class="form-control"  placeholder="Merk Sepatu" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <label>UKURAN SEPATU</label>
                                        <input type="number" name="no_sepatu"class="form-control" placeholder="no_sepatu" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <label>WARNA SEPATU</label>
                                        <input type="text" name="warna_sepatu" class="form-control" placeholder="Warna Sepatu" >
                                    </div>
                                </div>
                                
                                <input type="submit" name="submit" class="btn btn-primary" value="Pesan">
                            </div>
                        </div>
                    </div>
                    </form>   
<!--------------------------------------------------------------------->
            <?php include 'data_pesan.php'  ?>
               
<!--------------------------------------------------------------------- -->

                <form action="" method="POST" accept-charset="utf-8">
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <label>TANGGAL PESAN</label>
                                        <input type="date" name="tanggal_pesan" class="form-control" placeholder="Tanggal Pesan" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <label>TOTAL BAYAR</label>
                                        <?php
                                            include '../koneksi.php';
                                            $result = mysqli_query($koneksi, "SELECT SUM(harga) AS total FROM `pesan`");
                                            while($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                        <input type="text" name="total_bayar" value="<?php echo $row['total']; ?>" class="form-control" placeholder="Total Bayar" />

                                        <?php }?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <label>PEMBAYARAN</label>
                                        <input type="number" name="pembayaran"class="form-control" placeholder="Pembayaran" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <label>KEMBALIAN</label>
                                        <input type="number" name="kembalian"class="form-control" placeholder="Kembalian" >
                                    </div>
                                </div>
                                <input type="submit" name="submit"  class="btn btn-primary" value="Proses">
                                
                            </div>
                        </div>
                    </div>
                </form> 
                </div>
            </div>
        </div>
    </div>
</section>

     
        <!-- #END# Input -->
<?php include 'footer.php';  ?>


<!-- ajax untuk menampilkan data otomatis -->
<script type="text/javascript">
function isi_otomatis_paket(){
var id_paket = $("#id_paket").val();
$.ajax({
    url: 'ajax_dataserver_paket.php',
    type: 'POST',
    data:"id_paket="+id_paket 
})
.success(function (data_paket) {
    var json = data_paket;
    obj = JSON.parse(json);
    // $('#nama_paket').val(obj.nama_paket);
   
    $('#harga').val(obj.harga);
    
    // $('#keterangan').val(obj.keterangan);
});
}
</script>
<!-- ajax untuk menampilkan data otomatis -->
<script type="text/javascript">
function isi_otomatis_pelanggan(){
var id_pelanggan = $("#id_pelanggan").val();
$.ajax({
    url: 'ajax_dataserver_pelanggan.php',
    type: 'POST',
    data:"id_pelanggan="+id_pelanggan 
})
.success(function (data_pelanggan) {
    var json = data_pelanggan;
    obj = JSON.parse(json);
    // $('#nama_paket').val(obj.nama_paket);
   
    $('#alamat').val(obj.alamat);
    
    $('#no_hp').val(obj.no_hp);
});
}
</script>


