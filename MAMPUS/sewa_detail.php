<?php
include 'ModulKoneksi.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo "Barang sewa tidak valid.";
    exit;
}

$id = (int) $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM tb_sewa WHERE id = $id");

if (mysqli_num_rows($query) == 0) {
    echo "Barang sewa tidak ditemukan.";
    exit;
}

$item = mysqli_fetch_assoc($query);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_penyewa = mysqli_real_escape_string($conn, $_POST['nama_penyewa']);
    $lama_sewa = (int) $_POST['lama_sewa']; // dalam jam
    $metode_pembayaran = mysqli_real_escape_string($conn, $_POST['metode_pembayaran']);
    $tanggal = date('Y-m-d H:i:s');

    $total_harga = $item['harga'] * $lama_sewa;

    $insert = mysqli_query($conn, "INSERT INTO sewa_transaksi (id_sewa, nama_penyewa, lama_sewa, metode_pembayaran, total_harga, tanggal, status) 
                                  VALUES ($id, '$nama_penyewa', $lama_sewa, '$metode_pembayaran', $total_harga, '$tanggal', 'pending')");
    if ($insert) {
        $last_id = mysqli_insert_id($conn);
        echo "<script>
                alert('Pemesanan berhasil! Silakan upload bukti transfer.');
                window.location.href='upload_bukti_sewa.php?id_sewa_transaksi=$last_id';
              </script>";
        exit;
    } else {
        echo "Gagal melakukan pemesanan.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Detail Sewa - <?php echo htmlspecialchars($item['nama']); ?></title>
<style>
  body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #f9f9f9; padding: 20px; }
  .container { max-width: 480px; background: white; margin: auto; padding: 20px; border-radius: 10px; box-shadow: 0 8px 20px rgba(0,0,0,0.1);}
  img { width: 100%; border-radius: 10px; }
  h2 { margin-top: 15px; }
  label { display: block; margin: 15px 0 5px; font-weight: 600; }
  input, select { width: 100%; padding: 10px; border-radius: 6px; border: 1px solid #ccc; }
  button { margin-top: 20px; background: #2196f3; color: white; border: none; padding: 14px; font-weight: 700; border-radius: 8px; cursor: pointer; }
  button:hover { background: #1976d2; }
</style>
</head>
<body>
<div class="container">
  <img src="<?php echo htmlspecialchars($item['gambar']); ?>" alt="<?php echo htmlspecialchars($item['nama']); ?>" />
  <h2><?php echo htmlspecialchars($item['nama']); ?></h2>
  <p>Harga sewa: Rp<?php echo number_format($item['harga'], 0, ',', '.'); ?> / jam</p>

  <form method="POST">
    <label for="nama_penyewa">Nama Penyewa</label>
    <input type="text" id="nama_penyewa" name="nama_penyewa" required />

    <label for="lama_sewa">Lama Sewa (jam)</label>
    <input type="number" id="lama_sewa" name="lama_sewa" min="1" required />

    <label for="metode_pembayaran">Metode Pembayaran</label>
    <select id="metode_pembayaran" name="metode_pembayaran" required>
      <option value="">-- Pilih Metode --</option>
      <option value="DANA">DANA</option>
      <option value="OVO">OVO</option>
      <option value="Transfer Bank">Transfer Bank</option>
      <option value="COD">COD (Bayar di Tempat)</option>
    </select>

    <button type="submit">Pesan Sekarang</button>
  </form>
</div>
</body>
</html>
