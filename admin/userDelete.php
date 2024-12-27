<?php
require "../config/config.php";

$user_id = $_GET["id"];
if (deleteUser($user_id) > 0) {
  echo "<script>
    alert('User berhasil dihapus!');
    document.location.href = 'users.php';
    </script>";
} else {
  echo "<script>
    alert('User gagal dihapus!');
    document.location.href = 'users.php';
    </script>";
}
