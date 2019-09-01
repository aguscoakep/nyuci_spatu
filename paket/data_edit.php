<?php include 'header.php';  ?>
    <section class="content">
        <div class="container-fluid">
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                INPUT DATA PAKET
                                <small> Silahkan Masukan Data Paket Cucian</small>
                            </h2>
                        </div>

                    <?php
                        include '../koneksi.php';
                        $id     = $_GET['id'];
                        $result = mysqli_query($koneksi, "SELECT * FROM paket WHERE id_paket='$id'");
                        $row = mysqli_fetch_assoc($result);
                    ?>
                    <form action="data_edit_s.php" method="POST" accept-charset="utf-8">
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>KODE PAKET</label>
                                            <input type="text" name="id_paket" class="form-control" placeholder="Kode Paket" value="<?php echo $row['id_paket'];?>" readonly />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>NAMA PAKET</label>
                                            <input type="text" name="nama_paket" class="form-control" value="<?php echo $row['nama_paket'];?>" placeholder="Nama Paket" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>HARGA PAKET</label>
                                            <input type="text" name="harga" class="form-control" value="<?php echo $row['harga'];?>" placeholder="Harga" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>Keterangan</label>
                                            <textarea name="keterangan"  name="keterangan" class="form-control"  placeholder="Keterangan"><?php echo $row['keterangan'];?></textarea>
                                        </div>
                                    </div>
                                    <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <!-- #END# Input -->
<?php include 'footer.php';  ?>