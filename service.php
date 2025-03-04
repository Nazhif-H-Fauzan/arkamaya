<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Layanan Kami - Nama Perusahaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <style>
        /* Navbar */
        header {
            background-color: #ffffff;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        .logo {
            max-height: 40px;
        }

        .navbar-nav .nav-link {
            font-weight: 500;
            color: #333;
            transition: 0.3s;
        }

        .navbar-nav .nav-link:hover {
            color: #F4511E;
        }

        .contact-btn {
            background-color: #F4511E;
            color: white;
            border-radius: 30px;
            padding: 8px 20px;
            font-weight: bold;
            text-decoration: none;
        }

        .contact-btn:hover {
            background-color: #D84315;
            color: white;
        }

        /* Warna utama perusahaan */
        .btn-primary {
            background-color: #D6001C;
            border-color: #D6001C;
        }

        .btn-primary:hover {
            background-color: #A50016;
            border-color: #A50016;
        }

        /* Hero Section */
        .hero-section {
            position: relative;
            background-image: url('https://arkamaya.co.id/wp-content/uploads/2025/02/breadcumb-ark-about-us-bg1920x450v2.png');
            background-size: cover;
            background-position: center;
            padding: 80px 0;
            text-align: center;
            color: white;
        }

        .hero-section::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(5px);
            z-index: 1;
        }

        .hero-section h1, .hero-section p {
            position: relative;
            z-index: 2;
        }

        /* Services Section */
        .services-section {
            background-color: #FFF0F0;
            padding: 60px 0;
        }

        .service-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: 0.3s;
        }

        .service-card:hover {
            transform: translateY(-5px);
        }

        /* Footer */
        .footer {
            background-color: #D6001C;
            color: white;
            padding: 20px 0;
        }
    </style>
</head>
<body>

<!-- Header -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <img src="assets/logo.png" alt="Logo Perusahaan" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Case Study</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Insight</a></li>
                </ul>
            </div>

           <!-- Tombol Contact & Ikon Grid -->
            <div class="d-flex align-items-center">
                <a href="#" class="btn contact-btn">Contact Us</a>
                <button class="btn icon-btn ms-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">>
                    <i href="offcanvasRight" class="bi bi-grid-3x3-gap"></i>
                </button>
            </div>
        </div>
    </nav>
</header>
    <!-- Offcanvas -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">About Arkamaya</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <p>We are a professional software house company based in Bandung, Indonesia with over 13 years in the IT industry.</p>
            <h6>Get In Touch</h6>
            <ul class="list-unstyled">
                <li>Ruko Nuansa Indah S7-S8 Buah Batu, Jl. Cijawura, Kujangsari, Kec. Bandung Kidul, Kota Bandung, Jawa Barat 40287</li>
                <li>info@arkamaya.co.id</li>
                <li>0878-4662-1000</li>
            </ul>
        </div>
    </div>
</header>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <h1 class="fw-bold">Layanan Kami</h1>
        <p>Kami menyediakan solusi perangkat lunak yang inovatif untuk bisnis Anda.</p>
    </div>
</section>

<!-- Services Section -->
<section class="services-section">
    <div class="container text-center">
        <h2 class="fw-bold text-danger">Apa yang Kami Tawarkan?</h2>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="service-card">
                    <h4>Pengembangan Web</h4>
                    <p>Kami membangun website profesional dan responsif untuk bisnis Anda.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-card">
                    <h4>Aplikasi Mobile</h4>
                    <p>Membantu Anda menciptakan aplikasi mobile yang inovatif.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-card">
                    <h4>Strategi Digital</h4>
                    <p>Meningkatkan visibilitas bisnis dengan strategi digital yang efektif.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer text-center">
    <div class="container">
        <p>&copy; 2025 Nama Perusahaan. Semua Hak Dilindungi.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
