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
        <h1 class="mb-4">Tambah User Baru</h1> <!-- Title -->
        <form action="proses-tambah-user.php" method="POST">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input class="form-control" id="nama" name="nama" required></input>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="text" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3">
                <label for="wa" class="form-label">Kontak</label>
                <input type="text" class="form-control" id="wa" name="wa" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="user.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>

</html>
