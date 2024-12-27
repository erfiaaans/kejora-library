<?php
session_start();

// Jika users sudah login, tidak boleh kembali ke halaman login, kecuali logout
if (isset($_SESSION["signIn"])) {
  if ($_SESSION["role"] === "ADMIN") {
    header("Location: admin/admin.php");
  } else {
    header("Location: user/user.php");
  }
  exit;
}

require "config/connect.php";

if (isset($_POST["signIn"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($connect, "SELECT * FROM users WHERE username = '$username' LIMIT 1");

  if (mysqli_num_rows($result) === 1) {
    $pw = mysqli_fetch_assoc($result);

    // Cek password
    if ($password == $pw["password"]) {
      // SET SESSION
      $_SESSION["signIn"] = true;

      $_SESSION["admin"]["nama_admin"] = $username;
      $_SESSION["users"]["nama"] = $pw["nama"];
      $_SESSION["users"]["user_id"] = $pw["user_id"];
      $_SESSION["username"] = $username;
      $_SESSION["role"] = $pw["role"];

      // Redirect berdasarkan role
      if ($pw["role"] === "ADMIN") {
        header("Location: admin/admin.php");
      } else {
        header("Location: user/user.php");
      }
      exit;
    }
  }
  $error = true;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="assets/bootstrap/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" href="assets/img/icon.png" type="image/png">
  <title>Login | Perpustakaan</title>
</head>

<body>
  <div class="container p-5">
    <div class="m-auto" style="width: 30rem;">
      <div class="card p-2">
        <img src="assets/img/LOGIN.png" class="card-img-top" alt="logo" height="100" width="50">
        <div class="card-body">
          <h3 class="card-text text-center">Login Perpustakaan</h3>
          <form action="" method="post" class="row g-3 p-4 needs-validation" novalidate>
            <div class="col-12">
              <label for="validationCustom01" class="form-label">Username</label>
              <input type="text" class="form-control" name="username" id="validationCustom01" required>
              <div class="invalid-feedback">
                Masukkan Username anda!
              </div>
            </div>
            <div class="col-12">
              <label for="validationCustom02" class="form-label">Password</label>
              <input type="password" class="form-control" id="validationCustom02" name="password" required>
              <div class="invalid-feedback">
                Masukkan Password anda!
              </div>
            </div>
            <div class="col-12">
              <button class="btn btn-primary w-100" type="submit" name="signIn">Sign In</button>
            </div>
            <div class="col-12">
              <p>Don't have an account yet? <a href="register.php" class="text-decoration-none text-primary">Sign Up</a></p>
            </div>
          </form>

          <?php if (isset($error)): ?>
            <div class="alert alert-danger mt-2" role="alert">Username / Password tidak sesuai !
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
      'use strict'

      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      const forms = document.querySelectorAll('.needs-validation')

      // Loop over them and prevent submission
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
</body>

</html>