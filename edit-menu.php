<?php
include 'koneksi.php'; // Sertakan koneksi ke database

// Ambil ID dari URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Ambil data menu berdasarkan ID
if ($id > 0) {
    $result = mysqli_query($koneksi, "SELECT * FROM produk WHERE id = $id");
    $data = mysqli_fetch_assoc($result);
}

// Jika data tidak ditemukan, redirect atau tampilkan error
if (!$data) {
    echo "Menu tidak ditemukan.";
    exit;
}

// Proses form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $deskripsi = mysqli_real_escape_string($koneksi, $_POST['deskripsi']);
    $harga = mysqli_real_escape_string($koneksi, $_POST['harga']);
    $bahan = mysqli_real_escape_string($koneksi, $_POST['bahan']);

    // Jika ada gambar yang diupload
    if (!empty($_FILES['gambar']['name'])) {
        $gambar = $_FILES['gambar']['name'];
        $target = 'uploads/' . basename($gambar);
        move_uploaded_file($_FILES['gambar']['tmp_name'], $target);
        $gambarQuery = ", gambar='$gambar'";
    } else {
        $gambarQuery = "";
    }

    // Update data menu
    $query = "UPDATE produk SET nama='$nama', deskripsi='$deskripsi', harga='$harga', bahan='$bahan' $gambarQuery WHERE id=$id";
    mysqli_query($koneksi, $query);

    // Redirect setelah update
    header('Location: tampil-menu.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Menu - HealtyBite</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Edit Menu</h1>
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo htmlspecialchars($data['nama'], ENT_QUOTES); ?>" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required><?php echo htmlspecialchars($data['deskripsi'], ENT_QUOTES); ?></textarea>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" value="<?php echo htmlspecialchars($data['harga'], ENT_QUOTES); ?>" required>
            </div>
            <div class="mb-3">
                <label for="bahan" class="form-label">Bahan</label>
                <input type="text" class="form-control" id="bahan" name="bahan" value="<?php echo htmlspecialchars($data['bahan'], ENT_QUOTES); ?>" required>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar">
                <small class="form-text text-muted">Biarkan kosong jika tidak ingin mengubah gambar.</small>
            </div>
            <button type="submit" class="btn btn-primary">Update Menu</button>
        </form>
    </div>
</body>

</html>
