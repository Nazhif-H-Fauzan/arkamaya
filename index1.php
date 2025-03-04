<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arkamaya Clone</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fafafa;
            color: #333;
        }
        .navbar-brand img {
            height: 40px;
        .hero {
            padding: 120px 0;
            position: relative;
            text-align: left;
        .btn-orange {
            background-color: #ff5722;
            color: #fff;
            border-radius: 50px;
            padding: 10px 20px;
            font-size: 18px;
        .btn-orange:hover {
            background-color: #e64a19;
        .hero-badge {
            background: #ffebee;
            color: #d32f2f;
            font-weight: bold;
            padding: 8px 15px;
            border-radius: 20px;
            display: inline-block;
        .hero-images img {
            width: 100%;
            border-radius: 10px;
        .client-box {
            display: flex;
            align-items: center;
            margin-top: 20px;
        .client-thumb-group {
            gap: 5px;
        .client-thumb-group .thumb img {
            width: 40px;
            border-radius: 50%;
        .client-box h2 {
            font-size: 20px;
            margin-left: 15px;
        footer {
            background: #252525;
            color: white;
            padding: 20px 0;
        /* Tombol video popup */
        .popup-video {
            color: #d3d3d3;
            text-decoration: none;
            transition: color 0.3s ease;
        /* Transisi popup (Magnific Popup) */
        .mfp-fade.mfp-bg {
            opacity: 0;
            transition: all 0.3s ease-out;
        .mfp-fade.mfp-bg.mfp-ready {
            opacity: 0.8; /* Transparansi background saat popup muncul */
        .mfp-fade.mfp-bg.mfp-removing {
        .mfp-fade.mfp-wrap .mfp-content {
            transform: scale(0.95);
        .mfp-fade.mfp-wrap.mfp-ready .mfp-content {
            opacity: 1;
            transform: scale(1);
        .mfp-fade.mfp-wrap.mfp-removing .mfp-content {
        .donut-chart-container {
            width: 300px;
            height: 300px;
        .department-images {
            justify-content: space-around;
        .department-images .card {
            width: 120px;
            text-align: center;
        .department-images img {
            height: 80px;
            object-fit: cover;
    </style>
</head>
<body>
    <!-- Header -->
    <header class="bg-white shadow-sm py-3">
        <nav class="container navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">
                <img src="assets/logo.png" alt="Arkamaya Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#tentang">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#layanan">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portofolio">Case Study</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kontak">Insight</a></li>
                </ul>
                <a href="#kontak" class="btn btn-orange ms-3">Contact Us</a>
            </div>
            <!-- Tombol Offcanvas -->
            <button class="btn btn-outline-secondary ms-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                About
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
    <!-- Hero Section -->
    <section class="hero container text-center text-md-start">
        <div class="row align-items-center">
            <div class="col-md-6">
                <span class="hero-badge">#GoDigital, Grow Beyond With Arkamaya.</span>
                <h1 class="fw-bold mt-3">Code.</h1>
                <h1 class="fw-bold mt-3">Innovate. Transform</h1>
                <p>We have a vision to be an IT Company that creates value for customers, fosters team growth, and contributes to society through innovative solutions.</p>
                <div class="media-body">
                    <a href="#kontak" class="btn btn-orange btn-lg mt-2">Tell Us About Your Vision</a>
                    <a href="https://www.youtube.com/watch?v=Lt0dHFt8nOg" class="popup-video">
                    <img src="assets/play.png" alt="Work hard, Play harder" style="max-width:10%; height:auto;">
                    Work hard, Play harder
                    </a>
                  </a>
                </div>
                <div class="client-box">
                    <div class="client-thumb-group">
                        <div class="thumb"><img src="assets/c1.png" alt="Client 1"></div>
                        <div class="thumb"><img src="assets/c2.png" alt="Client 2"></div>
                        <div class="thumb"><img src="assets/c3.png" alt="Client 3"></div>
                        <div class="thumb"><img src="assets/c4.png" alt="Client 4"></div>
                        <div class="thumb"><img src="assets/plus.png" alt="All Client"></div>
                    </div>
                    <h2 class="ms-3">13+ Years Experience<br>70+ Professionals<br>500+ Projects</h2>
            <div class="col-md-6 hero-images">
                <img src="assets/group-photo.png" alt="Company Event">
    </section>
    <!-- Section Brand Logos -->
        <section class="my-5">
      <div class="container">
        <!-- Owl Carousel wrapper -->
        <div class="owl-carousel owl-theme">
          <!-- Setiap logo di dalam .item -->
          <div class="item">
            <img src="assets/p1.png" alt="1" class="img-fluid" style="max-height: 50px;">
          </div>
            <img src="assets/p2.png" alt="2" class="img-fluid" style="max-height: 50px;">
            <img src="assets/p3.png" alt="3" class="img-fluid" style="max-height: 50px;">
            <img src="assets/p4.png" alt="4" class="img-fluid" style="max-height: 50px;">
            <img src="assets/p5.png" alt="5" class="img-fluid" style="max-height: 50px;">
            <img src="assets/p6.png" alt="6" class="img-fluid" style="max-height: 50px;">
            <img src="assets/p7.png" alt="7" class="img-fluid" style="max-height: 50px;">
      </div>
    <!-- Section What We Do -->
    <section class="py-5 text-center">
        <div class="container">
            <span class="hero-badge">What We Do</span>
            <h1 class="fw-bold">Transforming</h1> 
            <h1 class="fw-bold">Businesses, One Digital</h1> 
            <h1 class="fw-bold">Leap At A Time.</h1>
            <p>
                We manage your IT, so you can manage your business. 
                Take charge of your business continuity with innovative IT solutions.
            </p>
    <!-- Section Services -->
<section class="container py-5">
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
    <!-- Card 1 -->
    <div class="col">
      <div class="p-4 bg-white rounded shadow-sm h-100">
        <h5 class="fw-bold">Custom Software</h5>
        <p>Developing tailored software solutions that align with your business needs, ensuring a seamless user experience and optimized performance.</p>
        <a href="#" class="btn btn-orange">Read More</a>
    <!-- Card 2 -->
        <h5 class="fw-bold">Managed Services</h5>
        <p>Free up your internal resources to focus on your core business by outsourcing day to day support services, management, and monitoring of your IT.</p>
    <!-- Card 3 -->
        <h5 class="fw-bold">IT Outsourcing</h5>
        <p>Enhancing efficiency and productivity by providing skilled IT professionals to handle development, support, and operations—so you can focus on your core business.</p>
    <!-- Card 4 -->
        <h5 class="fw-bold">Website Development</h5>
        <p>Our web development services can help you establish an impactful online presence with a user-friendly website and a robust digital platform.</p>
  </div>
    <div class="text-center">
      <a href="#kontak" class="btn btn-orange btn-lg mt-2">
        Explorer Our Service
      </a>
</section>
<!-- Section Brand Logos -->
<section class="my-5">
  <div class="container">
    <!-- Owl Carousel wrapper -->
    <div class="owl-carousel owl-theme">
      <!-- Setiap logo di dalam .item -->
      <div class="item">
        <img src="assets/p1.png" alt="1" class="img-fluid" style="max-height: 50px;">
        <img src="assets/p2.png" alt="2" class="img-fluid" style="max-height: 50px;">
        <img src="assets/p3.png" alt="3" class="img-fluid" style="max-height: 50px;">
        <img src="assets/p4.png" alt="4" class="img-fluid" style="max-height: 50px;">
        <img src="assets/p5.png" alt="5" class="img-fluid" style="max-height: 50px;">
        <img src="assets/p6.png" alt="6" class="img-fluid" style="max-height: 50px;">
        <img src="assets/p7.png" alt="7" class="img-fluid" style="max-height: 50px;">
<!-- Section Simplifying IT For A Complex World -->
<section class="py-5">
    <div class="row align-items-center">
      <!-- Bagian Teks -->
      <div class="col-md-6 text-center text-md-start">
        <h2 class="fw-bold">Simplifying IT For A Complex World.</h2>
        <p>
          We craft custom software and IT solutions that drive efficiency, scalability, and innovation. 
          Whether you need a SaaS platform, enterprise software, or digital transformation services, 
          our expert team ensures seamless integration and higher ROI.
        </p>
</div>
<div class="container mt-5">
<div class="row">
<div class="col-md-6">
<div class="card p-4 shadow-sm">
<h5 class="mb-3">Departments</h5>
<canvas id="donutChart" style="max-height: 250px;">
</canvas>
<div class="card p-3 mt-3 text-center shadow-sm">
<h6 class="text-muted">Current Balance</h6>
<h3 class="fw-bold">$85,250</h3>
<p class="text-success fw-bold">&#9650; 2.8%</p>
<span class="hero-badge"> Solving IT Challenges Across Industries</span>
<h2 class="fw-bold mt-3">Empowering Businesses With IT</h2>
<p>Arkamaya has been empowering businesses for over 13 years, providing custom IT solutions, digital transformation, and automation tailored to various industries.</p>
<div class="mt-4">
<h5>
<span class="badge bg-warning me-2">&#128736;</span> Manufacturing & Automotive</h5>
<p>Optimizing production & supply chain with smart IT solutions.</p>
<span class="badge bg-primary me-2">&#128202;</span> Other Industry</h5>
<p>FMCG & Consumer Goods, Finance & Professional Services, Retail & E-commerce, Hospitality & Tourism, Government & Public Services, Education & Non-Profit, Energy & Mining, Textile & Apparel, Technology & IT Services</p>
<section class="bg-primary text-white py-5 mt-5">
<div class="container">
<div class="row align-items-center">
<span class="badge bg-light text-primary mb-3">HRIS App, Ready To Elevate Your Business.</span>
<h1 class="fw-bold">Register For Our HRIS App And Start Your Free Trial Today.</h1>
<a href="#" class="btn btn-dark btn-lg me-3">&#10132; Register</a>
<a href="#" class="btn btn-outline-light btn-lg">&#128270; Find Out More</a>
<div class="col-md-6 text-center">
<img src="assets/personal.png" alt="HRIS Illustration" class="img-fluid">
        
<!-- Footer -->
<footer class="text-center">
<p>&copy; 2025 Arkamaya Clone. All Rights Reserved.</p>
</footer>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
</script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js">
<!-- Magnific Popup JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js">
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.getElementById("navbar");
    const sections = document.querySelectorAll("section");
    const navLinks = document.querySelectorAll(".nav-link");
    // Intersection Observer untuk menyorot link aktif
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            navLinks.forEach((link) => {
              link.classList.remove("active");
              if (link.getAttribute("href").substring(1) === entry.target.id) {
                link.classList.add("active");
              }
            });
          }
        });
      },
      { threshold: 0.5 } // Aktif jika 50% bagian terlihat
    );
    sections.forEach((section) => {
      observer.observe(section);
    });
    // Efek bayangan saat scroll ke bawah
    window.addEventListener("scroll", function () {
      if (window.scrollY > 50) {
        navbar.style.boxShadow = "0 4px 6px rgba(0,0,0,0.1)";
      } else {
        navbar.style.boxShadow = "none";
      }
  });
    $(document).ready(function() {
      $('.popup-video').magnificPopup({
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 300,
        preloader: false,
        fixedContentPos: false
      });
  </script>
<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    $(document).ready(function(){
      $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
          0: { items: 2 },
          768: { items: 4 },
          1200: { items: 5 }
        const ctx = document.getElementById('donutChart').getContext('2d');
        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Dentist', 'Cardiology', 'Ear Nose & Throat', 'Dermatologist'],
                datasets: [{
                    data: [10, 25, 20, 50],
                    backgroundColor: ['#FFD700', '#8A2BE2', '#FF69B4', '#00FA9A'],
                }]
            },
            options: {
                responsive: true,
                cutout: '70%',
            }
    </script>
</body>
</html>
      <!-- Bagian Gambar -->
      <div class="col-md-6 text-center mt-4 mt-md-0">
        <!-- Ganti src dengan gambar dashboard/ilustrasi Anda -->
        <img src="assets/graf1.png" alt="Dashboard Illustration" class="img-fluid">
<!-- Section What We Do -->
<section class="py-5 text-center">
    <span class="hero-badge">What We Do</span>
    <h1 class="fw-bold">Transforming</h1> 
    <h1 class="fw-bold">Businesses, One Digital</h1> 
    <h1 class="fw-bold">Leap At A Time.</h1>
    <p>
      We manage your IT, so you can manage your business. 
      Take charge of your business continuity with innovative IT solutions.
    </p>
    <!-- Footer -->
    <footer class="text-center">
        <p>&copy; 2025 Arkamaya Clone. All Rights Reserved.</p>
    </footer>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Magnific Popup JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- Inisialisasi Popup Video -->
    <script>
        mainClass: 'mfp-fade', // Kelas untuk efek fade
        removalDelay: 300,     // Durasi (ms) transisi saat popup ditutup
    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
      $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
          loop: true,
          margin: 10,
          autoplay: true,
          autoplayTimeout: 2000,
          autoplayHoverPause: true,
          responsiveClass: true,
          responsive: {
            0: {
              items: 2
            768: {
              items: 4
            1200: {
              items: 5
