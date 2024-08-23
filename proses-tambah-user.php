<?php
// Koneksi ke database
include 'koneksi.php'; // Pastikan file koneksi.php ada dan berisi kode koneksi ke database

// Ambil data dari formulir
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$wa = $_POST['wa'];

// Validasi input
if (empty($nama) || empty($username) || empty($password) || empty($wa) ) {
    echo "Semua field harus diisi.";
    exit;
}

// Escape data untuk mencegah SQL Injection
$nama = mysqli_real_escape_string($koneksi, $nama);
$username = mysqli_real_escape_string($koneksi, $username);
$password = mysqli_real_escape_string($koneksi, $password);
$wa = mysqli_real_escape_string($koneksi, $wa);

// Query untuk menyimpan data
$sql = "INSERT INTO user (nama, username, password, wa) VALUES ('$nama', '$username', '$password', '$wa')";

// Eksekusi query
if (mysqli_query($koneksi, $sql)) {
    echo "Data berhasil disimpan.";
} else {
    echo "Terjadi kesalahan: " . mysqli_error($koneksi);
}

// Tutup koneksi
mysqli_close($koneksi);

// Redirect kembali ke halaman menu setelah 2 detik
header("Refresh:2; url=user.php");
exit;
?>
