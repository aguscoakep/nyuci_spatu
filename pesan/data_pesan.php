<div class="body table-responsive">
                        <div class="panel-body">
                            <div class="table">
                                <table class="data table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID PESAN</th>
                                            <th>NAMA PELANGGAN</th>
                                            <th>MERK SEPATU</th>
                                            <th>NO SEPATU</th>
                                            <th>WARNA</th>
                                            <th>PAKET</th>
                                            <th>HARGA</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            include '../koneksi.php';
                                            $no=0;
                                            $result = mysqli_query($koneksi, "SELECT * FROM pesan JOIN pelanggan ON pesan.id_pelanggan=pelanggan.id_pelanggan");
                                            while($row = mysqli_fetch_assoc($result)) {
                                            $no++
                                        ?>
                                        <tr class="">
                                            <td><?php echo $row['id_pesan'];?></td>
                                            <td><?php echo $row['nama_pelanggan'];?></td>
                                            <td><?php echo $row['merk_sepatu'];?></td>
                                            <td><?php echo $row['no_sepatu'];?></td>
                                            <td><?php echo $row['warna'];?></td>
                                            <td><?php echo $row['id_paket'];?></td>
                                            <td><?php echo $row['harga'];?></td>
                                            <td>
                                                <a href="data_pesan_del.php?id=<?php echo $row['id_pesan'];?>" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Hapus</a>
                                            </td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                                            
                            <!-- modal konfirmasi-->
                        </div>
                    </div>




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




