<?php 

session_start();


error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); ?>


<?php

        include "function.php";

    $koneksi = new mysqli ("localhost","root","","perpustakaan");

    if ($_SESSION['admin']  || $_SESSION['user']) {

    
 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Perpustakaan</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>

<body>
    <form method="post"></form>
    <div id="wrapper" style="background-color: #495C83;">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation"
            style="margin-bottom: 0; background-color: #7A86B6;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin.php" style="background-color: #7A86B6;">INIPERPUS</a>

            </div>
            <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">Selamat Datang Admin&nbsp; <a href="logout.php" class="btn btn-danger square-btn-adjust"
                    style="background-color: #495C83;">Logout</a>
            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation" style="background-color: #495C83;">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="images/logo1.png" class="user-image img-responsive" />
                    </li>


                    <li>
                        <a href="admin.php" style="background: #7A86B6;"><i class="fa fa-dashboard fa-3x"></i>
                            Dashboard</a>
                    </li>
                    <li>
                        <a href="?page=pengguna" style="background: #7A86B6;"><i class="fa fa-laptop fa-3x"></i> Data
                            Pengguna</a>
                    </li>
                    <li>
                        <a href="?page=buku" style="background: #7A86B6;"><i class="fa fa-table fa-3x"></i> Data
                            Buku</a>
                    </li>
                    <li>
                        <a href="?page=transaksi" style="background: #7A86B6;"><i class="fa fa-edit fa-3x"></i>
                            Transaksi</a>
                    </li>
                    <li>
                        <a href="?page=tentang" style="background: #7A86B6;"><i class="fa fa-qrcode fa-3x"></i>
                            Tentang</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">

                        <?php

                        $page = $_GET['page'];
                        $aksi = $_GET['aksi'];

                        if ($page == "buku") {
                            if ($aksi == "" ) {
                                include "page/buku/buku.php";
                            }elseif ($aksi == "tambah") {
                                include "page/buku/tambah.php";
                            }elseif ($aksi == "ubah") {
                                include "page/buku/ubah.php";
                            }elseif ($aksi == "hapus") {
                                include "page/buku/hapus.php";
                            }
                            
                        }elseif ($page == "transaksi") {
                            if ($aksi == "") {
                                include "page/transaksi/transaksi.php";
                            }elseif ($aksi == "tambah") {
                                include "page/transaksi/tambah.php";
                             }elseif ($aksi == "kembali") {
                                include "page/transaksi/kembali.php";
                            }elseif ($aksi == "hapus") {
                                include "page/transaksi/hapus.php";
                            }elseif ($aksi == "ubah") {
                                include "page/transaksi/ubah.php";
                            }
                            
                             }elseif ($page == "pengguna"){
                            if ($aksi == "") {
                                include "page/pengguna/pengguna.php";
                            }elseif ($aksi == "tambah") {
                                include "page/pengguna/tambah.php";
                             }elseif ($aksi == "ubah") {
                                include "page/pengguna/ubah.php";
                            }elseif ($aksi == "hapus") {
                                include "page/pengguna/hapus.php";
                            }
                            
                             }elseif ($page == "") {
                                  include "page/home.php";
                              }elseif ($page == "tentang"){
                                    include "page/tentang/about.php";
                              }

                    ?>
                        <div class="row">




                            <!-- /. ROW  -->
                            <hr />

                        </div>
                        <!-- /. PAGE INNER  -->
                    </div>
                    <!-- /. PAGE WRAPPER  -->
                </div>
                <!-- /. WRAPPER  -->
                <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
                <!-- JQUERY SCRIPTS -->
                <script src="assets/js/jquery-1.10.2.js"></script>
                <!-- BOOTSTRAP SCRIPTS -->
                <script src="assets/js/bootstrap.min.js"></script>
                <!-- METISMENU SCRIPTS -->
                <script src="assets/js/jquery.metisMenu.js"></script>
                <!-- CUSTOM SCRIPTS -->
                <script src="assets/js/jquery-1.10.2.js"></script>
                <!-- BOOTSTRAP SCRIPTS -->
                <script src="assets/js/bootstrap.min.js"></script>
                <!-- METISMENU SCRIPTS -->
                <script src="assets/js/jquery.metisMenu.js"></script>
                <!-- DATA TABLE SCRIPTS -->
                <script src="assets/js/dataTables/jquery.dataTables.js"></script>
                <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
                <script>
                $(document).ready(function() {
                    $('#dataTables-example').dataTable();
                });
                </script>
                <!-- CUSTOM SCRIPTS -->
                <script src="assets/js/custom.js"></script>





</body>

</html>

<?php 

    }else {
        header("location:login.php");
    }

 ?>