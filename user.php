<?php
include 'koneksi.php'; // Sertakan koneksi ke database
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Menu - HealtyBite</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa; /* Light background color */
        }

        .container {
            margin-top: 20px;
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
        }

        .card {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-scroll shadow-0" style="background-color: #ffede7;">
        <div class="container">
            <a class="navbar-brand" href="menu.php">HealthyBite</a>
            <button class="navbar-toggler ps-0" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
                aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="d-flex justify-content-start align-items-center">
                    <i class="fas fa-bars"></i>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarExample01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link px-3" href="tampil-menu.php">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="user.php">Pengguna</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="logout.php">Logout</a>
                    </li>
                </ul>
                <ul class="navbar-nav flex-row">
                    <li class="nav-item">
                        <a class="nav-link pe-3" href="#!">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="#!">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ps-3" href="#!">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1 class="mb-4">Daftar Menu</h1>
        <a href="form-user.php" class="btn btn-primary mb-3">Tambah User Baru</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Contact</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Query untuk mengambil data dari tabel user
                $result = mysqli_query($koneksi, "SELECT * FROM user");

                if (mysqli_num_rows($result) > 0) {
                    $no = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                                <td>" . $no++ . "</td>
                                <td>" . htmlspecialchars($row['nama'], ENT_QUOTES) . "</td>
                                <td>" . htmlspecialchars($row['username'], ENT_QUOTES) . "</td>
                                <td>" . htmlspecialchars($row['password'], ENT_QUOTES) . "</td>   
                                <td>" . htmlspecialchars($row['wa'], ENT_QUOTES) . "</td>                            
                                <td>
                                    <a href='delete-user.php?id=" . $row['id'] . "' onclick='return confirm(\"Yakin ingin menghapus data ini?\");' class='btn btn-danger btn-sm'>Hapus</a>
                                </td>
                            </tr>";
                    }
                } else {
                    echo "<tr><td colspan='6' class='text-center'>Belum ada menu yang ditambahkan.</td></tr>";
                }

                // Tutup koneksi
                mysqli_close($koneksi);
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>

        </table>
    </div>
</body>
</html>
