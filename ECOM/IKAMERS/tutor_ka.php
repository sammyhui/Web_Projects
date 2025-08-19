<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tutor Komputerisasi Akuntansi - MamPus</title>
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
    <h2>Jasa Tutor Belajar - Komputerisasi Akuntansi</h2>
    <p>Dibimbing oleh tutor berpengalaman dari prodi KA 🧾📊</p>
  </section>

  <!-- Tutor Swipeable List -->
  <section class="tutor-scroll-wrapper">
    <div class="tutor-scroll">
      <?php
      $tutors = [
        [
          'nama' => 'Kak Wulan',
          'materi' => 'Akuntansi Dasar, Laporan Keuangan',
          'kontak' => '0896 1234 0001',
          'foto' => 'wulan.jpg'
        ],
        [
          'nama' => 'Kak Bima',
          'materi' => 'MYOB, Excel Akuntansi',
          'kontak' => '0895 5678 0002',
          'foto' => 'bima.jpg'
        ],
        [
          'nama' => 'Kak Dita',
          'materi' => 'Perpajakan, Software Accurate',
          'kontak' => '0896 4321 0003',
          'foto' => 'dita.jpg'
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

  <div style="text-align: center; padding-bottom: 40px;">
    <a href="home.php" class="btn-order">← Kembali ke Menu Utama</a>
  </div>
</body>
</html>
