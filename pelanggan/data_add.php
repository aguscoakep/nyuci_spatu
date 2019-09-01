<?php include 'header.php';  ?>
    <section class="content">
        <div class="container-fluid">
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                INPUT DATA PELANGGAN
                                <small> Silahkan Masukan Data Pelanggan</small>
                            </h2>
                        </div>
                    <form action="data_add_s.php" method="POST" accept-charset="utf-8">
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>NAMA PELANGGAN</label>
                                            <input type="text" name="nama_pelanggan" class="form-control" placeholder="Nama Pelanggan" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>ALAMAT PELANGGAN</label>
                                            <input type="text" name="alamat" class="form-control" placeholder="Alamat" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>NO TELEPON/ HP</label>
                                            <input type="number" name="no_hp"class="form-control" placeholder="no_hp" >
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