<?php 
//PENGHUBUNGAN MYSQL DENGAN QUERY UNTUK MENDAPATKAN NAMA, USERNAME, PASSWORD, DAN EMAIL
$query = "SELECT * FROM user ORDER BY id ASC";
$result = mysqli_query($connect, $query);
 ?>

<a href="<?= $WEB_CONFIG['base_url'] ?>index.php?page=add" class="btn btn-primary mb-3">Tambah Baru</a>
<div class="box_table text-center">
    <table class="table table-bordered table-striped mt-1 table-cyan" id="data">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th width="20%">Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- PEMBUATAN NOMOR OTOMATIS -->
            <?php $no = 1; ?>
            <!-- EKSEKUSI SQL MENGGUNAKAN FOREACH AGAR SEMUA DATA TERLOAD -->
            <?php while($data = mysqli_fetch_array($result)) : ?>
            <tr>
                <td><?= $no ?></td>
                <!-- MENGAMBIL DATA DARI DATABASE BERDASARKAN KOLOM -->
                <td><?= $data['nama'] ?></td>
                <td><?= $data['username'] ?></td>
                <td><?= $data['password'] ?></td>
                <td><?= $data['email'] ?></td>
                <td>
                    <!-- PROSES EDIT MENGIRIMKAN ID DENGAN METHOD GET -->
                    <a href="<?= $WEB_CONFIG['base_url'] ?>index.php?page=update&id=<?= $data['id'] ?>" class="btn btn-success m-1">Edit</a>
                    <!-- MEMANGGIL DAN EKSEKUSI FUNCTION JS DENGAN PARAMETER ID -->
                    <a href="javascript:alertDelete(<?= $data['id'] ?>);" class="btn btn-danger m1">Delete</a>
                </td>
            </tr>
            <?php $no++ ?>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

<!-- MODAL / DIALOG KONFIRMASI SAAT PROSES PENGHAPUSAN -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirm To Delete Data</h5>
      </div>
      <div class="modal-body">
        <p>Are you sure ? </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <a type="button" class="btn btn-danger" id="deleteButtonModal">Delete Now!</a>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
function alertDelete(idn) {
    //MENAMBAHKAN ATTRIBUT HTML href DENGAN ID deleteButtonModal KETIKA FUNCTION INI DIPANGGIL
    $('#deleteButtonModal').attr('href', '<?= $WEB_CONFIG['base_url'] ?>index.php?page=delete&id='+idn);
    //MEMUNCULKAN MODAL DIALOG
    $('#deleteModal').modal('show');
}
</script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script>
  $(document).ready(function() {
    $('#data').DataTable();
} );
</script>
