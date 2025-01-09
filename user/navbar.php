<nav class="navbar fixed-top bg-warning-subtle shadow-sm navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid p-3">
    <a class="navbar-brand" href="#">
      <img src="../assets/img/fontkejora.png" alt="logo" width="120px">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
      aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'user.php' ? 'active' : ''; ?>" aria-current="page"
            href="user.php" style="font-weight: bold;">Home</a>
        </li>
        <li class=" nav-item">
          <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'buku.php' ? 'active' : ''; ?>" href="buku.php"
            style="font-weight: bold;">Daftar Buku</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'peminjaman.php' ? 'active' : ''; ?>"
            href="peminjaman.php" style="font-weight: bold;">Peminjaman Buku</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'pengembalian.php' ? 'active' : ''; ?>"
            href="pengembalian.php" style="font-weight: bold;">Pengembalian Buku</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'denda.php' ? 'active' : ''; ?>" href="denda.php"
            style="font-weight: bold;">Denda</a>
        </li>
      </ul>

    </div>
    <div class="dropdown">
      <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="../assets/img/user.png" alt="usersLogo" width="40px">
      </button>
      <ul style="margin-left: -7rem;" class="dropdown-menu position-absolute mt-2 p-2">
        <li>
          <a class="dropdown-item text-center" href="#">
            <img src="../assets/img/user.png" alt="adminLogo" width="30px">
          </a>
        </li>
        <li>
          <a class="dropdown-item text-center text-secondary" href="#"> <span
              class="text-capitalize"><?php echo $_SESSION['users']['nama']; ?></span></a>
          <a class="dropdown-item text-center mb-2" href="#">User</a>
        </li>
        <li>
          <a class="dropdown-item text-center p-2 bg-danger text-light rounded" href="../logout.php">Sign Out <i
              class="fa-solid fa-right-to-bracket"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>