<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Tutor Sistem Informasi - MamPus</title>

  <!-- Google Font Inter -->
   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- Link ke CSS eksternal -->
  <link rel="stylesheet" href="asset/c_si.css" />
</head>
<body>

   <header>
  <div class="left-header">
    <button class="back-button" onclick="history.back()">
      <i class="fas fa-arrow-left"></i>
    </button>
    <div class="logo-container">
      <img src="images/logo.png" alt="MamPus Logo"/>
      <div class="logo-text">
        <h1>MamPus</h1>
        <h2>Marketplace Kampus</h2>
      </div>
    </div>
  </div>
  <div class="center-title">SEWA</div>
</header>

  <section class="section-title">
    <h2>Jasa Tutor Belajar - Sistem Informasi</h2>
    <p>Dibimbing oleh tutor berpengalaman dari prodi SI ✨</p>
  </section>

  <section class="tutor-scroll-wrapper" aria-label="Daftar Tutor Sistem Informasi">
    <div class="tutor-scroll">
      <?php
      $tutors = [
        [
          'nama' => 'Kak Agus',
          'materi' => 'Basis Data, Sistem Informasi Manajemen',
          'kontak' => '0896 1234 5678',
          'harga' => 50000,  // harga per jam dalam rupiah
          'foto' => 'images/b.jpg'
        ],
        [
          'nama' => 'Kak Sammy',
          'materi' => 'Pemrograman Web, UML',
          'kontak' => '0895 8765 4321',
          'harga' => 90000,  // harga per jam dalam rupiah
          'foto' => 'images/t1.jpg'
        ],
        [
          'nama' => 'Kak Pita',
          'materi' => 'Manajemen Proyek TI, E-Commerce',
          'kontak' => '0896 7890 1234',
          'harga' => 65000,  // harga per jam dalam rupiah
          'foto' => 'images/p.jpg'
        ],
        [
          'nama' => 'Kak Regil',
          'materi' => 'Manajemen Proyek TI, Bahasa Inggris',
          'kontak' => '0896 6767 1234',
          'harga' => 45000,  // harga per jam dalam rupiah
          'foto' => 'images/r.jpg'
        ],
        [
          'nama' => 'Kak Davin',
          'materi' => 'Interaksi Manusia dan Komputer, Bahasa Inggris, Sistem Pendukung Keputusan',
          'kontak' => '0896 6767 1234',
          'harga' => 75000,  // harga per jam dalam rupiah
          'foto' => 'https://randomuser.me/api/portraits/men/56.jpg'
        ]
      ];

      foreach ($tutors as $tutor) {
        $hargaFormatted = "Rp " . number_format($tutor['harga'], 0, ',', '.');
        echo '
          <article class="tutor-card">
            <img src="' . $tutor['foto'] . '" alt="Foto ' . htmlspecialchars($tutor['nama']) . '" class="tutor-photo" />
            <div class="tutor-info">
              <h3>' . htmlspecialchars($tutor['nama']) . '</h3>
              <p><strong>Materi:</strong> ' . htmlspecialchars($tutor['materi']) . '</p>
              <p><strong>Harga:</strong> ' . $hargaFormatted . ' / jam</p>
              <p><strong>Kontak:</strong> <span class="phone-icon">📞</span>' . htmlspecialchars($tutor['kontak']) . '</p>
              <div class="tutor-buttons">
                <a href="form_booking.php?tutor=' . urlencode($tutor['nama']) . '" class="btn-booking" aria-label="Booking ' . htmlspecialchars($tutor['nama']) . '">Booking Sekarang</a>
                <a href="https://wa.me/62' . substr(str_replace(' ', '', $tutor['kontak']),1) . '" target="_blank" rel="noopener" class="btn-chat" aria-label="Chat WhatsApp dengan ' . htmlspecialchars($tutor['nama']) . '">Chat Dulu</a>
              </div>
            </div>
          </article>
        ';
      }
      ?>
    </div>
  </section>

  <div style="text-align: center;">
    <a href="index.php" class="btn-order" aria-label="Kembali ke Menu Utama">← Kembali ke Menu Utama</a>
  </div>
<?php include 'template/footer.php'; ?>
</body>
</html>
