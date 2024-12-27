<?php
require "../config/config.php";
$idBuku = $_GET["id"];
$query = queryReadData("SELECT * FROM buku WHERE id_buku = '$idBuku'");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../assets/bootstrap/bootstrap.min.css" rel="stylesheet">
  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script>
  <title>Detail Buku || User</title>
</head>

<body>
  <?php include 'navbar.php'; ?>

  <div class="p-4 mt-5">
    <h2 class="mt-5 text-center font-weight-bold">Detail Buku</h2>
    <div class="d-flex justify-content-center">
      <div class="card" style="width: 50rem;">
        <?php foreach ($query as $item) : ?>
          <h5 class="card-header text-center"><?= $item["judul"]; ?></h5>

          <div class="d-flex p-2">
            <img src="../assets/buku/<?= $item["cover"]; ?>" class="card-img-left" alt="coverBuku" style="width: 150px; height: 200px; object-fit: cover;">
            <div class="card-body">
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>ID Buku:</strong> <?= $item["id_buku"]; ?></li>
                <li class="list-group-item"><strong>Kategori:</strong> <?= $item["kategori"]; ?></li>
                <li class="list-group-item"><strong>Pengarang:</strong> <?= $item["pengarang"]; ?></li>
                <li class="list-group-item"><strong>Penerbit:</strong> <?= $item["penerbit"]; ?></li>
                <li class="list-group-item"><strong>Tahun Terbit:</strong> <?= $item["tahun_terbit"]; ?></li>
                <li class="list-group-item"><strong>Jumlah Halaman:</strong> <?= $item["jumlah_halaman"]; ?></li>
                <li class="list-group-item"><strong>Deskripsi Buku:</strong> <?= $item["buku_deskripsi"]; ?></li>
              </ul>
            </div>
          </div>

          <!-- Card Footer -->
          <div class="card-body d-flex justify-content-between">
            <a href="buku.php" class="btn btn-danger w-48">Batal</a>
            <a href="pinjamBuku.php?id=<?= $item["id_buku"]; ?>" class="btn btn-success w-48">Pinjam</a>
          </div>
        <?php endforeach; ?>
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
</body>

</html>