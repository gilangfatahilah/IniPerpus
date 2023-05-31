<?php 

	$id = $_GET ['id'];

	$koneksi->query("delete from buku where id = '$id'");


 ?>
 <script type="text/javascript">
    
    alert("Data Berhasil Dihapus");
    window.location.href="?page=buku";
   </script>
