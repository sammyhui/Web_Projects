<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>MamPus - Marketplace Kampus</title>
  <link rel="stylesheet" href="asset/c_tutor.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
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
    <div class="center-title">TUTOR</div>
  </header>


 <section class="tutor-section">
  <h2>JASA TUTOR BELAJAR</h2>
  <div class="prodi-grid">
    <?php
      $prodi = [
        ['name' => 'Sistem Informasi', 'file' => 'tutor_si.php', 'icon' => 'https://cdn-icons-png.flaticon.com/512/3135/3135715.png'],
        ['name' => 'Teknik Informatika', 'file' => 'tutor_si.php', 'icon' => 'https://cdn-icons-png.flaticon.com/512/1055/1055687.png'],
        ['name' => 'Komputerisasi Akuntansi', 'file' => 'tutor_si.php', 'icon' => 'https://cdn-icons-png.flaticon.com/512/716/716784.png'],
        ['name' => 'Desain Komunikasi Visual', 'file' => 'tutor_si.php', 'icon' => 'https://cdn-icons-png.flaticon.com/512/2913/2913461.png'],
      ];

      foreach ($prodi as $item) {
        echo '
          <a href="' . $item['file'] . '" class="prodi-card">
            <img src="' . $item['icon'] . '" alt="' . $item['name'] . ' Icon" class="prodi-icon" />
            <h3>' . $item['name'] . '</h3>
            <p>Lihat Tutor &gt;</p>
          </a>
        ';
      }
    ?>

  </div>
</section>

<?php include'template/footer.php'; ?>
</body>
</html>
