<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==''){
		header("location:index.php?pesan=gagal");
	}
	?>
<?php
include "koneksi.php"
?>
<!DOCTYPE html>
<html>
<head>
 <title>Internal</title>
 
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
 <style type="text/css">
 body {
  font-family: verdana;
  font-size: 14px;

 }
 a {
  text-decoration: none;
  color: #3050F3;
 }
 a:hover {
  color: #000F5E;
 }

 
 .navbar-brand,
  .nav-link {
    color: rgb(5, 5, 5) !important;
  }
  .nav-link {
    text-transform: uppercase;
    margin-right: 5px 0;
    font-weight: bold;
  }

  .nav-link:hover::after {
    content: "";
    display: block;
    border-bottom: 3px solid #0b63dc;
    width: 75%;
    margin: auto;
    padding-bottom: 5px;
    margin-bottom: -8px;
  }


</style>
</head>
<link rel="icon" type="image/x-icon" href="favck.png"/>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Internal Chandra Karya Makassar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <center>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link disabled" href="summa.php" >Chandra Karya x Summarecon</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Pusat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Bandung</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../contact/index.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
        
      </ul>
      </center>
    </div>
  </div>
</nav>
<!-- END OF NAVIGATION -->
<br>

<h5 style="padding-left: 1rem;">Upload disini (.pdf)</h5>

<form style="padding-left: 1rem;" action="uploadmks.php" method="POST" enctype="multipart/form-data">
<table width="600" border="0" >
<tr>
 <td width="100">Judul File</td>
 <td><input type="text" name="judul" placeholder="Judul" required></td>
</tr>
<tr>
 <td width="100">File PDF</td>
 <td><input type="file" name="nama_file" required></td>
</tr>
<tr>
 <td width="100"></td>
 <td><input type="submit" value="Upload File"></td>
</tr>
</table>
</form>

<hr>

<center>
<b>List File PDF</b>
<table width="800" border='0' cellpadding="2" cellspacing="1" class="table-responsive table-bordered border-secondary" id="data">
<thead>
    <tr>
      <th >Judul</th>
      <th  width="100">View</th>
      <th  width="100">Hapus</th>
    </tr>
</thead>
<tbody>
<?php
$query = mysqli_query($koneksi, "SELECT * FROM data_mks ORDER BY id ASC");
while($data=mysqli_fetch_array($query))
{
  ?>

<tr>
 <td ><?php echo $data['judul'];?></td>
 <th ><a href="viewmks.php?id=<?php echo $data['id'];?>">Lihat File</a></th>
 <th ><a href="hapusmks.php?id=<?php echo $data['id'];?>">Hapus File</a></th>
</tr>
<?php
}
?>
</tbody>
</table>
</div>


</center>


	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
  <footer class="text-center fixed-bottom"><img src="../logock.png" width="200px" alt=""></footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script>
  $(document).ready(function() {
    $('#data').DataTable();
} );
</script>
<script src="//code.jivosite.com/widget/Ug6k8USPCY" async></script>
</body>
</html>