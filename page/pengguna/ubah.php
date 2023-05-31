 <?php 

      $id = $_GET['id'];

      $sql = $koneksi->query("select * from login where id='$id'");

      $tampil = $sql->fetch_assoc();

  ?>
 <div class="panel panel-default">
     <div class="panel-heading">
         <h1>Ubah Data Pengguna</h1>
     </div>

     <div class="panel-body">
         <div class="row">
             <div class="col-md-10">



                 <form method="post">

                     <input type="hidden" name="id" value="<?php echo $tampil['id'];?>" />
                     <div class="form-group">
                         <label>Nama</label>
                         <input class="form-control" name="nama" value="<?php echo $tampil['nama'];?>" />

                     </div>

                     <div class="form-group">
                         <label>Username</label>
                         <input class="form-control" name="username" value="<?php echo $tampil['username'];?>" />

                     </div>

                     <div class="form-group">
                         <label>Password</label>
                         <input type="password" class="form-control" name="password"
                             value="<?php echo $tampil['password'];?>" />

                     </div>

                     <div class="form-group">
                         <label>Jenis Kelamin</label>
                         <select class="form-control" name="jenkel" value="<?php echo $tampil['jenkel'];?>">
                             <option>Laki - Laki</option>
                             <option>Perempuan</option>
                         </select>
                     </div>

                     <div class="form-group">
                         <label>No HP</label>
                         <input class="form-control" name="nohp" value="<?php echo $tampil['nohp'];?>" />
                     </div>

                     <div class="form-group">
                         <label>Alamat</label>
                         <input class="form-control" name="alamat" value="<?php echo $tampil['alamat'];?>" />
                     </div>

                     <div class="form-group">
                         <label>Level</label>
                         <select class="form-control" name="level" value="<?php echo $tampil['level'];?>">
                             <option>admin</option>
                             <option>user</option>
                         </select>
                     </div>

                     <input type="submit" name="simpan" value="simpan" class="btn btn-primary">


             </div>
             </form>
         </div>
     </div>
 </div>
 <?php
 $id = @$_POST['id'];
 $nama = @$_POST['nama'];
 $username= @$_POST['username'];
 $password = @$_POST['password'];
 $jenkel = @$_POST['jenkel'];
 $nohp = @$_POST['nohp'];
 $alamat = @$_POST['alamat'];
 $level = @$_POST['level'];
 
 $simpan = @$_POST['simpan'];

 if ($simpan) {
  
  $sql = $koneksi->query("update login SET nama='$nama', username='$username', password='$password', jenkel='$jenkel', nohp='$nohp', alamat='$alamat', level='$level' WHERE id='$id' ");

  if ($sql) {
   ?>

 <script type="text/javascript">
alert("Data Berhasil Disimpan");
window.location.href = "?page=pengguna";
 </script>


 <?php  
  }
 }

?>