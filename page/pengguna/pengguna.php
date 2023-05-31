 <a href="?page=pengguna&aksi=tambah" class="btn btn-danger " style="margin-bottom: 10px;">Tambah</a>
 <div class="row">
     <div class="col-md-12">
         <!-- Advanced Tables -->
         <div class="panel panel-default">
             <div class="panel-heading">
                 Data Pengguna
             </div>
             <div class="panel-body">
                 <div class="table-responsive">
                     <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                         <thead>
                             <tr>

                                 <th>No</th>
                                 <th>Nama</th>
                                 <th>Username</th>
                                 <th>Jenis Kelamin</th>
                                 <th>No HP</th>
                                 <th>Alamat</th>
                                 <th>Level</th>
                                 <th>Aksi</th>
                             </tr>
                         </thead>
                         <tbody>

                             <?php 

                                            $sql = $koneksi->query("select * from login");

                                            while ($data= $sql->fetch_assoc()) {
                                                # code...
                                            
                                         ?>

                             <tr>
                                 <td><?php echo $data['id'] ?></td>
                                 <td><?php echo $data['nama'] ?></td>
                                 <td><?php echo $data['username'] ?></td>
                                 <td><?php echo $data['jenkel'] ?></td>
                                 <td><?php echo $data['nohp'] ?></td>
                                 <td><?php echo $data['alamat'] ?></td>
                                 <td><?php echo $data['level'] ?></td>
                                 <td>
                                     <a href="?page=pengguna&aksi=ubah&id=<?php echo $data['id']; ?>"
                                         class="btn btn-info"><i class="fa fa-edit"></i> Ubah</a>
                                     <a onclick="return confirm('Yakin ingin menghapus data?')"
                                         href="?page=pengguna&aksi=hapus&id=<?php echo $data['id']; ?>"
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