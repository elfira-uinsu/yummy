<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealtyBite Admin</title>
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .navbar-brand {
            letter-spacing: 3px;
            color: #c24244;
        }

        .navbar-brand:hover {
            color: #c24244;
        }

        .navbar-scroll .nav-link,
        .navbar-scroll .fa-bars {
            color: #7f4722;
        }

        .navbar-scrolled .nav-link,
        .navbar-scrolled .fa-bars {
            color: #7f4722;
        }

        .navbar-scrolled {
            background-color: #ffede7;
        }

        /* Add margin-top to section */
        .section {
            margin-top: 80px; /* Adjust this value if needed */
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top navbar-scroll shadow-0" style="background-color: #ffede7;">
    <div class="container">
        <a class="navbar-brand" href="index.php">HealtyBite</a>
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

        </div>
    </div>
</nav>

<section id="hero" class="hero section light-background">
    <div class="container">
        <div class="row gy-4 justify-content-center justify-content-lg-between">
            <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">Enjoy Your Healthy<br>Delicious Food</h1>
                <p data-aos="fade-up" data-aos-delay="100">“Makanan sehat bukanlah tentang pembatasan; itu tentang memberikan tubuhmu bahan bakar yang tepat untuk menjalani hidup yang lebih baik.”</p>
            </div>
            <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>
</section><!-- /Hero Section -->
</body>
</html>

