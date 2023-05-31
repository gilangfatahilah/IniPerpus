 <div class="row">
     <div class="col-md-12">
         <!-- Advanced Tables -->
         <div class="panel panel-default">
             <div class="panel-heading">
                 Data Transaksi
             </div>
             <div class="panel-body">
                 <div class="table-responsive">
                     <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                         <thead>
                             <tr>

                                 <th>Judul</th>
                                 <th>ID</th>
                                 <th>Nama</th>
                                 <th>No HP</th>
                                 <th>Alamat</th>
                                 <th>Tanggal Pinjam</th>
                                 <th>Tanggal Kembali</th>
                                 <th>Terlambat</th>
                                 <th>Status</th>
                                 <th>Aksi</th>

                             </tr>
                         </thead>
                         <tbody>

                             <?php 

                                            $sql = $koneksi->query("select * from transaksi where status='pinjam'");

                                            while ($data= $sql->fetch_assoc()) {
                                                # code...
                                            
                                         ?>

                             <tr>
                                 <td><?php echo $data['judul'] ?></td>
                                 <td><?php echo $data['id'] ?></td>
                                 <td><?php echo $data['nama'] ?></td>
                                 <td><?php echo $data['nohp'] ?></td>
                                 <td><?php echo $data['alamat'] ?></td>
                                 <td><?php echo $data['tgl_pinjam'] ?></td>
                                 <td><?php echo $data['tgl_kembali'] ?></td>
                                 <td>

                                     <?php 

                                                    $denda = 5000;

                                                    $tgl_dateline2 = $data['tgl_kembali'];
                                                    $tgl_kembali = date('d-m-Y');

                                                    $lambat = terlambat($tgl_dateline2, $tgl_kembali);
                                                    $denda1 = $lambat*$denda;

                                                    if ($lambat>0) {
                                                        echo "

                                                                <font color='red'>$lambat hari<br>(Rp $denda1)</font>

                                                            ";
                                                    }else{
                                                        echo $lambat ."Hari";
                                                    }


                                                ?>


                                 </td>
                                 <td><?php echo $data['status'] ?></td>
                                 <td>
                                     <a href="?page=transaksi&aksi=kembali&id=<?php echo $data['id']; ?>&judul=<?php echo $data['judul']; ?>"
                                         class="btn btn-info"><i class="fa fa-back"></i> kembali</a>
                                     <a href="?page=transaksi&aksi=ubah&id=<?php echo $data['id']; ?>"
                                         class="btn btn-info"><i class="fa fa-edit"></i> Ubah</a>
                                     <a onclick="return confirm('Yakin ingin menghapus data?')"
                                         href="?page=transaksi&aksi=hapus&id=<?php echo $data['id']; ?>"
                                         class="btn btn-warning"><i class="fa fa-trash"></i> Hapus</a>

                                 </td>
                             </tr>


                             <?php 
                                        } ?>

                         </tbody>
                     </table>
                     <a href="page/transaksi/laporan.php" class="btn btn-success"> Cetak Laporan</a>
                 </div>
             </div>
         </div>
     </div>
 </div>