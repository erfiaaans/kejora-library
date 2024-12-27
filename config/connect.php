<?php
// FILE LOGIN SYSTEM 
$host = "127.0.0.1";
$username = "root";
$password = "";
$database = "kejora_library";
$connect = mysqli_connect($host, $username, $password, $database);


/* SIGN UP User */
function signUp($data)
{
  global $connect;

  $username = htmlspecialchars($data["username"]);
  $email = htmlspecialchars($data["email"]);
  $nama = htmlspecialchars(strtolower($data["nama"]));
  $password = mysqli_real_escape_string($connect, $data["password"]);
  $confirmPw = mysqli_real_escape_string($connect, $data["confirmPw"]);
  $jk = htmlspecialchars($data["jenis_kelamin"]);
  $noTlp = htmlspecialchars($data["no_tlp"]);
  $tglDaftar = $data["tgl_pendaftaran"];


  //cek username sudah ada / belum
  $usernameResult = mysqli_query($connect, "SELECT  username FROM users WHERE username = '$username'");
  if (mysqli_fetch_assoc($usernameResult)) {
    echo "<script>
    alert('Username telah terdaftar, silahkan gunakan username lain!');
    </script>";
    return 0;
  }

  // Pengecekan kesamaan confirm password dan password
  if ($password !== $confirmPw) {
    echo "<script>
    alert('password / confirm password tidak sesuai');
    </script>";
    return 0;
  }
  $querySignUp = "INSERT INTO users (nama, email, password, jenis_kelamin, no_tlp, tgl_pendaftaran, username, role) 
                VALUES ('$nama', '$email', '$password', '$jk', '$noTlp', '$tglDaftar', '$username', 'USER')";

  mysqli_query($connect, $querySignUp);
  return mysqli_affected_rows($connect);
}
