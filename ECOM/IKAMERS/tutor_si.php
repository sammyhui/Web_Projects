<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tutor Sistem Informasi - MamPus</title>
  <link rel="stylesheet" href="home.css">
</head>
<body>
  <header class="header">
    <div class="container">
      <div class="logo-area">
        <img src="assets/logo.png" alt="MamPus Logo" class="logo">
        <div class="brand">
          <h1>MamPus</h1>
          <p>Marketplace Kampus</p>
        </div>
      </div>
    </div>
  </header>

  <section class="section-title">
    <h2>Jasa Tutor Belajar - Sistem Informasi</h2>
    <p>Dibimbing oleh tutor berpengalaman dari prodi SI ✨</p>
  </section>

  <!-- START: Swipeable Tutor Section -->
  <section class="tutor-scroll-wrapper">
    <div class="tutor-scroll">
      <?php
      $tutors = [
        [
          'nama' => 'Kak Rina',
          'materi' => 'Basis Data, Sistem Informasi Manajemen',
          'kontak' => '0896 1234 5678',
          'foto' => 'rina.jpg'
        ],
        [
          'nama' => 'Kak Bayu',
          'materi' => 'Pemrograman Web, UML',
          'kontak' => '0895 8765 4321',
          'foto' => 'bayu.jpg'
        ],
        [
          'nama' => 'Kak Tari',
          'materi' => 'Manajemen Proyek TI, E-Commerce',
          'kontak' => '0896 7890 1234',
          'foto' => 'sari.jpg'
        ],
        [
          'nama' => 'Kak Salwa',
          'materi' => 'Manajemen Proyek TI, Bahasa Inggris',
          'kontak' => '0896 6767 1234',
          'foto' => 'salwa.jpg'
        ],
        [
          'nama' => 'Kak davin',
          'materi' => 'Interaksi Manusia dan Komputer, Bahasa Inggris, Sistem Pendukung Keputusan',
          'kontak' => '0896 6767 1234',
          'foto' => 'davin.jpg'
        ]
      ];

      foreach ($tutors as $tutor) {
        $waNumber = str_replace(' ', '', $tutor['kontak']); // hapus spasi
        $waLink = "https://wa.me/62" . substr($waNumber, 1); // ganti 0 jadi 62

        echo '
            <div class="tutor-card">
            <img src="assets/' . $tutor['foto'] . '" class="tutor-photo" alt="' . $tutor['nama'] . '">
            <div class="tutor-info">
                <h3>' . $tutor['nama'] . '</h3>
                <p><strong>Materi:</strong> ' . $tutor['materi'] . '</p>
                <p><strong>Kontak:</strong> <span class="phone-icon">📞</span> ' . $tutor['kontak'] . '</p>
                <div class="tutor-buttons">
                <a href="form_booking.php?tutor=' . urlencode($tutor['nama']) . '" class="btn-booking">Booking Sekarang</a>
                <a href="' . $waLink . '" target="_blank" class="btn-chat">Chat Dulu</a>
                </div>
            </div>
            </div>
        ';
        }

      ?>
    </div>
  </section>
  <!-- END: Swipeable Tutor Section -->

  <div style="text-align: center; padding-bottom: 40px;">
    <a href="home.php" class="btn-order">← Kembali ke Menu Utama</a>
  </div>
</body>
</html>
