<?php
session_start();

if (!isset($_SESSION["signIn"])) {
  header("Location: ../index.php");
  exit;
}
require "../config/config.php";
// Tangkap id buku dari URL (GET)
$idBuku = $_GET["id"];
$query = queryReadData("SELECT * FROM buku WHERE id_buku = '$idBuku'");
//Menampilkan data user yg sedang login
$user_id = $_SESSION["users"]["user_id"];
$dataUser = queryReadData("SELECT * FROM users WHERE user_id = $user_id");
$admin = queryReadData("SELECT * FROM users WHERE role ='ADMIN'");

// Peminjaman 
if (isset($_POST["pinjam"])) {

  if (pinjamBuku($_POST) > 0) {
    echo "<script>
    alert('Buku berhasil dipinjam');
    window.location.href = 'peminjaman.php';
    </script>";
  } else {
    echo "<script>
    alert('Buku gagal dipinjam!');
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

  <title>Form pinjam Buku || User</title>
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
    <h2 class="mt-5 mb-5">Form Peminjaman Buku</h2>
    <div class="row">
      <div class="col-7">
        <div class="card">
          <h5 class="card-header bg-info text-light">Data Lengkap buku</h5>
          <div class="card-body d-flex flex-wrap gap-5 justify-content-center">
            <?php foreach ($query as $item) : ?>
              <div class="d-flex align-items-start" style="width: 100%;">
                <p class="card-text me-4">
                  <img src="../assets/buku/<?= $item["cover"]; ?>" width="180px" height="185px" style="border-radius: 5px;">
                </p>

                <div class="w-100">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>ID Buku:</strong> <?= $item["id_buku"]; ?></li>
                    <li class="list-group-item"><strong>Kategori:</strong> <?= $item["kategori"]; ?></li>
                    <li class="list-group-item"><strong>Judul:</strong> <?= $item["judul"]; ?></li>
                    <li class="list-group-item"><strong>Pengarang:</strong> <?= $item["pengarang"]; ?></li>
                    <li class="list-group-item"><strong>Penerbit:</strong> <?= $item["penerbit"]; ?></li>
                    <li class="list-group-item"><strong>Tahun Terbit:</strong> <?= $item["tahun_terbit"]; ?></li>
                    <li class="list-group-item"><strong>Jumlah Halaman:</strong> <?= $item["jumlah_halaman"]; ?></li>
                    <li class="list-group-item"><strong>Deskripsi Buku:</strong> <?= $item["buku_deskripsi"]; ?></li>
                  </ul>
                </div>
              </div>
            <?php endforeach; ?>
          </div>


        </div>
      </div>
      <div class="col-5">
        <div class="card">
          <h5 class=" card-header  bg-info text-light">Data lengkap User</h5>
          <div class="card-body d-flex flex-wrap gap-5 justify-content-center">
            <?php foreach ($dataUser as $item) : ?>
              <div class="d-flex align-items-start" style="width: 100%;">
                <p class="me-4">
                  <img src="../assets/img/user.png" width="150px" alt="Gambar Anggota">
                </p>

                <div class="w-100">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>User ID:</strong> <?= $item["user_id"]; ?></li>
                    <li class="list-group-item"><strong>Username:</strong> <?= $item["username"]; ?></li>
                    <li class="list-group-item"><strong>Email:</strong> <?= $item["email"]; ?></li>
                    <li class="list-group-item"><strong>Nama:</strong> <?= $item["nama"]; ?></li>
                    <li class="list-group-item"><strong>Jenis Kelamin:</strong> <?= $item["jenis_kelamin"]; ?></li>
                    <li class="list-group-item"><strong>No Tlp:</strong> <?= $item["no_tlp"]; ?></li>
                    <li class="list-group-item"><strong>Tanggal Daftar:</strong> <?= $item["tgl_pendaftaran"]; ?></li>
                  </ul>
                </div>
              </div>
            <?php endforeach; ?>
          </div>


        </div>
      </div>
    </div>


    <div class="card mt-4">
      <h5 class="card-header bg-primary text-light">Form Pinjam Buku</h5>
      <div class="card-body d-flex flex-wrap gap-4 justify-content-center">
        <form action="" method="post" class="w-100">
          <div class="mb-3 row">
            <label for="idBuku" class="col-sm-4 col-form-label">ID Buku</label>
            <div class="col-sm-8">
              <input type="text" name="id_buku" class="form-control" id="idBuku" placeholder="id buku" value="<?= $idBuku ?>" readonly>
            </div>
          </div>

          <div class="mb-3 row">
            <label for="userId" class="col-sm-4 col-form-label">User</label>
            <div class="col-sm-8">
              <input type="text" name="name" class="form-control" value="<?php echo $_SESSION['users']['nama']; ?>" disabled>
              <input type="text" name="user_id" class="form-control" id="userId" value="<?php echo $_SESSION['users']['user_id']; ?>" style="display:none;">
            </div>
          </div>

          <div class="mb-3 row">
            <label for="adminSelect" class="col-sm-4 col-form-label">Nama Admin</label>
            <div class="col-sm-8">
              <select name="id" class="form-select" id="adminSelect" required>
                <option value="" disabled selected></option>
                <?php foreach ($admin as $item) : ?>
                  <option value="<?= $item['user_id']; ?>">
                    <?= $item['nama']; ?>
                  </option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>

          <div class="mb-3 row">
            <label for="tglPeminjaman" class="col-sm-4 col-form-label">Tanggal Pinjam</label>
            <div class="col-sm-8">
              <input type="date" name="tgl_peminjaman" id="tglPeminjaman" class="form-control" placeholder="Tanggal Pinjam" onchange="setReturnDate()" value="<?= date('Y-m-d'); ?>" required>
            </div>
          </div>

          <div class="mb-3 row">
            <label for="tglPengembalian" class="col-sm-4 col-form-label">Tenggat Pengembalian</label>
            <div class="col-sm-8">
              <input type="date" name="tgl_pengembalian" id="tglPengembalian" class="form-control" placeholder="Tanggal Pengembalian" value="<?= date('Y-m-d', strtotime('+7 days')); ?>" readonly>
            </div>
          </div>

          <div class="d-flex justify-content-between">
            <a class="btn btn-danger" href="buku.php">Batal</a>
            <button type="submit" class="btn btn-success" name="pinjam">Pinjam</button>
          </div>
        </form>
      </div>

    </div>

    <div class="alert alert-info mt-4" role="alert"><span class="fw-bold">Catatan :</span> Setiap keterlambatan pada pengembalian buku akan dikenakan sanksi berupa denda.</div>

  </div>

  <footer class="bg-dark text-light shadow-lg bg-subtle p-2">
    <div class="container-fluid d-flex justify-content-between">
      <p class="mt-2">Created by <span class="text-primary"> Kejora</span> © 2024</p>
      <p class="mt-2">versi 1.0</p>
    </div>
  </footer>

  <!--JAVASCRIPT -->
  <script src="../assets/script.js"></script>

  <script src="../assets/bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>