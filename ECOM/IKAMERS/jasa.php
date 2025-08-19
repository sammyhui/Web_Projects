<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>MamPus - Marketplace Kampus</title>
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
    <h2>JASA</h2>
  </section>

  <div class="arrow-nav">
    <span class="arrow">&larr;</span>
    <span class="arrow">&rarr;</span>
  </div>

  
    <section class="tutor-section">
    <h2>JASA TUTOR BELAJAR</h2>
    <div class="prodi-grid">
        <?php
        $prodi = [
        ['name' => 'Sistem Informasi', 'file' => 'tutor_si.php'],
        ['name' => 'Teknik Informatika', 'file' => 'tutor_ti.php'],
        ['name' => 'Komputerisasi Akuntansi', 'file' => 'tutor_ka.php'],
        ['name' => 'Desain Komunikasi Visual', 'file' => 'tutor_dkv.php'],
        ];

        foreach ($prodi as $item) {
        echo '
            <a href="' . $item['file'] . '" class="prodi-card">
            <h3>' . $item['name'] . '</h3>
            <p>Lihat Tutor &gt;</p>
            </a>
        ';
        }
        ?>
    </div>
    </section>

</body>
</html>
