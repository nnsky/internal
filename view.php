<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
 <title>Internal</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <style type="text/css">

 body {
    font-family: verdana;
    font-size: 12px;
    margin: 0px;
    padding: 0px;     
 }
 a {
    text-decoration: none;
    color: #3050F3;
 }
    a:hover {
    color: #000F5E;
 } 
</style>
</head>
    <link rel="icon" type="image/x-icon" href="favck.png"/>
<body>
<center>
    
    <?php
        $id    = mysqli_real_escape_string($koneksi,$_GET['id']);
        $query = mysqli_query($koneksi,"SELECT * FROM data_file WHERE id='$id' ");
        $data  = mysqli_fetch_array($query);
    ?>
    <p>Daftar Pricelist</p>
        <?php echo $data['judul'];?></p> 
    <hr>
        <b>Judul:</b> <?php echo $data['judul'];?> | <a href='internal.php'> Kembali </a>
    <hr>
    
    <embed src="file/<?php echo $data['nama_file'];?>" type="application/pdf" width="1080" height="500" >

 </center>
    <footer class="text-center fixed-bottom"><img src="logock.png" width="200px" alt=""></footer>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>