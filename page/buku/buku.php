 <a href="?page=buku&aksi=tambah" class="btn btn-danger " style="margin-bottom: 10px;">Tambah</a>
 <div class="row">
     <div class="col-md-12">
         <!-- Advanced Tables -->
         <div class="panel panel-default">
             <div class="panel-heading">
                 Data Buku
             </div>
             <div class="panel-body">
                 <div class="table-responsive">
                     <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                         <thead>
                             <tr>

                                 <th>Judul</th>
                                 <th>Pengarang</th>
                                 <th>Penerbit</th>
                                 <th>ISBN</th>
                                 <th>Tahun Terbit</th>
                                 <th>Jumlah Buku</th>
                                 <th>Aksi</th>
                             </tr>
                         </thead>
                         <tbody>

                             <?php 

                                            $sql = $koneksi->query("select * from buku");

                                            while ($data= $sql->fetch_assoc()) {
                                                # code...
                                            
                                         ?>

                             <tr>
                                 <td><?php echo $data['judul'] ?></td>
                                 <td><?php echo $data['pengarang'] ?></td>
                                 <td><?php echo $data['penerbit'] ?></td>
                                 <td><?php echo $data['isbn'] ?></td>
                                 <td><?php echo $data['tahun_terbit'] ?></td>
                                 <td><?php echo $data['jumlah_buku'] ?></td>
                                 <td>
                                     <a href="?page=buku&aksi=ubah&id=<?php echo $data['id']; ?>"
                                         class="btn btn-info"><i class="fa fa-edit"></i> Ubah</a>
                                     <a onclick="return confirm('Yakin ingin menghapus data?')"
                                         href="?page=buku&aksi=hapus&id=<?php echo $data['id']; ?>"
                                         class="btn btn-warning"><i class="fa fa-trash"></i> Hapus</a>
                                 </td>


                             </tr>

                             <?php } ?>

                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </div>
 </div>