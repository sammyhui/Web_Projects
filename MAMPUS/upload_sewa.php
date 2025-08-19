<?php
include 'ModulKoneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $harga = (int) $_POST['harga'];
    $metode_dana = mysqli_real_escape_string($conn, $_POST['metode_dana']);
    $metode_ovo = mysqli_real_escape_string($conn, $_POST['metode_ovo']);
    $metode_bank = mysqli_real_escape_string($conn, $_POST['metode_bank']);

    // Upload gambar
    if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === 0) {
        $fileName = $_FILES['gambar']['name'];
        $fileTmp = $_FILES['gambar']['tmp_name'];
        $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $allowedTypes = ['jpg', 'jpeg', 'png'];

        if (!in_array($fileExt, $allowedTypes)) {
            $error = "Tipe file gambar harus jpg/jpeg/png.";
        } else {
            $newFileName = uniqid('sewa_', true) . '.' . $fileExt;
            $uploadDir = 'images_sewa/';

            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }

            $targetFile = $uploadDir . $newFileName;
            if (move_uploaded_file($fileTmp, $targetFile)) {
                // Simpan ke DB
                $sql = "INSERT INTO tb_sewa (nama, harga, gambar, metode_dana, metode_ovo, metode_bank) VALUES ('$nama', $harga, '$targetFile', '$metode_dana', '$metode_ovo', '$metode_bank')";
                if (mysqli_query($conn, $sql)) {
                    echo "<script>alert('Barang sewa berhasil ditambahkan!'); window.location.href = 'sewa.php';</script>";
                    exit;
                } else {
                    $error = "Gagal menyimpan data ke database.";
                }
            } else {
                $error = "Gagal upload gambar.";
            }
        }
    } else {
        $error = "Gambar wajib diupload.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8" />
<title>Upload Barang Sewa</title>
<style>
  body { font-family: Arial, sans-serif; padding: 30px; background: #f4f7f8; }
  .container { max-width: 480px; margin: auto; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 8px 15px rgba(0,0,0,0.1); }
  h2 { margin-bottom: 20px; color: #333; }
  label { display: block; margin-top: 15px; font-weight: bold; }
  input[type="text"], input[type="number"], input[type="file"] { width: 100%; padding: 10px; border-radius: 6px; border: 1px solid #ccc; margin-top: 5px; }
  button { margin-top: 20px; padding: 14px; background: #28a745; color: white; border: none; border-radius: 8px; cursor: pointer; font-weight: bold; width: 100%; }
  button:hover { background: #218838; }
  .error { margin-top: 15px; color: red; font-weight: 600; }
</style>
</head>
<body>
<div class="container">
  <h2>Upload Barang Sewa Baru</h2>
  <?php if (isset($error)) echo "<div class='error'>$error</div>"; ?>
  <form method="POST" enctype="multipart/form-data">
    <label for="nama">Nama Barang Sewa</label>
    <input type="text" name="nama" id="nama" required />

    <label for="harga">Harga Sewa (per jam)</label>
    <input type="number" name="harga" id="harga" required min="0" />

    <label for="gambar">Gambar Barang</label>
    <input type="file" name="gambar" id="gambar" accept=".jpg,.jpeg,.png" required />

    <label for="metode_dana">Nomor / ID DANA</label>
    <input type="text" name="metode_dana" id="metode_dana" placeholder="Contoh: 08123456789" />

    <label for="metode_ovo">Nomor / ID OVO</label>
    <input type="text" name="metode_ovo" id="metode_ovo" placeholder="Contoh: 08123456789" />

    <label for="metode_bank">Nomor Rekening Bank</label>
    <input type="text" name="metode_bank" id="metode_bank" placeholder="Contoh: 1234567890 - Bank BRI" />

    <button type="submit">Upload Barang Sewa</button>
  </form>
</div>
</body>
</html>
