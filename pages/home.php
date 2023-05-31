<?php 
$koneksi = new mysqli ("localhost","root","","perpustakaan");
$sql = $koneksi ->query ("SELECT * FROM login");
$pengguna=$sql->num_rows;

$koneksi = new mysqli ("localhost","root","","perpustakaan");
$sql2 = $koneksi ->query ("SELECT * FROM buku");
$buku=$sql2->num_rows;

$koneksi = new mysqli ("localhost","root","","perpustakaan");
$sql3 = $koneksi ->query ("SELECT * FROM transaksi");
$transaksi=$sql3->num_rows;
 


 ?>

<div id="page-inner">
    <div class="row">
        <div class="col-md-12">
            <center>
                <h2>User Dashboard</h2>
            </center>
            <marquee>
                <h5>- - - - - - - Selamat datang User - - - - - - </h5>
            </marquee>

        </div>
    </div>
    <!-- /. ROW  -->
    <hr />
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-bars"></i>
                </span>
                <div class="text-box">
                    <p class="main-text"><?php echo $pengguna; ?> User </p>
                    <p>
                        <a href="?pages=pengguna">More
                    </p></a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-bars"></i>
                </span>
                <div class="text-box">
                    <p class="main-text"><?php echo $buku; ?> Books </p>
                    <p>
                        <a href="?pages=buku">More
                    </p></a>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-bars"></i>
                </span>
                <div class="text-box">
                    <p class="main-text"> Form </p>
                    <p>
                        <a href="?pages=pinjam">More
                    </p></a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-bell-o"></i>
                </span>
                <div class="text-box">
                    <p class="main-text"> About </p>
                    <p>
                        <a href="?pages=tentang">More
                    </p></a>
                </div>
            </div>
        </div>