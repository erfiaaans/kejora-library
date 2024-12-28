<?php
session_start();

if (!isset($_SESSION["signIn"])) {
  header("Location: ../index.php");
  exit;
}
require "../config/config.php";
$akunUser = $_SESSION["users"]["user_id"];
$dataPinjam = queryReadData("SELECT peminjaman.id_peminjaman, peminjaman.id_buku, buku.judul, peminjaman.user_id, users.nama, admin.nama as nama_admin, peminjaman.tgl_peminjaman, peminjaman.tgl_pengembalian
FROM peminjaman
INNER JOIN buku ON peminjaman.id_buku = buku.id_buku
INNER JOIN users ON peminjaman.user_id = users.user_id
INNER JOIN users admin ON peminjaman.id_admin = admin.user_id
WHERE peminjaman.user_id = $akunUser");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../assets/bootstrap/bootstrap.min.css" rel="stylesheet">
  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
  <title>Transaksi peminjaman Buku || User</title>
</head>

<body>
  <?php include 'navbar.php'; ?>

  <div class="p-4 mt-5">
    <div class="mt-5 alert alert-primary" role="alert">Riwayat transaksi Peminjaman Buku Anda - <span class="fw-bold text-capitalize"><?php echo htmlentities($_SESSION["users"]["nama"]); ?></span></div>

    <div class="table-responsive mt-3">
      <table id="datatable" class="table table-striped table-hover">
        <thead class="text-center">
          <tr>
            <th class="bg-info text-light">ID</th>
            <th class="bg-info text-light">Judul Buku</th>
            <th class="bg-info text-light">User ID</th>
            <th class="bg-info text-light">Nama</th>
            <th class="bg-info text-light">Nama Admin</th>
            <th class="bg-info text-light">Tgl. Peminjaman</th>
            <th class="bg-info text-light">Tgl. Pengembalian</th>
            <th class="bg-info text-light">Aksi</th>
          </tr>
        </thead>
        <tbody class="text-center">
          <?php foreach ($dataPinjam as $item) : ?>
            <tr>
              <td><?= $item["id_peminjaman"]; ?></td>
              <td><?= $item["judul"]; ?></td>
              <td><?= $item["user_id"]; ?></td>
              <td><?= $item["nama"]; ?></td>
              <td><?= $item["nama_admin"]; ?></td>
              <td><?= $item["tgl_peminjaman"]; ?></td>
              <td><?= $item["tgl_pengembalian"]; ?></td>
              <td>
                <a class="btn btn-sm btn-primary" href="pengembalianBuku.php?id=<?= $item["id_peminjaman"]; ?>"> Kembalikan</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>

  <footer class="bg-warning-subtle text-dark shadow-lg bg-subtle p-2">
    <div class="container-fluid d-flex justify-content-between">
      <p class="mt-2">Created by <span class="text-primary"> Kejora</span> © 2024</p>
      <p class="mt-2">versi 1.0</p>
    </div>
  </footer>

  <script src="../assets/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#datatable').DataTable();
    });
  </script>
</body>

</html>