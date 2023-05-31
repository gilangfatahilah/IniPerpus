<?php 

$tgl_pinjam = date("d-m-Y");
$tujuh_hari = mktime(0,0,0, date("n"), date("j")+7, date("Y"));
$Kembali = date("d-m-Y", $tujuh_hari);

 ?>


<div class="panel panel-default">
                        <div class="panel-heading">
                          <h1>Tambah Data Transaksi</h1>
                        </div>
                            
 <div class="panel-body">
                            <div class="row">
                                <div class="col-md-10">

                                    <form method="POST" onsubmit="return validasi(this)">
                                    	<div class="form-group">
                                            <label>Judul</label>
                                            <select class="form-control" name="buku">
                                                <?php 
                                                $sql = $koneksi->query("select * from buku order by id");

                                                 while ($data=$sql->fetch_assoc()) {
                                                  	echo "<option value='$data[id].$data[judul]'>$data[judul]</option>";
                                                  }
                                                  	?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Nama</label>
                                           <select class="form-control" name="nama">
                                                <?php 
                                                $sql = $koneksi->query("select * from siswa order by nis");

                                                 while ($data=$sql->fetch_assoc()) {
                                                  	echo "<option value='$data[nis].$data[nama]'>$data[nis] $data[nama] </option>";
                                                  }
                                                  	?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label >Tanggal Pinjam</label>
                                            <input class="form-control" type="text" name="tgl_pinjam" id="tgl" 
                                            value="<?php echo $tgl_pinjam;?>" readonly />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Kembali</label>
                                             <input class="form-control" type="date" name="tgl_kembali" id="tgl" 
                                            value="<?php echo $kembali;?>"  />
                                        </div>
                                       

                <input type="submit" name="simpan" value="simpan" class="btn btn-primary">

                                    
                                </div>
                            </form>
                             </div>
                        </div>
                    </div>
<?php
  
 	if (isset($_POST['simpan'])) {

 		$tgl_pinjam = $_POST['tgl_pinjam'];
 		$tgl_kembali = $_POST['tgl_kembali'];

 		$buku = $_POST['buku'];
 		$pecah_buku = explode(".", $buku);
 		$id = $pecah_buku[0];
 		$judul = $pecah_buku[1];

 		$nama = $_POST['nama'];
 		$pecah_nama = explode(".", $nama);
 		$nis = $pecah_nama[0];
 		$nama = $pecah_nama[1];

 		$sql = $koneksi->query("select * from buku where judul = '$judul'");
 		while ($data = $sql->fetch_assoc()) {
      $sisa = $data['jumlah_buku'];

        if ($sisa == 0) {


 			?>

 			<script type="text/javascript">
    
    alert("Stok buku Kosong");
    window.location.href="?page=transaksi&aksi=tambah";
   </script>

 	 <?php  
  }else{
      $sql = $koneksi->query("INSERT INTO transaksi SET judul='$judul', nis='$nis', nama='$nama', tgl_pinjam='$tgl_pinjam', tgl_kembali='$tgl_kembali', status='pinjam'");


      $sql = $koneksi->query("update buku set jumlah_buku=(jumlah_buku-1) where id = '$id' ")
      ?>

  <script type="text/javascript">
    
    alert("Data Berhasil Disimpan");
    window.location.href="?page=transaksi";
   </script>

      <?php  

  }
  }
 }


?>
