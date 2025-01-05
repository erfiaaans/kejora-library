<?php
session_start();

if (!isset($_SESSION["signIn"])) {
  header("Location: ../sign/admin/sign_in.php");
  exit;
}
require "../config/config.php";
$user_id = $_SESSION["users"]["user_id"];
$dataUser = queryReadData("SELECT * FROM users WHERE user_id = $user_id");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../assets/bootstrap/bootstrap.min.css" rel="stylesheet">
  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script>
  <title>Admin Dashboard</title>
  <style>
    .hero {
      background: url('../assets/img/hero-background-2.jpg') no-repeat center center/cover;
      color: white;
      padding: 50px 20px;
      text-align: center;
      position: relative;
    }

    .hero::after {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 1;
    }

    .hero h1,
    .hero p {
      position: relative;
      z-index: 2;
    }



    .card {
      border: none;
      transition: transform 0.3s ease-in-out;
    }

    .card:hover {
      transform: scale(1.05);
    }

    .user-card {
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
    }

    .user-card-header {
      background: linear-gradient(135deg, #17a2b8, #0d6efd);
      padding: 15px;
      color: white;
      text-align: center;
    }

    .user-card-body {
      padding: 20px;
      text-align: center;

    }

    .user-card img {
      border-radius: 50%;
      margin-bottom: 15px;
    }

    .user-info {
      display: flex;
      flex-wrap: wrap;
      text-align: left;
    }

    .user-info .col-6 {
      padding: 5px;
    }
  </style>
</head>

<body>

  <?php include 'navbar.php'; ?>


  <div class="mt-5 pt-2">
    <div class="hero mt-5">
      <h1>Welcome, <span class="text-capitalize"><?php echo $_SESSION['users']['nama']; ?></span></h1>
      <p>Dashboard Admin Kejora Library - <span><?php echo date('l, d F Y'); ?></span></p>
    </div>

    <div class="container my-5">
      <div class="row">
        <!-- User Info -->
        <div class="col-md-4">
          <div class="user-card">
            <div class="user-card-header">
              <h5>Data Pengguna</h5>
            </div>
            <div class="user-card-body">
              <img src="../assets/img/user.png" class="rounded-circle" width="100px" alt="User Image">
              <div class="user-info mt-3 row">
                <?php foreach ($dataUser as $item) : ?>
                  <div class="col-6"><strong>Username</strong></div>
                  <div class="col-6"><?= $item["username"]; ?></div>
                  <div class="col-6"><strong>Email</strong></div>
                  <div class="col-6"><?= $item["email"]; ?></div>
                  <div class="col-6"><strong>Nama</strong></div>
                  <div class="col-6"><?= $item["nama"]; ?></div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>

        <!-- Services Section -->
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-6 mb-4">
              <div class="card shadow">
                <a href="users.php">
                  <img src="../assets/img/card/member.png" class="card-img" alt="Daftar Users">
                </a>
              </div>
            </div>
            <div class="col-md-6 mb-4">
              <div class="card shadow">
                <a href="buku.php">
                  <img src="../assets/img/card/bukuAdmin.png" class="card-img" alt="Daftar Buku">
                </a>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card shadow">
                <a href="peminjamanBuku.php">
                  <img src="../assets/img/card/peminjaman.png" class="card-img" alt="Peminjam Buku">
                </a>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card shadow">
                <a href="pengembalianBuku.php">
                  <img src="../assets/img/card/pengembalianAdmin.png" class="card-img" alt="Pengembalian Buku">
                </a>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card shadow">
                <a href="denda.php">
                  <img src="../assets/img/card/denda.png" class="card-img" alt="Denda">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="bg-warning-subtle text-dark shadow-lg" style="padding: 10px 0;text-align: center;">
    <p>Created by <span class="text-primary fw-bold">Kejora</span> &copy; 2024 | Versi 1.0</p>
  </footer>

  <script src="../assets/bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>