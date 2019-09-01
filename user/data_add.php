<?php include 'header.php';  ?>
    <section class="content">
        <div class="container-fluid">
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                INPUT DATA pengguna
                                <small> Silahkan Masukan Data pengguna</small>
                            </h2>
                        </div>
                    <form action="data_add_s.php" method="POST" accept-charset="utf-8">
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>NAMA PENGGUNA</label>
                                            <input type="text" name="nama_pengguna" class="form-control" placeholder="Nama Pengguna" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>ALAMAT PENGGUNA</label>
                                            <input type="text" name="alamat_pengguna" class="form-control" placeholder="Alamat" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>NO TELEPON/ HP</label>
                                            <input type="number" name="no_hp_pengguna"class="form-control" placeholder="No HP/ Telepon" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>USERNAME</label>
                                            <input type="text" name="username"class="form-control" placeholder="Username" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>PASSWORD</label>
                                            <input type="password" name="password"class="form-control" placeholder="Password" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>ROLE</label>
                                            <select name="role" class="form-control">
                                                <option value="">----pilih----</option>
                                                <option value="admin">admin</option>
                                                <option value="user">user</option>
                                            </select>
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