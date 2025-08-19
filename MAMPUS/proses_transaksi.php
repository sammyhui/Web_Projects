<?php
include 'ModulKoneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id_produk = (int) $_POST['id_produk'];
  $nama_pembeli = mysqli_real_escape_string($conn, $_POST['nama_pembeli']);
  $jumlah = (int) $_POST['jumlah'];
  $metode = mysqli_real_escape_string($conn, $_POST['metode_pembayaran']);
  $tanggal = date('Y-m-d H:i:s');

  // Ambil harga produk
  $query_produk = mysqli_query($conn, "SELECT * FROM produk WHERE id = $id_produk");
  if (mysqli_num_rows($query_produk) == 0) {
    echo "Produk tidak ditemukan.";
    exit;
  }

  $produk = mysqli_fetch_assoc($query_produk);
  $total_harga = $produk['harga'] * $jumlah;

  // Simpan ke tabel transaksi (pastikan tabelnya ada)
  $insert = mysqli_query($conn, "INSERT INTO transaksi (id_produk, nama_pembeli, jumlah, metode_pembayaran, total_harga, tanggal)
                                 VALUES ('$id_produk', '$nama_pembeli', '$jumlah', '$metode', '$total_harga', '$tanggal')");

  if ($insert) {
    $last_id = mysqli_insert_id($conn); // ID transaksi terakhir
    echo "<script>
      alert('Transaksi berhasil! Silakan upload bukti transfer.');
      window.location = 'upload_bukti.php?id_transaksi={$last_id}';
    </script>";
  } else {
    echo "Gagal menyimpan transaksi.";
  }
} else {
  echo "Metode tidak valid.";
}
?>
