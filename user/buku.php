<?php
session_start();

// Redirect jika belum login
if (!isset($_SESSION["signIn"])) {
  header("Location: ../index.php");
  exit;
}

require "../config/config.php";

// query default untuk membaca semua buku
$query = "SELECT * FROM buku";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  if (isset($_POST["kategori"]) &&  $_POST["kategori"] != '') {
    $kategori = $_POST["kategori"];
    $query = "SELECT * FROM buku WHERE kategori = '$kategori'";
  }
}

if (isset($_POST["search"])) {
  $buku = search($_POST["keyword"]);
} else {
  $buku = queryReadData($query);
}

$kategori = queryReadData("SELECT kategori FROM kategori_buku");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../assets/bootstrap/bootstrap.min.css" rel="stylesheet">
  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script>
  <title>Daftar Buku || User</title>
</head>
<style>
  .layout-card-custom {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 1.5rem;
  }
</style>

<body>
  <?php include 'navbar.php'; ?>


  <div class="p-4 mt-5">
    <!--Btn filter data kategori buku-->
    <div class="d-flex justify-content-between align-items-center m-5">
      <form action="" method="post" class="d-flex">
        <div class="layout-card-custom">
          <button
            class="btn btn-outline-warning <?= (!isset($_POST['kategori']) || $_POST['kategori'] == '') ? 'active' : ''; ?>"
            type="submit"
            name="kategori"
            value="">
            Semua
          </button>
          <?php foreach ($kategori as $item): ?>
            <button
              type="submit"
              name="kategori"
              value="<?= $item['kategori']; ?>"
              class="btn btn-outline-warning  <?= (isset($_POST['kategori']) && $_POST['kategori'] == $item['kategori']) ? 'active' : ''; ?>">
              <?= ucfirst($item['kategori']); ?>
            </button>
          <?php endforeach; ?>
        </div>
      </form>

      <!--Form pencarian-->
      <form action="" method="post" class="d-flex">
        <div class="input-group">
          <input class="border p-2 rounded rounded-end-0 bg-tertiary" type="text" name="keyword" id="keyword" placeholder="Cari Judul / Kategori">
          <button class="border border-start-0 bg-light rounded rounded-start-0" type="submit" name="search">
            <i class="fa fa-solid fa-magnifying-glass"></i>
          </button>
        </div>
      </form>
    </div>



    <!--Card buku-->
    <div class="layout-card-custom">
      <?php foreach ($buku as $item) : ?>
        <div class="card" style="width: 15rem;">
          <img src="../assets/buku/<?= $item["cover"]; ?>" class="card-img-top" alt="coverBuku" height="250px">
          <div class="card-body">
            <h5 class="card-title"><?= $item["judul"]; ?></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary"><?= ucfirst($item["kategori"]); ?></h6>
          </div>
          <div class="card-footer bg-light d-flex justify-content-end">
            <a class="btn btn-success btn-sm" href="bukuDetail.php?id=<?= $item["id_buku"]; ?>">Detail</a>
          </div>
        </div>
      <?php endforeach; ?>
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