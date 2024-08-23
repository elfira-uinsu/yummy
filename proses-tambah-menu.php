<?php
// Koneksi ke database
include 'koneksi.php'; // Pastikan file koneksi.php ada dan berisi kode koneksi ke database

// Ambil data dari formulir
$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$bahan = $_POST['bahan'];

// Validasi input
if (empty($nama) || empty($deskripsi) || empty($harga) || empty($bahan) || empty($_FILES['gambar']['name'])) {
    echo "Semua field harus diisi.";
    exit;
}

// Escape data untuk mencegah SQL Injection
$nama = mysqli_real_escape_string($koneksi, $nama);
$deskripsi = mysqli_real_escape_string($koneksi, $deskripsi);
$harga = mysqli_real_escape_string($koneksi, $harga);
$bahan = mysqli_real_escape_string($koneksi, $bahan);

// Proses upload gambar
$gambar = $_FILES['gambar']['name'];
$gambar_tmp = $_FILES['gambar']['tmp_name'];
$gambar_size = $_FILES['gambar']['size'];
$gambar_error = $_FILES['gambar']['error'];
$gambar_ext = strtolower(pathinfo($gambar, PATHINFO_EXTENSION));

// Validasi ekstensi file gambar
$allowed_exts = ['jpg', 'jpeg', 'png', 'gif'];
if (!in_array($gambar_ext, $allowed_exts)) {
    echo "Ekstensi gambar tidak diperbolehkan.";
    exit;
}

// Validasi ukuran file gambar (maksimum 2MB)
if ($gambar_size > 2 * 1024 * 1024) {
    echo "Ukuran gambar terlalu besar. Maksimal 2MB.";
    exit;
}

// Tentukan path dan nama file gambar
$new_gambar_name = uniqid('', true) . '.' . $gambar_ext;
$gambar_dest = 'uploads/' . $new_gambar_name;

// Pindahkan gambar ke folder uploads
if (!move_uploaded_file($gambar_tmp, $gambar_dest)) {
    echo "Gagal mengupload gambar.";
    exit;
}

// Escape nama file gambar untuk mencegah SQL Injection
$new_gambar_name = mysqli_real_escape_string($koneksi, $new_gambar_name);

// Query untuk menyimpan data
$sql = "INSERT INTO produk (nama, deskripsi, harga, bahan, gambar) VALUES ('$nama', '$deskripsi', '$harga', '$bahan', '$new_gambar_name')";

// Eksekusi query
if (mysqli_query($koneksi, $sql)) {
    echo "Data berhasil disimpan.";
} else {
    echo "Terjadi kesalahan: " . mysqli_error($koneksi);
}

// Tutup koneksi
mysqli_close($koneksi);

// Redirect kembali ke halaman menu setelah 2 detik
header("Refresh:2; url=tampil-menu.php");
exit;
?>
