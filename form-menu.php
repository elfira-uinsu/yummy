<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Inputan Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #e9f7fc; /* Light blue background */
        }

        .container {
            background-color: #ffffff; /* White background for the form */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-check-label {
            padding-left: 1.5em;
        }

        .btn-success,
        .btn-primary,
        .btn-secondary {
            margin-right: 10px;
        }

        .btn-primary {
            background-color: #007bff; /* Custom blue color */
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }

        .btn-success {
            background-color: #28a745; /* Green color */
            border: none;
        }

        .btn-success:hover {
            background-color: #218838; /* Darker green on hover */
        }

        .btn-secondary {
            background-color: #6c757d; /* Gray color */
            border: none;
        }

        .btn-secondary:hover {
            background-color: #5a6268; /* Darker gray on hover */
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="mb-4">Tambah Menu Baru</h1> <!-- Title -->
        <form action="proses-tambah-menu.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" min="0" step="0.01" required>
            </div>
            <div class="mb-3">
                <label for="bahan" class="form-label">Bahan</label>
                <input type="text" class="form-control" id="bahan" name="bahan" required>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="menu.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>

</html>
