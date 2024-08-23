<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>HealthyBite</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  
  

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
            margin-bottom: 50px;
        }

        .table-container {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
          }

      .table th {
          color: red;
          font-family: Tahoma, sans-serif;
          text-align: center;
      }

      .table td {
          font-family: Tahoma, sans-serif;
          text-align: left;
      }

      .font-bahan {
        font-family: arial, sans-serif;
        font-size: 1.2rem; /* Adjust size as needed */
        color: #333; /* Adjust color as needed */
    }

    .font-harga {
      font-size: 24px;
      font-family: Tahoma, sans-serif;
      font-weight: 700;
      color: var(--accent-color);
      }

    .card-title {
      font-size: 24px;
      font-family: Tahoma, sans-serif;
      font-size: 1.25rem;
      font-weight: bold;

    }


</style>

  </style>


</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="navbar-brand">HealthyBite</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home<br></a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="#chefs">Chefs</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <a class="nav-link px-3" href="tampil-menu.php">Admin</a>
          <li><a href="logout.php">Logout</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
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

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About Us<br></h2>
        <p><span>Learn More</span> <span class="description-title">About Us</span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid mb-4" alt="">
 
          </div>
          <div class="col-lg-5" data-aos="fade-up" data-aos-delay="250">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
              HealthyBite adalah perusahaan inovatif yang berkomitmen untuk menyediakan makanan sehat berkualitas tinggi yang tidak hanya lezat tetapi juga menyehatkan. 
              Berdiri pada tahun 2024, kami telah menjadi pelopor dalam industri makanan sehat, dengan fokus pada keberlanjutan, kualitas, dan kepuasan pelanggan.
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> <span>Snack Sehat: Keripik sayuran, granola bar, dan berbagai camilan rendah kalori yang lezat.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Makanan Siap Saji: Menu sehat dan bergizi yang siap dinikmati, seperti salad segar, smoothie, dan hidangan utama berbasis tanaman.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Minuman Sehat: Jus buah segar, teh herbal, dan minuman detoksifikasi yang menyegarkan dan penuh nutrisi.</span></li>
              </ul>

              <div class="position-relative mt-4">
                <img src="assets/img/about-2.jpg" class="img-fluid" alt="">
                <a href="https://youtu.be/p0CI1nTeCBo?si=2f3xgYyIAtBLE6wM" class="glightbox pulsating-play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="why-us section light-background">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3>Kenapa Harus Memilih HealthyBite?</h3>
              <p>
             Kami hanya menggunakan bahan-bahan yang berkualitas tinggi dan dipilih dengan hati-hati untuk memastikan setiap produk tidak hanya sehat tetapi juga enak.
             Kami berkomitmen untuk transparansi penuh mengenai bahan-bahan dan proses produksi kami, sehingga pelanggan tahu persis apa yang mereka konsumsi.
              </p>
              
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

              <div class="col-xl-4">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-clipboard-data"></i>
                  <h4>Bahan-bahan Premium</h4>
                  <p>Setiap produk kami menggunakan bahan-bahan segar dan organik, tanpa tambahan bahan kimia atau pengawet.</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-gem"></i>
                  <h4>Rasa dan Kualitas</h4>
                  <p>Kami percaya bahwa makanan sehat tidak harus membosankan. Dengan resep kreatif dan teknik memasak yang canggih, kami menyajikan produk yang memanjakan lidah.</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-inboxes"></i>
                  <h4>Kemudahan dan Kenyamanan</h4>
                  <p>Produk kami dirancang untuk memenuhi kebutuhan gaya hidup sibuk Anda tanpa mengorbankan kesehatan.</p>
                </div>
              </div><!-- End Icon Box -->

            </div>
          </div>

        </div>

      </div>

    </section><!-- /Why Us Section -->


    <!-- Menu Section -->
    <section id="menu" class="menu section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
    <h2>Our Menu</h2>
    <p><span>Check Our</span> <span class="description-title">HealthyBite Menu</span></p>

    <?php
    include 'koneksi.php'; // Sertakan koneksi ke database
    ?>

    <div class="row">
        <?php
        // Query untuk mengambil data dari tabel produk
        $result = mysqli_query($koneksi, "SELECT * FROM produk");

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $gambarPath = !empty($row['gambar']) ? 'uploads/' . $row['gambar'] : 'image/no-image.png'; // Default image if none is uploaded
                echo "<div class='col-lg-4 menu-item'>
                            <img src='" . htmlspecialchars($gambarPath, ENT_QUOTES) . "'  class='menu-img img-fluid' alt=''>
                            <div class='card-body'>
                            <h5 class='card-title'>" . htmlspecialchars($row['nama'], ENT_QUOTES) . "</h5>                          
                            <h4 class='font-bahan'>". htmlspecialchars($row['bahan'], ENT_QUOTES) . "</h4>
                            <h4 class='font-harga'>Rp. " . number_format($row['harga'], 0, ',', '.') . "</h4>
                        </div>
                    </div>";
            }
        } else {
            echo "<div class='col-12'><p class='text-center'>Belum ada menu yang ditambahkan.</p></div>";
        }

        // Tutup koneksi
        mysqli_close($koneksi);
        ?>
    </div>
</div>
    </section><!-- /Menu Section -->


    <!-- Chefs Section -->
    <section id="chefs" class="chefs section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>chefs</h2>
        <p><span>Our</span> <span class="description-title">Proffesional Chefs<br></span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/chefs/chefs-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Chef Arnold Purnomo</h4>
                <span>Master Chef</span>
                <p>Vseorang chef eksekutif yang berpengalaman dalam masakan kontemporer dan internasional, dengan latar belakang yang mencakup pengalaman kerja di berbagai restoran bintang Michelin di Eropa. 
                  Chef terkenal dengan teknik memasaknya yang inovatif dan perhatian terhadap detail dalam setiap hidangan.</p>
              </div>
            </div>
          </div><!-- End Chef Team Member -->

          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/chefs/chefs-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Elfira Shenita</h4>
                <span>Patissier</span>
                <p>Qeorang chef pastry dan kuliner kontemporer yang juga dikenal dari acara TV "MasterChef Indonesia".
                   Beliau memiliki keahlian khusus dalam pembuatan pastry dan dessert yang elegan, serta pengalaman dalam menciptakan hidangan inovatif yang menggabungkan teknik modern dengan bahan-bahan lokal.</p>
              </div>
            </div>
          </div><!-- End Chef Team Member -->

          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/chefs/chefs-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Chef Juna Rorimpandey</h4>
                <span>Cook</span>
                <p>Chef eksekutif yang berpengalaman di berbagai restoran internasional di Indonesia. 
                  Dengan latar belakang dalam manajemen dapur dan pengembangan menu, Chef Rudy dikenal karena kemampuannya dalam memadukan masakan internasional dengan bahan lokal, serta manajerial yang efektif dalam mengelola tim dapur.</p>
              </div>
            </div>
          </div><!-- End Chef Team Member -->

        </div>

      </div>

    </section><!-- /Chefs Section -->


    <!-- Gallery Section -->
    <section id="gallery" class="gallery section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Gallery</h2>
        <p><span>Check</span> <span class="description-title">Our Gallery</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "centeredSlides": true,
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 0
                },
                "768": {
                  "slidesPerView": 3,
                  "spaceBetween": 20
                },
                "1200": {
                  "slidesPerView": 5,
                  "spaceBetween": 20
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-1.jpg"><img src="assets/img/gallery/gallery-1.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-2.jpg"><img src="assets/img/gallery/gallery-2.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-3.jpg"><img src="assets/img/gallery/gallery-3.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-4.jpg"><img src="assets/img/gallery/gallery-4.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-5.jpg"><img src="assets/img/gallery/gallery-5.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-6.jpg"><img src="assets/img/gallery/gallery-6.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-7.jpg"><img src="assets/img/gallery/gallery-7.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-8.jpg"><img src="assets/img/gallery/gallery-8.jpg" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Gallery Section -->


  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div class="address">
            <h4>Address</h4>
            <p>Jl. Kartini</p>
            <p>Sumatera Utara, Medan</p>
            <p></p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Contact</h4>
            <p>
              <strong>Phone:</strong> <span>+628 25362 271</span><br>
              <strong>Email:</strong> <span>healthybite.com</span><br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Sat:</strong> <span>11AM - 23PM</span><br>
              <strong>Sunday</strong>: <span>Closed</span>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">HealthyBite by Digitaltalent</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>