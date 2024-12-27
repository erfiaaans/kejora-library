<?php
require "config/connect.php";
if (isset($_POST["signUp"])) {

  if (signUp($_POST) > 0) {
    echo "<script>
    alert('Sign Up berhasil!')
    window.location.href = 'index.php';
    </script>";
  } else {
    echo "<script>
    alert('Sign Up gagal!')
    </script>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="assets/bootstrap/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/fontawesome-all-v5.15.4.css" />
  <title>Sign Up || User</title>
</head>

<body>
  <div class="container p-3">
    <div class="m-auto" style="width: 30rem;">
      <div class="card p-2">
        <img src="assets/img/LOGIN.png" class="card-img-top" alt="logo" height="100" width="50">
        <h3 class="text-center fw-bold">Register Account</h3>
        <form action="" method="post" class="row g-3 p-4 needs-validation" novalidate>
          <div class="mb-3 row">
            <label for="username" class="col-sm-4 col-form-label">Username</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="username" id="username" required>
              <div class="invalid-feedback">
                Username wajib diisi!
              </div>
            </div>
          </div>

          <div class="mb-3 row">
            <label for="email" class="col-sm-4 col-form-label">Email</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="email" id="email" required>
              <div class="invalid-feedback">
                Email wajib diisi!
              </div>
            </div>
          </div>

          <div class="mb-3 row">
            <label for="nama" class="col-sm-4 col-form-label">Nama Lengkap</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nama" name="nama" required>
              <div class="invalid-feedback">
                Nama wajib diisi!
              </div>
            </div>
          </div>


          <div class="mb-3 row">
            <label for="gender" class="col-sm-4 col-form-label">Gender</label>
            <div class="col-sm-8">
              <select class="form-select" id="gender" name="jenis_kelamin" required>
                <option selected disabled value="">Choose</option>
                <option value="Laki laki">Laki laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
              <div class="invalid-feedback">
                Pilih gender anda!
              </div>
            </div>
          </div>

          <div class="mb-3 row">
            <label for="no_tlp" class="col-sm-4 col-form-label">No Telepon</label>
            <div class="col-sm-8">
              <input type="number" class="form-control" name="no_tlp" id="no_tlp" required>
              <div class="invalid-feedback">
                No telepon wajib diisi!
              </div>
            </div>
          </div>

          <div class="mb-3 row" style="display: none;">
            <label for="tgl_pendaftaran" class="col-sm-4 col-form-label">Tanggal Pendaftaran</label>
            <div class="col-sm-8">
              <input type="date" class="form-control" name="tgl_pendaftaran" id="tgl_pendaftaran" value="<?= date('Y-m-d'); ?>" required>
              <div class="invalid-feedback">
                Tanggal pendaftaran wajib diisi!
              </div>
            </div>
          </div>

          <div class="mb-3 row">
            <label for="password" class="col-sm-4 col-form-label">Password</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="password" name="password" required>
              <div class="invalid-feedback">
                Password wajib diisi!
              </div>
            </div>
          </div>

          <div class="mb-3 row">
            <label for="confirmPw" class="col-sm-4 col-form-label">Confirm Password</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="confirmPw" name="confirmPw" required>
              <div class="invalid-feedback">
                Konfirmasi password wajib diisi!
              </div>
            </div>
          </div>



          <div class="mb-3 row">
            <div class="col-sm-8 offset-sm-4 d-flex gap-2">
              <button class="btn btn-primary" type="submit" name="signUp">Sign Up</button>
              <input type="reset" class="btn btn-warning text-light" value="Reset">
            </div>
          </div>

          <div class="mb-3 row">
            <div class="col-sm-8 offset-sm-4">
              <p>Already have an account? <a href="index.php" class="text-decoration-none text-primary">Sign In</a></p>
            </div>
          </div>
        </form>


      </div>
    </div>


  </div>
</body>

<script>
  (() => {
    'use strict'
    const forms = document.querySelectorAll('.needs-validation')

    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
  })()
</script>

<script src="assets/bootstrap/bootstrap.bundle.min.js"></script>

</html>