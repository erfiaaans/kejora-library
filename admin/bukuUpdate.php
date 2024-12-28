<?php
session_start();

require "../config/config.php";
// Ambil data dari url
$review = $_GET["idReview"];
$reviewData = queryReadData("SELECT * FROM buku WHERE id_buku = '$review'")[0];

// ==== FASE PERCOBAAN DEBUGGING =====
/*
$reviewKategori = queryReadData("SELECT * FROM buku WHERE kategori = '$review'");
*/
// Data kategori buku
$kategori = queryReadData("SELECT * FROM kategori_buku");

if (isset($_POST["update"])) {

  if (updateBuku($_POST) > 0) {
    echo "<script>
    alert('Data buku berhasil diupdate!');
    document.location.href = 'buku.php';
    </script>";
  } else {
    echo "<script>
    alert('Data buku gagal diupdate!');
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
  <title>Edit data buku || Admin</title>
</head>

<body>
  <?php include 'navbar.php'; ?>


  <div class="m-auto mt-5 p-5" style="width: 50rem;">
    <div class="card p-3 mt-4">
      <h1 class="text-center fw-bold p-3">Form Edit Buku</h1>
      <form action="" method="post" enctype="multipart/form-data" class="mt-3 p-2">

        <div class="mb-3 row">
          <input type="hidden" name="coverLama" value="<?= $reviewData["cover"]; ?>">
          <div class="col-sm-2">
            <label for="formFileMultiple" class="form-label">Cover Buku</label>
          </div>
          <div class="col-sm-10">
            <div class="row">
              <div class="col-6">
                <input class="form-control" type="file" name="cover" id="formFileMultiple">
              </div>
              <div class="col">
                <img src="../assets/buku/<?= $reviewData["cover"]; ?>" width="80px" height="80px">
              </div>
            </div>
          </div>
        </div>

        <div class="mb-3 row">
          <label for="id_buku" class="col-sm-2 col-form-label">ID Buku</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="id_buku" id="id_buku" value="<?= $reviewData["id_buku"]; ?>">
          </div>
        </div>

        <div class="mb-3 row">
          <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
          <div class="col-sm-10">
            <select class="form-select" id="kategori" name="kategori">
              <option selected><?= $reviewData["kategori"]; ?></option>
              <?php foreach ($kategori as $item) : ?>
                <option><?= $item["kategori"]; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>

        <div class="mb-3 row">
          <label for="judul" class="col-sm-2 col-form-label">Judul Buku</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="judul" id="judul" value="<?= $reviewData["judul"]; ?>">
          </div>
        </div>

        <div class="mb-3 row">
          <label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="pengarang" id="pengarang" value="<?= $reviewData["pengarang"]; ?>">
          </div>
        </div>

        <div class="mb-3 row">
          <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="penerbit" id="penerbit" value="<?= $reviewData["penerbit"]; ?>">
          </div>
        </div>

        <div class="mb-3 row">
          <label for="tahun_terbit" class="col-sm-2 col-form-label">Tahun Terbit</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" name="tahun_terbit" id="tahun_terbit" value="<?= $reviewData["tahun_terbit"]; ?>">
          </div>
        </div>

        <div class="mb-3 row">
          <label for="jumlah_halaman" class="col-sm-2 col-form-label">Jumlah Halaman</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" name="jumlah_halaman" id="jumlah_halaman" value="<?= $reviewData["jumlah_halaman"]; ?>">
          </div>
        </div>

        <div class="mb-3 row">
          <label for="buku_deskripsi" class="col-sm-2 col-form-label">Sinopsis</label>
          <div class="col-sm-10">
            <textarea class="form-control" name="buku_deskripsi" id="buku_deskripsi" style="height: 100px"><?= $reviewData["buku_deskripsi"]; ?></textarea>
          </div>
        </div>

        <div class="text-center">
          <button class="btn btn-success" type="submit" name="update">Edit</button>
          <a class="btn btn-danger" href="buku.php">Batal</a>
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