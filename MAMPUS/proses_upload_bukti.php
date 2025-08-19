<?php
include 'ModulKoneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['bukti_tf'])) {
  $id_transaksi = (int)$_POST['id_transaksi'];

  $fileName = $_FILES['bukti_tf']['name'];
  $fileTmp = $_FILES['bukti_tf']['tmp_name'];
  $fileSize = $_FILES['bukti_tf']['size'];
  $fileError = $_FILES['bukti_tf']['error'];

  $allowedTypes = ['jpg', 'jpeg', 'png', 'pdf'];
  $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

  if (!in_array($fileExt, $allowedTypes)) {
    die("Tipe file tidak diperbolehkan.");
  }

  if ($fileError !== 0) {
    die("Terjadi kesalahan saat upload.");
  }

  if ($fileSize > 5 * 1024 * 1024) {
    die("Ukuran file terlalu besar (max 5MB).");
  }

  $uploadDir = "bukti_tf/";
  if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0755, true);
  }

  $newFileName = uniqid('bukti_', true) . '.' . $fileExt;
  $targetFile = $uploadDir . $newFileName;

  if (move_uploaded_file($fileTmp, $targetFile)) {
    $tanggal_upload = date('Y-m-d H:i:s');
    $sql = "UPDATE transaksi SET bukti_tf = ?, status = 'pending', tanggal_upload_bukti = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $newFileName, $tanggal_upload, $id_transaksi);

    if ($stmt->execute()) {
      echo "Bukti transfer berhasil diupload. Tunggu konfirmasi dari penjual.";
    } else {
      echo "Gagal update database: " . $conn->error;
    }
  } else {
    echo "Gagal memindahkan file.";
  }
} else {
  echo "Tidak ada file yang diupload.";
}
?>
