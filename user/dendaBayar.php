<?php
session_start();

if (!isset($_SESSION["signIn"])) {
  header("Location: ../index.php");
  exit;
}
require "../config/config.php";

if (isset($_POST["bayar"])) {

  if (bayarDenda($_POST) > 0) {
    echo "<script>
    alert('Denda berhasil dibayar');
    document.location.href = 'denda.php';
    </script>";
  } else {
    echo "<script>
    alert('Denda gagal dibayar');
    </script>";
  }
}

$dendaUser = $_GET["id"];
$query = queryReadData("SELECT pengembalian.id_pengembalian, buku.judul, users.nama, pengembalian.buku_kembali, pengembalian.keterlambatan, pengembalian.denda
FROM pengembalian
INNER JOIN buku ON pengembalian.id_buku = buku.id_buku
INNER JOIN users ON pengembalian.user_id = users.user_id
WHERE pengembalian.id_pengembalian = $dendaUser");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../assets/bootstrap/bootstrap.min.css" rel="stylesheet">
  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script>
  <title>Form Bayar Denda || User</title>
</head>

<body>
  <?php include 'navbar.php'; ?>


  <div class="m-auto mt-5 p-5" style="width: 50rem;">
    <div class="card p-3 mt-5">
      <div class="card-body">
        <h3 class="card-title text-center">Form Bayar Denda</h3>
        <form action="" method="post">
          <?php foreach ($query as $item) : ?>
            <input type="hidden" name="id_pengembalian" id="id_pengembalian" value="<?= $item["id_pengembalian"]; ?>">

            <div class="row mt-4">
              <div class="col-6 mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" placeholder="Nama user" name="nama" id="nama" value="<?= $item["nama"]; ?>" readonly>
              </div>
              <div class="col-6 mb-3">
                <label for="judul" class="form-label">Buku yang dipinjam</label>
                <input type="text" class="form-control" placeholder="Judul Buku" name="judul" id="judul" value="<?= $item["judul"]; ?>" readonly>
              </div>
            </div>

            <div class="row">
              <div class="col-6 mb-3">
                <label for="buku_kembali" class="form-label">Tanggal Dikembalikan</label>
                <input type="date" class="form-control" name="buku_kembali" id="buku_kembali" value="<?= $item["buku_kembali"]; ?>" readonly>
              </div>
              <div class="col-6 mb-3">
                <label for="denda" class="form-label">Besar Denda</label>
                <input type="number" class="form-control" name="denda" id="denda" value="<?= $item["denda"]; ?>" readonly>
              </div>
            </div>
          <?php endforeach; ?>

          <div class="row">
            <div class="col-6 mb-3">
              <label for="bayarDenda" class="form-label">Jumlah Denda yang Dibayar</label>
              <input type="number" class="form-control" name="bayarDenda" id="bayarDenda" required>
            </div>
          </div>

          <div class="d-flex justify-content-between mt-4">
            <button type="reset" class="btn btn-warning text-light">Reset</button>
            <button type="submit" class="btn btn-success" name="bayar">Bayar</button>
          </div>
        </form>
      </div>
    </div>
  </div>


  <footer class="bg-warning-subtle text-dark shadow-lg bg-subtle p-2">
    <div class="container-fluid d-flex justify-content-between">
      <p class="mt-2">Created by <span class="text-primary"> Kejora</span> © 2024</p>
      <p class="mt-2">versi 1.0</p>
    </div>
  </footer>

  <script src="../assets/bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>