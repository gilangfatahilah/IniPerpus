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

                             </tr>

                             <?php } ?>

                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </div>
 </div>