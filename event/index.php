<?php require 'config.php'; ?>

<!DOCTYPE html>
<html>
 <head>
    <title><?= $WEB_CONFIG['app_name'] ?></title>
    <link rel="stylesheet" href="assets/style.css">
    <script type="text/javascript" src="assets/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-cyan">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="../logock.png" width="200px" alt=""> X <img src="assets/img/icon.png" width="150px" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                <a class="nav-link  " aria-current="page" href="#">Price List</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Kontak</a>
                </li>
                <button type="button" class="btn btn-outline-danger position-relative">Keluar</button>
            </ul>
            </div>
        </div>
    </nav>

    <?php session_start();
    //MENGAMBIL VALUE PAGE YANG TERDAPAT PADA URL
    $content = (isset($_GET["page"])) ? $_GET["page"] : ""; ?>     
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h5 class='text-uppercase'><?= $content ?> Data Voucher</h5>
            </div>
            <center>
</div>
            <?php
            //UNTUK PEMBERITAHUAN SUCCES DATA SUDAH DIOLAH 
            if(isset($_SESSION['flash'])){
                echo $_SESSION['flash'];
                unset($_SESSION['flash']);
            }

            //PERPINDAHAAN PAGES WEBSITE
            switch ($content) {
                case 'add':
                    require 'operasi/create.php';
                    break;
                case 'delete':
                    require 'operasi/delete.php';
                    break;
                case 'update':
                    require 'operasi/update.php';
                    break;
                //YANG PERTAMA KALI DI JALANKAN SELAIN DARI CASE DIATAS
                default: 
                    require 'operasi/read.php';
                    break;
            } ?>
            </div>
            </center>
        </div>
    </div>
    <script type="text/javascript" src="assets/script.js"></script>
    <script type="text/javascript" src="assets/bootstrap/bootstrap.min.js"></script>
    
</body>
</html>