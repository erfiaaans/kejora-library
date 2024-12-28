<?php
session_start();
require "../config/config.php";
//$informatika = "informatika";
$kategori = queryReadData("SELECT * FROM kategori_buku");
if (isset($_POST["tambah"])) {

  if (tambahBuku($_POST) > 0) {
    echo "<script>
    alert('Data buku berhasil ditambahkan');
    document.location.href = 'buku.php';
    </script>";
  } else {
    echo "<script>
    alert('Data buku gagal ditambahkan!');
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
  <title>Tambah buku || Admin</title>
</head>
<style>
  .custom-css-form {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
  }
</style>

<body>
  <?php include 'navbar.php'; ?>

  <div class="m-auto mt-5 p-5" style="width: 50rem;">
    <div class="card p-3 mt-4">
      <h1 class="text-center fw-bold p-3">Form Tambah Buku</h1>
      <form action="" method="post" enctype="multipart/form-data" class="mt-3 p-2">

        <div class="mb-3 row">
          <label for="formFileMultiple" class="col-sm-2 col-form-label">Cover Buku</label>
          <div class="col-sm-10">
            <input class="form-control" type="file" name="cover" id="formFileMultiple" required>
          </div>
        </div>

        <div class="mb-3 row">
          <label for="id_buku" class="col-sm-2 col-form-label">ID Buku</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="id_buku" id="id_buku" required>
          </div>
        </div>

        <div class="mb-3 row">
          <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
          <div class="col-sm-10">
            <select class="form-select" id="kategori" name="kategori">
              <option selected>Choose</option>
              <?php foreach ($kategori as $item) : ?>
                <option><?= $item["kategori"]; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>

        <div class="mb-3 row">
          <label for="judul" class="col-sm-2 col-form-label">Judul Buku</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="judul" id="judul" required>
          </div>
        </div>

        <div class="mb-3 row">
          <label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="pengarang" id="pengarang" required>
          </div>
        </div>

        <div class="mb-3 row">
          <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="penerbit" id="penerbit" required>
          </div>
        </div>

        <div class="mb-3 row">
          <label for="tahun_terbit" class="col-sm-2 col-form-label">Tahun Terbit</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" name="tahun_terbit" id="tahun_terbit" required>
          </div>
        </div>

        <div class="mb-3 row">
          <label for="jumlah_halaman" class="col-sm-2 col-form-label">Jumlah Halaman</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" name="jumlah_halaman" id="jumlah_halaman" required>
          </div>
        </div>

        <div class="mb-3 row">
          <label for="buku_deskripsi" class="col-sm-2 col-form-label">Sinopsis</label>
          <div class="col-sm-10">
            <textarea class="form-control" name="buku_deskripsi" id="buku_deskripsi" style="height: 100px"></textarea>
          </div>
        </div>

        <div class="text-center">
          <button class="btn btn-success" type="submit" name="tambah">Tambah</button>
          <input type="reset" class="btn btn-warning text-light" value="Reset">
        </div>
      </form>
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