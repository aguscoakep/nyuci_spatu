<?php include 'header.php'; ?>
     <section class="content">
        <div class="container-fluid">
            <!-- Basic Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                          <h2>DATA PAKET CUCI</h2>
                          <br>
                          <a href="data_add.php" class="btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="body table-responsive">
                        <div class="panel-body">
                            <div class="table">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID PAKET</th>
                                            <th>NAMA PAKET</th>
                                            <th>HARGA</th>
                                            <th>KETERANGAN</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            include '../koneksi.php';
                                            $no=0;
                                            $result = mysqli_query($koneksi, "SELECT * FROM paket ORDER BY nama_paket ASC");
                                            while($row = mysqli_fetch_assoc($result)) {
                                            $no++
                                        ?>
                                        <tr class="">
                                            <td><?php echo $row['id_paket'];?></td>
                                            <td><?php echo $row['nama_paket'];?></td>
                                            <td><?php echo $row['harga'];?></td>
                                            <td><?php echo $row['keterangan'];?></td>
                                     
                                            <td>
                                                <a href="data_edit.php?id=<?php echo $row['id_paket'];?>" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Edit</a>

                                                <a href="javascript:;" data-id="<?php  echo $row['id_paket'] ?>" data-toggle="modal" data-target="#modal-konfirmasi" class="btn btn-warning btn-sm"><i class="fas fa-trash-alt"></i> Hapus</a>
                                            </td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                                            
                            <!-- modal konfirmasi-->
                            <div id="modal-konfirmasi" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                     
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">Konfirmasi</h4>
                                    </div>
                                    <div class="modal-body btn-info">
                                        Apakah Anda yakin ingin menghapus data ini ?
                                    </div>
                                    <div class="modal-footer">
                                        <a href="javascript:;" class="btn btn-danger" id="hapus-true-data">Hapus</a>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                                    </div>
                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Table -->

        </div>
    </section>
    <script src="../asset/datatables/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <!-- <script src="../asset/datatables/js/bootstrap.min.js"></script> -->
    <script src="../asset/datatables/js/jquery.dataTables.js"></script>
    <script src="../asset/datatables/js/hapus.js"></script>
    <script src="../asset/datatables/js/dataTables.bootstrap.js"></script>
    <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>

<?php include 'footer.php'; ?>




