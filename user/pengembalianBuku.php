<?php
session_start();

if (!isset($_SESSION["signIn"])) {
  header("Location: ../index.php");
  exit;
}
require "../config/config.php";
$idPeminjaman = $_GET["id"];
$query = queryReadData("SELECT peminjaman.id_peminjaman, peminjaman.id_buku, buku.judul, peminjaman.user_id, users.nama, peminjaman.id_admin, peminjaman.tgl_peminjaman, peminjaman.tgl_pengembalian
FROM peminjaman
INNER JOIN buku ON peminjaman.id_buku = buku.id_buku
INNER JOIN users ON peminjaman.user_id = users.user_id
WHERE peminjaman.id_peminjaman = $idPeminjaman");

// Jika tombol submit kembalikan diklik
if (isset($_POST["kembalikan"])) {

  if (pengembalian($_POST) > 0) {
    echo "<script>
    alert('Terimakasih telah mengembalikan buku!');
    window.location.href = 'pengembalian.php';
    </script>";
  } else {
    echo "<script>
    alert('Buku gagal dikembalikan');
    </script>";
  }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../assets/bootstrap/bootstrap.min.css" rel="stylesheet">
  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script>
  <title>Form Pengembalian Buku || User</title>
</head>

<body>
  <?php include 'navbar.php'; ?>

  <div class="m-auto mt-5 p-5" style="width: 50rem;">
    <div class="card p-3 mt-5">
      <form action="" method="post">
        <h3 class="card-title text-center">Form Pengembalian Buku</h3>
        <?php foreach ($query as $item) : ?>
          <div class="row mt-3">
            <div class="col-4 mb-3">
              <label for="id_peminjaman" class="form-label card-title">ID Peminjaman</label>
              <input type="number" class="form-control" placeholder="ID Peminjaman" name="id_peminjaman" id="id_peminjaman" value="<?= $item["id_peminjaman"]; ?>" readonly>
            </div>
            <div class="col-4 mb-3">
              <label for="id_buku" class="form-label card-title">ID Buku</label>
              <input type="text" class="form-control" placeholder="ID Buku" name="id_buku" id="id_buku" value="<?= $item["id_buku"]; ?>" readonly>
            </div>
            <div class="col-4 mb-3">
              <label for="judul" class="form-label card-title">Judul Buku</label>
              <input type="text" class="form-control" placeholder="Judul Buku" name="judul" id="judul" value="<?= $item["judul"]; ?>" readonly>
            </div>
          </div>

          <div class="row">
            <div class="col-4 mb-3">
              <label for="user_id" class="form-label card-title">User ID User</label>
              <input type="number" class="form-control" placeholder="User ID User" name="user_id" id="user_id" value="<?= $item["user_id"]; ?>" readonly>
            </div>
            <div class="col-4 mb-3">
              <label for="nama" class="form-label card-title">Nama User</label>
              <input type="text" class="form-control" placeholder="Nama User" name="nama" id="nama" value="<?= $item["nama"]; ?>" readonly>
            </div>
            <div class="col-4 mb-3">
              <label for="id_admin" class="form-label card-title">ID Admin Perpustakaan</label>
              <input type="number" class="form-control" placeholder="Id Admin" name="id_admin" id="id_admin" value="<?= $item["id_admin"]; ?>" readonly>
            </div>
          </div>

          <div class="row">
            <div class="col-4 mb-3">
              <label for="tgl_peminjaman" class="form-label card-title">Tanggal Buku Dipinjam</label>
              <input type="date" class="form-control" name="tgl_peminjaman" id="tgl_peminjaman" value="<?= $item["tgl_peminjaman"]; ?>" readonly>
            </div>
            <div class="col-4 mb-3">
              <label for="tgl_pengembalian" class="form-label card-title">Tenggat Pengembalian Buku</label>
              <input type="date" class="form-control" name="tgl_pengembalian" id="tgl_pengembalian" value="<?= $item["tgl_pengembalian"]; ?>" oninput="hitungDenda()" readonly>
            </div>
            <div class="col-4 mb-3">
              <label for="buku_kembali" class="form-label card-title">Hari Pengembalian Buku</label>
              <input type="date" class="form-control" name="buku_kembali" id="buku_kembali" value="<?php echo date('Y-m-d'); ?>" oninput="hitungDenda()">
            </div>
          </div>
        <?php endforeach; ?>

        <div class="row">
          <div class="col-4 mb-3">
            <label for="keterlambatan" class="form-label card-title">Keterlambatan</label>
            <input type="text" class="form-control" name="keterlambatan" id="keterlambatan" oninput="hitungDenda()" readonly>
          </div>
          <div class="col-4 mb-3">
            <label for="denda" class="form-label card-title">Denda</label>
            <input type="number" class="form-control" name="denda" id="denda" readonly>
          </div>
        </div>

        <div class="d-flex justify-content-end gap-2">
          <a class="btn btn-danger" href="peminjaman.php">Batal</a>
          <button type="submit" class="btn btn-success" name="kembalikan">Kembalikan</button>
        </div>
      </form>
    </div>

  </div>

  <!--JAVASCRIPT -->
  <script src="../assets/script.js"></script>

  <script src="../assets/bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>