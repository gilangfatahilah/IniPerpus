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


                             </tr>

                             <?php } ?>

                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </div>
 </div>