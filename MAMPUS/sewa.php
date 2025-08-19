<?php
include 'ModulKoneksi.php'; 
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sewa Barang - Marketplace Kampus</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="asset/c_sewa.css" />
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
  <div class="center-title">SEWA</div>
</header>

<main>
  <div class="grid-container">
    <?php
    $query = mysqli_query($conn, "SELECT * FROM tb_sewa ORDER BY id DESC");
    while ($row = mysqli_fetch_assoc($query)) {
      ?>
      <div class="item">
        <img src="<?php echo htmlspecialchars($row['gambar']); ?>" alt="<?php echo htmlspecialchars($row['nama']); ?>">
        <p><strong><?php echo strtoupper(htmlspecialchars($row['nama'])); ?></strong></p>
        <p>Rp<?php echo number_format($row['harga'], 0, ',', '.'); ?> / jam</p>
        <a href="sewa_detail.php?id=<?php echo $row['id']; ?>">
          <button>Selanjutnya</button>
        </a>
      </div>
      <?php
    }
    ?>
  </div>
</main>

<?php include 'template/footer.php'; ?>
</body>
</html>
