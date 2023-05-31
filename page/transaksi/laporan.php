<?php 
 $koneksi = new mysqli ("localhost","root","","perpustakaan");
 ?>
<!DOCTYPE html>
<html>

<head>
    <title>.</title>
</head>

<body>
    <center>
        <h2>LAPORAN<br>
            DATA TRANSAKSI PERPUSTAKAAN</h2>
        <h4></h4>
        <h5></h5>
        <hr>
        <hr>

    </center>
    <br>
    <br>
    <table border="1" style="width: 100%">
        <tr>

            <th rowspan="4" bgcolor="white">ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Judul</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Status</th>


        </tr>
        </thead>
        <tbody>

            <?php 

                                            $sql = $koneksi->query("select * from transaksi where status='pinjam'");

                                            while ($data= $sql->fetch_assoc()) {
                                                # code...
                                            
                                         ?>

            <tr>

                <td><?php echo $data['id'] ?></td>
                <td><?php echo $data['nama'] ?></td>
                <td><?php echo $data['alamat'] ?></td>
                <td><?php echo $data['judul'] ?></td>
                <td><?php echo $data['tgl_pinjam'] ?></td>
                <td><?php echo $data['tgl_kembali'] ?></td>
                <td><?php echo $data['status'] ?></td>

            </tr>

            <script>
            window.print();
            </script>

            <?php 
                                        } ?>

        </tbody>
    </table>


    <h5 style="padding-left: 600px; font-family: times new roman;">Mengetahui </h5>
    <h5 style="padding-left: 615px; font-family: times new roman;">Admin</h5>
</body>

</html>