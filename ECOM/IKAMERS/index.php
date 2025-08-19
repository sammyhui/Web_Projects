<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MamPus - Marketplace Kampus</title>

    <!-- Google Font: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <!-- Font Awesome (CDN) -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
    <!-- Tambahkan ini di dalam tag <head> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
    
<body>

    <!-- HEADER -->
    <header class="header">
        <div class="logo">
            <img src="assets/event1.png" alt="MamPus Logo">
            <div class="title">
                <h2 class="brand-name">MamPus</h2>
                <span class="brand-tagline">MARKETPLACE KAMPUS</span>
            </div>
        </div>

        <div class="search-bar">
            <p>Search</p>
            <form action="#">
                <input type="text" placeholder="Cari di sini" class="search-input">
            </form>
        </div>

        <div class="menu">
            <a href="#"><i class="fas fa-shopping-cart"></i> Keranjang</a>
            <a href="#"><i class="fas fa-user"></i> Akun</a>
            <a href="#"><i class="fas fa-bars"></i> Menu</a>
        </div>
        
    </header>

    <!-- HERO -->
    <section class="hero">
    <div class="hero-bg"></div>
    <div class="hero-text">
        <p class="greeting">HALO CIVITAS AKADEMIK!</p>
        <h1>Selamat Datang</h1>
        <p class="desc">di website komunitas kampus, ayo join dan tunjukkan bisnismu!</p>
    </div>

    <!-- EVENTS ADA DI SINI -->
    <div class="event-section">
        <h2>Events</h2>
        <div class="event-container">
        <div class="event-card">
            <img src="assets/event1.png" alt="Event 1">
            <p>Debat Senat</p>
            <a href="event-list.php" class="btn-lihat">Lihat</a>
        </div>
        <div class="event-card">
            <img src="assets/event2.png" alt="Event 2">
            <p>Studi Banding</p>
            <a href="event-list.php" class="btn-lihat">Lihat</a>
        </div>
        <div class="event-card">
            <img src="assets/event3.png" alt="Event 3">
            <p>Info</p>
            <a href="event-list.php" class="btn-lihat">Lihat</a>
        </div>
        <div class="event-card">
            <img src="assets/event4.png" alt="Event 4">
            <p>Info</p>
            <a href="event-list.php" class="btn-lihat">Lihat</a>
        </div>
        <div class="event-card">
            <img src="assets/event5.png" alt="Event 5">
            <p>Info</p>
            <a href="event-list.php" class="btn-lihat">Lihat</a>
        </div>
        <div class="event-card">
            <img src="assets/event6.png" alt="Event 6">
            <p>Info</p>
            <a href="event-list.php" class="btn-lihat">Lihat</a>
        </div>
        </div>

    </div>
    </section>
    <!-- SOSIAL MEDIA -->
    <h3 class="sosmed-title">Sosial Media Kami</h3>
    <div class="sosmed">
    <div class="sosmed-item">
        <i class="fab fa-instagram"></i>
        <span>@mam.pus</span>
    </div>
    <div class="sosmed-item">
        <i class="fab fa-tiktok"></i>
        <span>@mam.pus</span>
    </div>
    <div class="sosmed-item">
        <i class="fab fa-facebook"></i>
        <span>MamPus Kampus</span>
    </div>
    </div>


    <!-- FLOATING MENU KANAN ATAS -->
    <div class="menu-kanan-atas">
    <a href="#" class="fitur-float">
        <i class="fas fa-store"></i>
        <span>Belanja</span>
    </a>
    <a href="#" class="fitur-float">
        <i class="fas fa-file-alt"></i>
        <span>Jasa</span>
    </a>
    <a href="#" class="fitur-float">
        <i class="fas fa-box-open"></i>
        <span>Sewa</span>
    </a>
    <a href="#" class="fitur-float">
        <i class="fas fa-calendar-alt"></i>
        <span>Events</span>
    </a>
    </div>

</body>
</html>
