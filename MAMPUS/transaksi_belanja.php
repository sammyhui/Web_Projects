<?php
include 'ModulKoneksi.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
  echo "Produk tidak valid.";
  exit;
}

$id = (int) $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM produk WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
  echo "Produk tidak ditemukan.";
  exit;
}

$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Transaksi - <?= htmlspecialchars($row['nama']) ?></title>
  <link rel="stylesheet" href="asset/c_transaksi.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>
<body>

<header>
  <div class="left-header">
    <button class="back-button" onclick="history.back()"><i class="fas fa-arrow-left"></i></button>
    <div class="logo-container">
      <img src="images/logo.png" alt="MamPus Logo" />
      <div class="logo-text">
        <h1>MamPus</h1>
        <h2>Marketplace Kampus</h2>
      </div>
    </div>
  </div>
  <div class="center-title">TRANSAKSI</div>
</header>

<main>
  <div class="transaksi-container">
    <img src="images/<?= htmlspecialchars($row['gambar']) ?>" alt="<?= htmlspecialchars($row['nama']) ?>" class="product-img" />

    <div class="product-details">
      <h2><?= htmlspecialchars($row['nama']) ?></h2>
      <p><strong>Rp<?= number_format($row['harga'], 0, ',', '.') ?></strong></p>
      <p><i class="fas fa-user"></i> Penjual: <?= htmlspecialchars($row['penjual']) ?></p>

      <form action="proses_transaksi.php" method="post">
        <input type="hidden" name="id_produk" value="<?= $row['id'] ?>">

        <label for="nama_pembeli">Nama Anda:</label>
        <input type="text" name="nama_pembeli" id="nama_pembeli" required>

        <label for="jumlah">Jumlah:</label>
        <input type="number" name="jumlah" id="jumlah" value="1" min="1" required>

        <label for="metode_pembayaran">Metode Pembayaran:</label>
        <select name="metode_pembayaran" id="metode_pembayaran" required>
          <option value="">-- Pilih Metode --</option>
          <option value="OVO">OVO</option>
          <option value="DANA">DANA</option>
          <option value="Transfer Bank">Transfer Bank</option>
          <option value="COD">COD (Bayar di Tempat)</option>
        </select>

        <button type="submit" class="submit-button">Konfirmasi Beli</button>
      </form>
    </div>
  </div>
</main>

<?php include 'template/footer.php'; ?>
</body>
</html>
