<?php
session_start();
require "../config/config.php";
$dataDenda = queryReadData("SELECT pengembalian.id_pengembalian, pengembalian.id_buku, buku.judul, pengembalian.user_id, users.nama, admin.nama as nama_admin, pengembalian.buku_kembali, pengembalian.keterlambatan, pengembalian.denda
FROM pengembalian
INNER JOIN buku ON pengembalian.id_buku = buku.id_buku
INNER JOIN users ON pengembalian.user_id = users.user_id
INNER JOIN users admin ON pengembalian.id_admin = admin.user_id
WHERE pengembalian.denda > 0");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../assets/bootstrap/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">
  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script>
  <!-- Include jsPDF library -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
  <!-- Include jsPDF AutoTable plugin -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.27/jspdf.plugin.autotable.min.js"></script>
  <title>Kelola denda buku || admin</title>
</head>

<body>
  <?php include 'navbar.php'; ?>

  <div class="p-4 mt-5">
    <div class="mt-5">
      <h3>Daftar Denda</h3>
      <button id="printPDF" class="btn btn-sm btn-primary mb-3">Print to PDF</button>
      <div class="table-responsive mt-3">
        <table id="datatable" class="table table-striped table-hover">
          <thead class="text-center">
            <tr>
              <th class="bg-primary text-light">ID</th>
              <th class="bg-primary text-light">Judul buku</th>
              <th class="bg-primary text-light">Nama</th>
              <th class="bg-primary text-light">Admin</th>
              <th class="bg-primary text-light">Tgl. Pengembalian</th>
              <th class="bg-primary text-light">Keterlambatan</th>
              <th class="bg-primary text-light">Denda</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($dataDenda as $item) : ?>
              <tr>
                <td><?= $item["id_buku"]; ?></td>
                <td><?= $item["user_id"]; ?></td>
                <td><?= $item["nama"]; ?></td>
                <td><?= $item["nama_admin"]; ?></td>
                <td><?= $item["buku_kembali"]; ?></td>
                <td><?= $item["keterlambatan"]; ?></td>
                <td><?= $item["denda"]; ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <footer class="bg-dark text-light shadow-lg bg-subtle p-2">
    <div class="container-fluid d-flex justify-content-between">
      <p class="mt-2">Created by <span class="text-primary"> Kejora</span> © 2024</p>
      <p class="mt-2">versi 1.0</p>
    </div>
  </footer>

  <script src="../assets/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#datatable').DataTable();

      $('#printPDF').on('click', function() {
        const {
          jsPDF
        } = window.jspdf;
        const doc = new jsPDF();

        doc.text("List of Denda", 14, 10);
        const table = document.getElementById("datatable");
        doc.autoTable({
          html: table
        });

        doc.save("denda_buku.pdf");
      });
    });
  </script>
</body>

</html>