 
 <div class="panel panel-default">
                        <div class="panel-heading">
                        	<h1>Tambah Data Buku</h1>
                        </div>
                            
 <div class="panel-body">
                            <div class="row">
                                <div class="col-md-10">

                                    <form method="post">
                                        <div class="form-group">
                                            <label >Judul</label>
                                            <input class="form-control" name="judul" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Pengarang</label>
                                            <input class="form-control" name="pengarang" />
                                            
                                        </div>
										  <div class="form-group">
                                            <label>Penerbit</label>
                                            <input class="form-control" name="penerbit" />
                                            
                                        </div>

                                         <div class="form-group">
                                            <label>ISBN</label>
                                            <input class="form-control" name="isbn" />
                                        </div>
                                            
                                        <div class="form-group">
                                            <label>Tahun Terbit</label>
                                            <select class="form-control" name="tahun">
                                              <?php 

                                              $tahun = date("Y");

                                              for ($i=$tahun-25; $i <= $tahun;  $i++) { 
                                              	echo '

                                              		<option value="'.$i.'">'.$i.'</option>

                                              	';
                                              }

                                               ?>

                        
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Jumlah Buku</label>
                                            <input class="form-control" name="jumlah_buku" />
                                        </div>
                                         

								<input type="submit" name="simpan" value="simpan" class="btn btn-primary">

                                    
                                </div>
                            </form>
                             </div>
                        </div>
                    </div>
<?php

 $judul = @$_POST['judul'];
 $pengarang = @$_POST['pengarang'];
 $penerbit = @$_POST['penerbit'];
 $tahun = @$_POST['tahun'];
 $isbn = @$_POST['isbn'];
 $jumlah_buku = @$_POST['jumlah_buku'];
 
 $simpan = @$_POST['simpan'];

 if ($simpan) {
  
  $sql = $koneksi->query("INSERT INTO   buku SET judul='$judul', pengarang='$pengarang', penerbit='$penerbit', tahun_terbit='$tahun', isbn='$isbn', jumlah_buku='$jumlah_buku'");

  if ($sql) {
   ?>

   <script type="text/javascript">
    
    alert("Data Berhasil Disimpan");
    window.location.href="?page=buku";
   </script>


   <?php  
  }
 }

?>