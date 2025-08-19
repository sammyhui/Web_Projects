<?php include 'ModulKoneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <!-- Font Awesome 6 CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <title>Belanja - Marketplace Kampus</title>
  <link rel="stylesheet" href="asset/c_barang.css" />
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
  <div class="center-title">BELANJA</div>
</header>




  <main>
    <div class="product-grid">
      <?php
        $query = "SELECT * FROM produk";
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
          $nama = htmlspecialchars($row['nama']);
          $harga = htmlspecialchars($row['harga']);
          $penjual = htmlspecialchars($row['penjual']);
          $gambar = htmlspecialchars($row['gambar']);

          $gambarPathServer = __DIR__ . '/images/' . $gambar;
          $gambarPathWeb = 'images/' . $gambar;

          if (!file_exists($gambarPathServer) || empty($gambar)) {
            $gambarPathWeb = 'images/jok.png'; // placeholder
          }
          ?>
          <div class="product-card">
            <img src="<?= $gambarPathWeb ?>" alt="<?= $nama ?>" />
            <div class="product-info">
              <h3><?= $nama ?></h3>
              <p class="price">Rp<?= number_format($harga, 0, ',', '.') ?></p>
              <p class="seller"><?= $penjual ?></p>
              <div class="button-group">
                <a href="transaksi_belanja.php?id=<?= $row['id'] ?>" class="buy-button">Beli</a>
                <button class="chat-button">Chat</button>
              </div>
            </div>

          </div>
          <?php
        }
      ?>
    </div>
  </main>

<?php include'template/footer.php'; ?>
</body>
</html>
