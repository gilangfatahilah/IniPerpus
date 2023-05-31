 <div class="panel panel-default">
     <div class="panel-heading">
         <h1>Tambah Pengguna</h1>
     </div>

     <div class="panel-body">
         <div class="row">
             <div class="col-md-10">

                 <form method="post">
                     <div class="form-group">
                         <label>Nama</label>
                         <input class="form-control" name="nama" />

                     </div>

                     <div class="form-group">
                         <label>Username</label>
                         <input class="form-control" name="username" />

                     </div>

                     <div class="form-group">
                         <label>Password</label>
                         <input type="password" class="form-control" name="password" />

                     </div>

                     <div class="form-group">
                         <label>Jenis Kelamin</label>
                         <select class="form-control" name="jenkel">
                             <option>Laki - Laki</option>
                             <option>Perempuan</option>
                         </select>
                     </div>

                     <div class="form-group">
                         <label>No HP</label>
                         <input class="form-control" name="nohp" />
                     </div>

                     <div class="form-group">
                         <label>Alamat</label>
                         <input class="form-control" name="alamat" />
                     </div>

                     <div class="form-group">
                         <label>Level</label>
                         <select class="form-control" name="level">
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

 $nama = @$_POST['nama'];
 $username= @$_POST['username'];
 $password = $_POST['password'];
 $jenkel = @$_POST['jenkel'];
 $nohp = @$_POST['nohp'];
 $alamat = @$_POST['alamat'];
 $level = @$_POST['level'];
 
 $simpan = @$_POST['simpan'];

 if ($simpan) {
  
  $sql = $koneksi->query("INSERT INTO   login SET nama='$nama', username='$username', password='$password', jenkel='$jenkel', nohp='$nohp', alamat='$alamat', level='$level'");

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