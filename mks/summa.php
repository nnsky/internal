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

  .add {
    display: flex;
  }


</style>
</head>
<link rel="icon" type="image/x-icon" href="favck.png"/>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Chandra Karya Makassar x Summarecon</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <center>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav">
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

<!-- Button trigger modal -->
<div class="div" class="container">
<button type="button" class="btn btn-primary add" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add
</button>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input Disini</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<center>
<b>List Pemakaian</b>
<table width="800" border='0' cellpadding="2" cellspacing="1" class="table-responsive table-bordered border-secondary" id="data">
<thead>
    <tr>
      <th>Nama</th>
      <th>No. Nota</th>
      <th>Kode Kupon</th>
 
    </tr>
</thead>
<tbody>
<?php
$query = mysqli_query($koneksi, "SELECT * FROM kupon ORDER BY id ASC");
while($data=mysqli_fetch_array($query))
{
  ?>

<tr>
 <td ><?php echo $data['judul'];?></td>
 <th ><a href="viewmks.php?id=<?php echo $data['id'];?>">No. Nota</a></th>
 <th ><a href="edit.php?id=<?php echo $data['id'];?>">Kode Kupon</a></th>

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
<script>
    var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})
</script>
<script type="text/javascript" src="my.js"></script>
<script src="//code.jivosite.com/widget/Ug6k8USPCY" async></script>
</body>
</html>