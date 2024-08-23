<?php
include 'koneksi.php'; // Sertakan koneksi ke database

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Mengambil ID dari parameter URL dan memastikan itu adalah integer
    
    // Query untuk menghapus data berdasarkan ID
    $query = "DELETE FROM produk WHERE id = ?";
    
    // Siapkan statement
    if ($stmt = mysqli_prepare($koneksi, $query)) {
        // Bind parameter (i untuk integer)
        mysqli_stmt_bind_param($stmt, "i", $id);
        
        // Eksekusi statement
        if (mysqli_stmt_execute($stmt)) {
            // Redirect ke halaman daftar menu setelah berhasil menghapus
            header("Location: tampil-menu.php");
            exit();
        } else {
            echo "Terjadi kesalahan saat menghapus data: " . mysqli_error($koneksi);
        }
        
        // Tutup statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Terjadi kesalahan dalam persiapan query: " . mysqli_error($koneksi);
    }
} else {
    echo "ID tidak ditemukan.";
}

// Tutup koneksi
mysqli_close($koneksi);
?>
