<?php
session_start();
// Halaman pengelolaan peminjaman buku perpustakaan
require "../config/config.php";
$dataPeminjam = queryReadData("SELECT peminjaman.id_peminjaman, peminjaman.id_buku, buku.judul, peminjaman.user_id, users.nama, admin.nama as nama_admin,  peminjaman.tgl_peminjaman, peminjaman.tgl_pengembalian 
FROM peminjaman 
INNER JOIN users ON peminjaman.user_id = users.user_id
INNER JOIN  users admin ON peminjaman.id_admin = admin.user_id
INNER JOIN buku ON peminjaman.id_buku = buku.id_buku");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../assets/bootstrap/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">
  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script>
  <title>Kelola peminjaman buku || admin</title>
  <!-- Include jsPDF library -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.27/jspdf.plugin.autotable.min.js"></script>
</head>

<body>

  <?php include 'navbar.php'; ?>

  <div class="p-4 mt-5">
    <div class="mt-5">
      <h3>Daftar Peminjaman</h3>
      <button id="printPDF" class="btn btn-sm btn-primary mb-2">Print to PDF</button>
      <div class="table-responsive mt-3">
        <table id="datatable" class="table table-striped table-hover">
          <thead class="text-center">
            <tr>
              <th class="bg-primary text-light">ID</th>
              <th class="bg-primary text-light">ID Buku</th>
              <th class="bg-primary text-light">Judul Buku</th>
              <th class="bg-primary text-light">Nama</th>
              <th class="bg-primary text-light">Admin</th>
              <th class="bg-primary text-light">Tgl. Peminjaman</th>
              <th class="bg-primary text-light">Tgl. Pengembalian</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($dataPeminjam as $item) : ?>
              <tr>
                <td><?= $item["id_peminjaman"]; ?></td>
                <td><?= $item["id_buku"]; ?></td>
                <td><?= $item["judul"]; ?></td>
                <td><?= $item["nama"]; ?></td>
                <td><?= $item["nama_admin"]; ?></td>
                <td><?= $item["tgl_peminjaman"]; ?></td>
                <td><?= $item["tgl_pengembalian"]; ?></td>
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
        doc.text("List of Peminjaman Buku", 14, 10);
        const table = document.getElementById("datatable");
        doc.autoTable({
          html: table
        });
        doc.save("peminjaman_buku.pdf");
      });
    });
  </script>
</body>

</html>