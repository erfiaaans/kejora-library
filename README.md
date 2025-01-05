# Sistem Manajemen Perpustakaan Kejora

Kejora Library adalah aplikasi berbasis PHP native yang dirancang untuk mengelola operasi perpustakaan secara efektif. Proyek ini mencakup fitur untuk mengelola buku, anggota, proses peminjaman, dan pengembalian, yang semuanya terintegrasi dengan database MySQL.

## Fitur

- Menambah, mengedit, dan menghapus data buku.
- Mengelola data anggota perpustakaan.
- Melakukan proses peminjaman dan pengembalian buku.
- Antarmuka yang ramah pengguna untuk administrator.
- Membuat laporan peminjaman dan pengembalian dalam bentuk PDF

---

## Instalasi

### Prasyarat

- PHP (versi 7.4 atau lebih baru)
- Database MySQL
- Lingkungan server lokal (contoh: Laragon, XAMPP, WAMP, atau MAMP)

### Langkah-langkah

1. Klon repositori ke direktori server lokal Anda:

   ```bash
   git clone https://github.com/erfiaaans/kejora-library
   ```

2. Impor database:

   - Temukan file `kejora_library.sql` di folder `database`.
   - Buka alat manajemen MySQL Anda (contoh: phpMyAdmin).
   - Buat database baru, misalnya `kejora_library`.
   - Impor file SQL ke dalam database.

3. Perbarui konfigurasi database:

   - Buka file `config/connect.php` & `config/config.php` di folder `config`.
   - Pastikan baris-baris berikut sesuai dengan pengaturan Anda:
     ```php
     $host = "127.0.0.1";
     $username = "root";
     $password = "";
     $database_name = "kejora_library";
     ```

4. Jalankan server lokal Anda dan buka direktori proyek di browser:

   ```
   http://localhost/kejora-library/
   ```

---

## Penggunaan

1. Masuk menggunakan kredensial administrator default:
   - **Username:** admin
   - **Password:** 1234
2. Gunakan dashboard untuk:
   - Menambah, mengedit, atau menghapus buku dan anggota.
   - Memproses peminjaman dan pengembalian buku.
3. Keluar setelah menyelesaikan tugas untuk menjaga keamanan aplikasi.

---

## Struktur Proyek

```
kejora-library/
|   index.php
|   kejora_library.sql
|   logout.php
|   README.md
|   register.php
|
+---admin
|       admin.php
|       buku.php
|       bukuDelete.php
|       bukuTambah.php
|       bukuUpdate.php
|       denda.php
|       navbar.php
|       peminjamanBuku.php
|       pengembalianBuku.php
|       pengembalianDelete.php
|       userDelete.php
|       users.php
|
+---assets
|   |   fontawesome-all-v5.15.4.css
|   |   script.js
|   |
|   +---bootstrap
|   |       bootstrap.bundle.min.js
|   |       bootstrap.min.css
|   |
|   +---buku #img buku
|   \---img
|       |   admin.png
|       |   fontkejora.png
|       |   hero-background-2.jpg
|       |   hero-background.jpg
|       |   icon.png
|       |   LOGIN.png
|       |   logoPerpus.png
|       |   user.png
|       |
|       \---card
|               bukuAdmin.png
|               daftarBuku.png
|               Denda.png
|               member.png
|               Peminjaman.png
|               Pengembalian.png
|               pengembalianAdmin.png
|
+---config
|       config.php
|       connect.php
|
\---user
        buku.php
        bukuDetail.php
        denda.php
        dendaBayar.php
        navbar.php
        peminjaman.php
        pengembalian.php
        pengembalianBuku.php
        pinjamBuku.php
        user.php
```