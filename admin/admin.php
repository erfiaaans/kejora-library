<?php
session_start();

if (!isset($_SESSION["signIn"])) {
  header("Location: ../sign/admin/sign_in.php");
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../assets/bootstrap/bootstrap.min.css" rel="stylesheet">
  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script>
  <title>Admin Dashboard</title>
</head>

<body>

  <?php include 'navbar.php'; ?>


  <div class="mt-5 p-4">
    <h1 class="mt-5 fw-bold">Dashboard - <span class="fs-4 text-secondary"> <?php echo date('l d F Y'); ?> </span></h1>

    <div class="alert alert-success" role="alert">Selamat datang admin - <span class="fw-bold text-capitalize"><?php echo $_SESSION['admin']['nama_admin']; ?></span> di Dashboard Kejora Library</div>

    <div class="mt-4 p-3">

      <div class="d-flex flex-wrap justify-content-center gap-2">
        <div class="cardImg">
          <a href="users.php">
            <img src="../assets/img/card/member.png" alt="daftar buku" style="max-width: 100%;" width="600px">
          </a>
        </div>
        <div class="cardImg">
          <a href="buku.php">
            <img src="../assets/img/card/bukuAdmin.png" alt="daftar buku" style="max-width: 100%;" width="600px">
          </a>
        </div>

        <div class="cardImg">
          <a href="peminjamanBuku.php">
            <img src="../assets/img/card/peminjaman.png" alt="daftar buku" style="max-width: 100%;" width="600px">
          </a>
        </div>
        <div class="cardImg">
          <a href="pengembalianBuku.php">
            <img src="../assets/img/card/pengembalianAdmin.png" alt="daftar buku" style="max-width: 100%;" width="600px">
          </a>
        </div>

        <div class="cardImg">
          <a href="denda.php">
            <img src="../assets/img/card/denda.png" alt="daftar buku" style="max-width: 100%;" width="600px">
          </a>
        </div>
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