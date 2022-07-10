<?php require 'konek.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>CK x Summarecon Mutiara</title>
    <link rel="icon" type="image/x-icon" href="../favck.png"/>
    <link rel="stylesheet" href="asset/css/style.css">
  </head>

  <body>
    <!-- ========================NAVBAR============================= -->
  <nav class="navbar navbar-expand-lg navbar-light bg-cyan">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="../logock.png" width="200px" alt=""> X <img src="asset/img/summa.png" width="150px" alt=""></a>
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
    <br>    
        <div class="container">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-primary add" data-bs-toggle="modal" data-bs-target="#m1">Add</button>
        </div>
            <!-- Modal -->
        <div class="modal fade" id="m1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Input Disini</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">✘</button>
                        </div>
                        <div class="modal-body">
                            <form action="uploadkupon.php" method="POST" enctype="multipart/form-data">
                                <table width="600" border="0" >
                                    <tr>
                                        <th width="100">Nama</th>
                                        <th><input type="text" name="nama" placeholder="Nama Konsumen" required></th>
                                    </tr>
                                    <tr>
                                        <th width="100">No.Nota</th>
                                        <th><input type="text" name="No Nota" required></th>
                                    </tr>
                                    <tr>
                                        <th width="100">Kode Kupon</th>
                                        <th><input type="text" name="Kode Kupon" required></th>
                                    </tr>
                                    <tr>
                                        <th width="100">Total Belanja</th>
                                        <th><input id="inputku" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);" required></th>
                                    </tr>
                                </table>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-outline-success">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <table class="table table-bordered table-striped mt-3 table-cyan" id="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kode Voucher</th>
                        <th>Nota</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <td>1</td>
                    <td>Nama</td>
                    <td>MKTN22-00001</td>
                    <td>MKS3403</td>
                    <td>17/05/2002</td>
                    <td>
                        <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-primary " data-bs-toggle="modal" data-bs-target="#m2">Edit</button>
                    
                        
                        <!-- Modal 2 -->
                            <div class="modal fade" id="m2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Input Disini</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">✘</button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="uploadkupon.php" method="POST" enctype="multipart/form-data">
                                                <table width="400" border="1" >
                                                    <tr>
                                                        <th width="100">Nama</th>
                                                        <th><input type="text" name="nama" placeholder="Nama Konsumen" required></th>
                                                    </tr>
                                                    <tr>
                                                        <th width="100">No.Nota</th>
                                                        <th><input type="text" name="No Nota" required></th>
                                                    </tr>
                                                    <tr>
                                                        <th width="100">Kode Kupon</th>
                                                        <th><input type="text" name="Kode Kupon" required></th>
                                                    </tr>
                                                    <tr>
                                                        <th width="100">Total Belanja</th>
                                                        <th><input id="inputku" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);" required></th>
                                                    </tr>
                                                </table>
                                            </form>
                                        </div>
                                            <div class="modal-footer">                                                
                                                <button type="button" class="btn btn-outline-danger">Hapus</button>
                                                <button type="button" class="btn btn-outline-success">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                    </td>
                    
                
                </tbody>
            </table>
        </div>











        <!-- Footer -->
        <footer>&COPY; Chandra Karya Pramuka </footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
    var myModal = document.getElementById('myModal')
    var myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', function () {
    myInput.focus()
    })
</script>
</body>
</html>











    

       

   
