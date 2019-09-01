<?php include 'header.php';  ?>
    <section class="content">
        <div class="container-fluid">
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EDIT DATA PELANGGAN
                                <small> Silahkan Masukan Data Pelanggan</small>
                            </h2>
                        </div>

                    <?php
                        include '../koneksi.php';
                        $id     = $_GET['id'];
                        $result = mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE id_pelanggan='$id'");
                        $row = mysqli_fetch_assoc($result);
                    ?>
                    <form action="data_edit_s.php" method="POST" accept-charset="utf-8">
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>ID PELANGGAN</label>
                                            <input type="text" name="id_pelanggan" class="form-control" placeholder="id_pelanggan" value="<?php echo $row['id_pelanggan'];?>" readonly />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>NAMA PELANGGAN</label>
                                            <input type="text" name="nama_pelanggan" class="form-control" value="<?php echo $row['nama_pelanggan'];?>" placeholder="Nama Pelanggan" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>ALAMAT</label>
                                            <input type="text" name="alamat" class="form-control" value="<?php echo $row['alamat'];?>" placeholder="alamat" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>Keterangan</label>
                                           <input type="text" name="no_hp" class="form-control" value="<?php echo $row['no_hp'];?>" placeholder="no_hp" />
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