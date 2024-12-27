<?php
session_start();

if (!isset($_SESSION["signIn"])) {
  header("Location: ../index.php");
  exit;
}
require "../config/config.php";

$users = queryReadData("SELECT * FROM users m WHERE m.role = 'USER' ORDER BY nama asc");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../assets/bootstrap/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script>
  <!-- Include jsPDF library -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
  <!-- Include jsPDF AutoTable plugin -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.27/jspdf.plugin.autotable.min.js"></script>
  <title>User Terdaftar</title>
</head>

<body>
  <?php include 'navbar.php'; ?>

  <div class="p-4 mt-5">
    <div class="mt-5">
      <h3>Daftar Users</h3>
      <button id="printPDF" class="btn btn-sm btn-primary mb-3">Print to PDF</button>
      <div class="table-responsive mt-3">
        <table id="datatable" class="table table-striped table-hover">
          <thead class="text-center">
            <tr>
              <th class="bg-primary text-light">ID</th>
              <th class="bg-primary text-light">Username</th>
              <th class="bg-primary text-light">Nama</th>
              <th class="bg-primary text-light">Email</th>
              <th class="bg-primary text-light">Gender</th>
              <th class="bg-primary text-light">No Telepon</th>
              <th class="bg-primary text-light">Tgl. Daftar</th>
              <th class="bg-primary text-light">Role</th>
              <th class="bg-primary text-light">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($users as $item) : ?>
              <tr>
                <td><?= $item["user_id"]; ?></td>
                <td><?= $item["username"]; ?></td>
                <td><?= $item["nama"]; ?></td>
                <td><?= $item["email"]; ?></td>
                <td><?= $item["jenis_kelamin"]; ?></td>
                <td><?= $item["no_tlp"]; ?></td>
                <td><?= $item["tgl_pendaftaran"]; ?></td>
                <td><?= $item["role"]; ?></td>
                <td>
                  <a href="userDelete.php?id=<?= $item["user_id"]; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data users ?');"><i class="fa fa-xs fa-solid fa-trash"></i></a>
                </td>
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#datatable').DataTable();

      $('#printPDF').on('click', function() {
        const {
          jsPDF
        } = window.jspdf;
        const doc = new jsPDF();

        doc.text("List of Users", 14, 10);
        const table = document.getElementById("datatable");
        doc.autoTable({
          html: table
        });

        doc.save("daftar_user.pdf");
      });
    });
  </script>
</body>

</html>