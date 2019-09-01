<?php include 'header.php';  ?>
    <section class="content">
        <div class="container-fluid">
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EDIT DATA PENGGUNA / USER
                                <small> Silahkan Masukan Data pengguna</small>
                            </h2>
                        </div>

                    <?php
                        include '../koneksi.php';
                        $id     = $_GET['id'];
                        $result = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE id_pengguna='$id'");
                        $row = mysqli_fetch_assoc($result);
                    ?>
                    <form action="data_edit_s.php" method="POST" accept-charset="utf-8">
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>ID PENGGUNA</label>
                                            <input type="text" name="id_pengguna" class="form-control" placeholder="id_pengguna" value="<?php echo $row['id_pengguna'];?>" readonly />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>NAMA PENGGUNA</label>
                                            <input type="text" name="nama_pengguna" class="form-control" value="<?php echo $row['nama_pengguna'];?>" placeholder="Nama pengguna" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>ALAMAT</label>
                                            <input type="text" name="alamat_pengguna" class="form-control" value="<?php echo $row['alamat_pengguna'];?>" placeholder="alamat" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>NO HP / TELEPON</label>
                                           <input type="text" name="no_hp_pengguna" class="form-control" value="<?php echo $row['no_hp_pengguna'];?>" placeholder="NO HP / TELEPON" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>USERNAME</label>
                                           <input type="text" name="username" class="form-control" value="<?php echo $row['username'];?>" placeholder="Username" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label>PASSWORD</label>
                                           <input type="text" name="password" class="form-control" value="<?php echo $row['password'];?>" placeholder="Password" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label>ROLE</label>
                                           <select name="role" class="form-control">
                                                <option value="<?php echo $row['password'];?>"><?php echo $row['password'];?></option>
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