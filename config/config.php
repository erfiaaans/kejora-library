<?php
$host = "127.0.0.1";
$username = "root";
$password = "";
$database_name = "kejora_library";
$connection = mysqli_connect($host, $username, $password, $database_name);

// === FUNCTION KHUSUS ADMIN START ===

// MENAMPILKAN DATA KATEGORI BUKU
function queryReadData($dataKategori)
{
  global $connection;
  $result = mysqli_query($connection, $dataKategori);
  $items = [];
  while ($item = mysqli_fetch_assoc($result)) {
    $items[] = $item;
  }
  return $items;
}

// Menambahkan data buku 
function tambahBuku($dataBuku)
{
  global $connection;

  $cover = upload();
  $idBuku = htmlspecialchars($dataBuku["id_buku"]);
  $kategoriBuku = $dataBuku["kategori"];
  $judulBuku = htmlspecialchars($dataBuku["judul"]);
  $pengarangBuku = htmlspecialchars($dataBuku["pengarang"]);
  $penerbitBuku = htmlspecialchars($dataBuku["penerbit"]);
  $tahunTerbit = $dataBuku["tahun_terbit"];
  $jumlahHalaman = $dataBuku["jumlah_halaman"];
  $deskripsiBuku = htmlspecialchars($dataBuku["buku_deskripsi"]);

  if (!$cover) {
    return 0;
  }

  $queryInsertDataBuku = "INSERT INTO buku VALUES('$cover', '$idBuku', '$kategoriBuku', '$judulBuku', '$pengarangBuku', '$penerbitBuku', '$tahunTerbit', $jumlahHalaman, '$deskripsiBuku')";

  mysqli_query($connection, $queryInsertDataBuku);
  return mysqli_affected_rows($connection);
}

// Function upload gambar 
function upload()
{
  $namaFile = $_FILES["cover"]["name"];
  $ukuranFile = $_FILES["cover"]["size"];
  $error = $_FILES["cover"]["error"];
  $tmpName = $_FILES["cover"]["tmp_name"];

  // cek apakah ada gambar yg diupload
  if ($error === 4) {
    echo "<script>
    alert('Silahkan upload cover buku terlebih dahulu!')
    </script>";
    return 0;
  }

  // cek kesesuaian format gambar
  $jpg = "jpg";
  $jpeg = "jpeg";
  $png = "png";
  $svg = "svg";
  $bmp = "bmp";
  $psd = "psd";
  $tiff = "tiff";
  $formatGambarValid = [$jpg, $jpeg, $png, $svg, $bmp, $psd, $tiff];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));

  if (!in_array($ekstensiGambar, $formatGambarValid)) {
    echo "<script>
    alert('Format file tidak sesuai');
    </script>";
    return 0;
  }

  // batas ukuran file
  if ($ukuranFile > 2000000) {
    echo "<script>
    alert('Ukuran file terlalu besar!');
    </script>";
    return 0;
  }

  //generate nama file baru, agar nama file tdk ada yg sama
  $namaFileBaru = uniqid();
  $namaFileBaru .= ".";
  $namaFileBaru .= $ekstensiGambar;

  move_uploaded_file($tmpName, '../assets/buku/' . $namaFileBaru);
  return $namaFileBaru;
}

// MENAMPILKAN SESUATU SESUAI DENGAN INPUTAN USER PADA * SEARCH ENGINE BUKU*
function search($keyword)
{
  // search data buku
  $querySearch = "SELECT * FROM buku 
  WHERE
  judul LIKE '%$keyword%' OR
  kategori LIKE '%$keyword%'
  ";
  return queryReadData($querySearch);
}


// DELETE DATA Buku
function delete($bukuId)
{
  global $connection;

  // Query untuk mendapatkan nama file cover
  $querySelectCover = "SELECT cover FROM buku WHERE id_buku = '$bukuId'";
  $result = mysqli_query($connection, $querySelectCover);
  $data = mysqli_fetch_assoc($result);

  // Hapus file cover jika ditemukan
  if ($data && !empty($data['cover'])) {
    $coverPath = "../assets/buku/" . $data['cover'];
    if (file_exists($coverPath)) {
      unlink($coverPath); // Menghapus file cover
    }
  }

  // Query untuk menghapus data dari tabel buku
  $queryDeleteBuku = "DELETE FROM buku WHERE id_buku = '$bukuId'";
  mysqli_query($connection, $queryDeleteBuku);

  return mysqli_affected_rows($connection);
}


// UPDATE || EDIT DATA BUKU 
function updateBuku($dataBuku)
{
  global $connection;

  $gambarLama = htmlspecialchars($dataBuku["coverLama"]);
  $idBuku = htmlspecialchars($dataBuku["id_buku"]);
  $kategoriBuku = $dataBuku["kategori"];
  $judulBuku = htmlspecialchars($dataBuku["judul"]);
  $pengarangBuku = htmlspecialchars($dataBuku["pengarang"]);
  $penerbitBuku = htmlspecialchars($dataBuku["penerbit"]);
  $tahunTerbit = $dataBuku["tahun_terbit"];
  $jumlahHalaman = $dataBuku["jumlah_halaman"];
  $deskripsiBuku = htmlspecialchars($dataBuku["buku_deskripsi"]);


  // pengecekan mengganti gambar || tidak
  if ($_FILES["cover"]["error"] === 4) {
    $cover = $gambarLama;
  } else {
    $cover = upload();
    $coverPath = "../assets/buku/" . $gambarLama;
    if (file_exists($coverPath)) {
      unlink($coverPath);
    }
  }

  // 4 === gagal upload gambar
  // 0 === berhasil upload gambar

  $queryUpdate = "UPDATE buku SET 
  cover = '$cover',
  id_buku = '$idBuku',
  kategori = '$kategoriBuku',
  judul = '$judulBuku',
  pengarang = '$pengarangBuku',
  penerbit = '$penerbitBuku',
  tahun_terbit = '$tahunTerbit',
  jumlah_halaman = $jumlahHalaman,
  buku_deskripsi = '$deskripsiBuku'
  WHERE id_buku = '$idBuku'
  ";

  mysqli_query($connection, $queryUpdate);
  return mysqli_affected_rows($connection);
}

// Hapus users yang terdaftar
function deleteUser($user_id)
{
  global $connection;

  $deleteUser = "DELETE FROM users WHERE user_id = $user_id";
  mysqli_query($connection, $deleteUser);
  return mysqli_affected_rows($connection);
}

// Hapus history pengembalian data BUKU
function deleteDataPengembalian($idPengembalian)
{
  global $connection;

  $deleteDataPengembalianBuku = "DELETE FROM pengembalian WHERE id_pengembalian = $idPengembalian";
  mysqli_query($connection, $deleteDataPengembalianBuku);
  return mysqli_affected_rows($connection);
}


// === FUNCTION KHUSUS ADMIN END ===


// === FUNCTION KHUSUS MEMBER START ===
// Peminjaman BUKU
function pinjamBuku($dataBuku)
{
  global $connection;

  $idBuku = $dataBuku["id_buku"];
  $user_id = $dataBuku["user_id"];
  $idAdmin = $dataBuku["id"];
  $tglPinjam = $dataBuku["tgl_peminjaman"];
  $tglKembali = $dataBuku["tgl_pengembalian"];
  // cek apakah user memiliki denda 
  $cekDenda = mysqli_query($connection, "SELECT denda FROM pengembalian WHERE user_id = $user_id && denda > 0");
  if (mysqli_num_rows($cekDenda) > 0) {
    $item = mysqli_fetch_assoc($cekDenda);
    $jumlahDenda = $item["denda"];
    if ($jumlahDenda > 0) {
      echo "<script>
       alert('Anda belum melunasi denda, silahkan lakukan pembayaran terlebih dahulu !');
       </script>";
      return 0;
    }
  }
  // cek batas user meminjam buku berdasarkan user_id
  $user_idResult = mysqli_query($connection, "SELECT user_id FROM peminjaman WHERE user_id = $user_id");
  if (mysqli_fetch_assoc($user_idResult)) {
    echo "<script>
    alert('Anda sudah meminjam buku, Harap kembalikan dahulu buku yg anda pinjam!');
    </script>";
    return 0;
  }

  $queryPinjam = "INSERT INTO peminjaman VALUES(null, '$idBuku', $user_id, $idAdmin, '$tglPinjam', '$tglKembali')";
  mysqli_query($connection, $queryPinjam);
  return mysqli_affected_rows($connection);
}

// Pengembalian BUKU
function pengembalian($dataBuku)
{
  global $connection;

  // Variabel pengembalian
  $idPeminjaman = $dataBuku["id_peminjaman"];
  $idBuku = $dataBuku["id_buku"];
  $user_id = $dataBuku["user_id"];
  $idAdmin = $dataBuku["id_admin"];
  $tenggatPengembalian = $dataBuku["tgl_pengembalian"];
  $bukuKembali = $dataBuku["buku_kembali"];
  $keterlambatan = $dataBuku["keterlambatan"];
  $denda = $dataBuku["denda"];

  if ($bukuKembali > $tenggatPengembalian) {
    echo "<script>
    alert('Anda terlambat mengembalikan buku, harap bayar denda sesuai dengan jumlah yang ditentukan!');
    </script>";
  }

  // Menghapus data user yang sudah mengembalikan buku
  $hapusDataPeminjam = "DELETE FROM peminjaman WHERE id_peminjaman = $idPeminjaman";

  // Memasukkan data kedalam tabel pengembalian
  $queryPengembalian = "INSERT INTO pengembalian VALUES(null, $idPeminjaman, '$idBuku', $user_id, $idAdmin, '$bukuKembali', '$keterlambatan', $denda)";


  mysqli_query($connection, $hapusDataPeminjam);
  mysqli_query($connection, $queryPengembalian);
  return mysqli_affected_rows($connection);
}

function bayarDenda($data)
{
  global $connection;
  $idPengembalian = $data["id_pengembalian"];
  $jmlDenda = $data["denda"];
  $jmlDibayar = $data["bayarDenda"];
  $calculate = $jmlDenda - $jmlDibayar;

  $bayarDenda = "UPDATE pengembalian SET denda = $calculate WHERE id_pengembalian = $idPengembalian";
  mysqli_query($connection, $bayarDenda);
  return mysqli_affected_rows($connection);
}

// === FUNCTION KHUSUS MEMBER END ===
