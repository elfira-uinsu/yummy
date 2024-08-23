<?php
session_start();

// Destroy the session
session_destroy();

// Redirect to login page
header("Location: index.php");
exit();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light">

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card border-0 p-4">
            <div class="card-body text-center">
                <h4 class="card-title mb-4">Anda yakin ingin keluar?</h4>
                <form action="logout.php" method="post">
                    <button type="submit" class="btn btn-primary">Logout</button>
                </form>
                <a href="index.php" class="btn btn-secondary mt-3">Kembali</a>
            </div>
        </div>
    </div>

</body>
</html>
