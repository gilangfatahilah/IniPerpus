 <?php 

      $id = $_GET['id'];

      $sql = $koneksi->query("select * from buku where id='$id'");

      $tampil = $sql->fetch_assoc();

      $tahun2 = $tampil['tahun_terbit'];
  ?>
 <div class="panel panel-default">
                        <div class="panel-heading">
                        	<h1>Ubah Data Buku</h1>
                        </div>
                            
 <div class="panel-body">
                            <div class="row">
                                <div class="col-md-10">

                                    <form method="post">
                                        <div class="form-group">
                                            <label >Judul</label>
                                            <input class="form-control" name="judul" value="<?php echo $tampil['judul'];?>"/>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Pengarang</label>
                                            <input class="form-control" name="pengarang" value="<?php echo $tampil['pengarang'];?>"/>
                                            
                                        </div>

										                    <div class="form-group">
                                            <label>Penerbit</label>
                                            <input class="form-control" name="penerbit" value="<?php echo $tampil['penerbit'];?>" />
                                            
                                        </div>

                                         <div class="form-group">
                                            <label>ISBN</label>
                                            <input class="form-control" name="isbn"  value="<?php echo $tampil['isbn'];?>"/>
                                        </div>
                                            
                                        <div class="form-group">
                                            <label>Tahun Terbit</label>
                                            <select class="form-control" name="tahun">
                                              <?php 

                                              $tahun = date("Y");

                                              for ($i=$tahun-25; $i <= $tahun;  $i++) { 
                                              	

                                                if ($i==$tahun2)  {

                                                echo'<option value="'.$i.'" selected>'.$i.'</option>';


                                                }else{

                                              	echo'<option value="'.$i.'">'.$i.'</option>';
                                                }

                                              	
                                              }


                                               ?>

                        
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah Buku</label>
                                            <input class="form-control" name="jumlah_buku"  value="<?php echo $tampil['jumlah_buku'];?>"/>
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
  
  $sql = $koneksi->query("update buku SET judul='$judul', pengarang='$pengarang', penerbit='$penerbit', tahun_terbit='$tahun', isbn='$isbn', jumlah_buku='$jumlah_buku' where id='$id'");

  if ($sql) {
   ?>

   <script type="text/javascript">
    
    alert("Data Berhasil Diubah");
    window.location.href="?page=buku";
   </script>


   <?php  
  }
 }

?>