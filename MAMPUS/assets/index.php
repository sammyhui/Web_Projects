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
            <img src="assets/logo.png" alt="MamPus Logo">
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


<!-- EVENTS ADA DI SINI -->
<section class="hero">
  <div class="hero-bg"></div>
  <div class="hero-text">
      <p class="greeting">HALO CIVITAS AKADEMIK!</p>
      <h1>Selamat Datang</h1>
      <p class="desc">di website komunitas kampus, ayo join dan tunjukkan bisnismu!</p>
  </div>

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
      <!-- ... event-card lama ... -->
    </div>
 <<section class="hero" style="display: flex; gap: 1rem; padding: 1rem;">
  
  <!-- Kiri: Event Hari Ini (setengah lebar) -->
  <div style="flex: 1; max-width: 50%; background: #e0f2fe; padding: 1rem; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
    <div style="background: #facc15; display: inline-block; padding: 4px 12px; border-radius: 4px; font-weight: 800; font-size: 12px; text-transform: uppercase; margin-bottom: 12px;">
      EVENT HARI INI
    </div>
    <div style="border-radius: 6px; overflow: hidden; box-shadow: 0 1px 6px rgba(0,0,0,0.1); margin-bottom: 1rem;">
      <img src="assets/event.png" alt="Live Event STIKOM Yos Sudarso" style="width: 100%; height: auto; display: block;" />
    </div>
    <div style="font-size: 12px; max-height: 300px; overflow-y: auto; background: white; padding: 12px; border-radius: 6px; border: 1px solid #7dd3fc; color: #0369a1; line-height: 1.4; font-family: 'Inter', sans-serif;">
      <p><strong>JUDUL:</strong> WISUDA SARJANA DAN AHLI MADYA STIKOM YOS SUDARSO 21 Oktober 2024</p>
      <p><strong>Details:</strong></p>
      <ul style="list-style-type: disc; padding-left: 1rem; margin-bottom: 12px;">
        <li>Hari, tanggal: Senin, 21 Oktober 2024</li>
        <li>Tempat: Pusat Heritage Hotel Purwokerto</li>
        <li>Acara live streaming oleh kanal Youtube resmi STIKOM Yos Sudarso</li>
      </ul>
      <p><strong>Info kontak dan Sosial Media resmi:</strong></p>
      <ul style="list-style-type: disc; padding-left: 1rem;">
        <li>Youtube: STIKOM Yos Sudarso</li>
        <li>Instagram: @stikomyossudarso</li>
      </ul>
      <p style="margin-top: 12px; font-size: 11px; color: #075985; font-weight: 600;">
        #Wisuda #STIKOMYosSudarso #Purwokerto #OnlineWisuda #LiveStreaming #EventKampus
      </p>
    </div>
  </div>

  <!-- Bagian kanan (foto + social media) -->
<div style="display: flex; gap: 2rem;">

  <!-- Kiri: Event Hari Ini -->
  <<section style="flex: 1; max-width: 60%; background:rgb(105, 162, 197); padding: 1rem; border-radius: 8px; box-shadow: 0 0 8px rgba(0,0,0,0.1);">
  <!-- Isi event hari ini -->
  <h3 style="background-color: #facc15; color: #000; padding: 0.25rem 0.75rem; border-radius: 6px; font-weight: 800; text-transform: uppercase; display: inline-block; letter-spacing: 0.1em;">
    EVENT HARI INI
  </h3>
  <img src="assets/event.png" alt="Event Hari Ini" style="width: 100%; border-radius: 6px; margin-bottom: 1rem;" />
  <p><strong>JUDUL:</strong> WISUDA SARJANA DAN AHLI MADYA STIKOM YOS SUDARSO 21 Oktober 2024</p>
      <p><strong>Details:</strong></p>
      <ul style="list-style-type: disc; padding-left: 1rem; margin-bottom: 12px;">
        <li>Hari, tanggal: Senin, 21 Oktober 2024</li>
        <li>Tempat: Pusat Heritage Hotel Purwokerto</li>
        <li>Acara live streaming oleh kanal Youtube resmi STIKOM Yos Sudarso</li>
      </ul>
      <p><strong>Info kontak dan Sosial Media resmi:</strong></p>
      <ul style="list-style-type: disc; padding-left: 1rem;">
        <li>Youtube: STIKOM Yos Sudarso</li>
        <li>Instagram: @stikomyossudarso</li>
      </ul>
      <p style="margin-top: 12px; font-size: 11px; color: #075985; font-weight: 600;">
        #Wisuda #STIKOMYosSudarso #Purwokerto #OnlineWisuda #LiveStreaming #EventKampus
      </p>
</section>


  <!-- Kanan: Foto + Social Media -->
  <div style="display: flex; flex-direction: column; max-width: 35%; gap: 1rem;">
    <!-- Foto -->
    <div style="border-radius: 8px; overflow: hidden; box-shadow: 0 0 8px rgba(0,0,0,0.1);">
      <img src="assets/p4.jpg" alt="Foto" style="width: 100%; display: block;" />
    </div>

    <!-- Social Media -->
    <div style="background-color: #bae6fd; padding: 0.5rem 1rem; border-radius: 8px; box-shadow: 0 0 6px rgba(0,0,0,0.1); font-size: 12px;">
      <div style="font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; border-bottom: 1px solid #0284c7; padding-bottom: 0.3rem; margin-bottom: 0.5rem;">SOCIAL MEDIA</div>
      <div style="font-weight: 600; text-align: center; margin-bottom: 0.5rem;">Ikuti Kami</div>

      <a href="https://wa.me/085734222225" target="_blank" rel="noopener" style="display: flex; align-items: center; gap: 0.5rem; background: white; padding: 0.3rem 0.5rem; border-radius: 6px; margin-bottom: 0.3rem; text-decoration: none; color: #0284c7; font-size: 11px;">
        <img src="https://cdn-icons-png.flaticon.com/512/5968/5968841.png" alt="WhatsApp" style="height: 16px; width: 16px;" />
        0857-3422-2225
      </a>

      <a href="https://instagram.com/mamipuskampus" target="_blank" rel="noopener" style="display: flex; align-items: center; gap: 0.5rem; background: white; padding: 0.3rem 0.5rem; border-radius: 6px; margin-bottom: 0.3rem; text-decoration: none; color: #db2777; font-size: 11px;">
        <img src="https://cdn-icons-png.flaticon.com/512/174/174855.png" alt="Instagram" style="height: 16px; width: 16px; border-radius: 50%;" />
        @mamipuskampus
      </a>

      <a href="https://twitter.com/mamipuskampus" target="_blank" rel="noopener" style="display: flex; align-items: center; gap: 0.5rem; background: white; padding: 0.3rem 0.5rem; border-radius: 6px; margin-bottom: 0.3rem; text-decoration: none; color: #0ea5e9; font-size: 11px;">
        <img src="https://cdn-icons-png.flaticon.com/512/733/733579.png" alt="Twitter" style="height: 16px; width: 16px;" />
        Marketplace Kampus
      </a>

      <a href="https://youtube.com/mampuskampus" target="_blank" rel="noopener" style="display: flex; align-items: center; gap: 0.5rem; background: white; padding: 0.3rem 0.5rem; border-radius: 6px; color: #dc2626; font-size: 11px; text-decoration: none;">
        <img src="https://cdn-icons-png.flaticon.com/512/1384/1384060.png" alt="YouTube" style="height: 16px; width: 16px;" />
        MamPus
      </a>
    </div>
  </div>

</div>


</section>



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
