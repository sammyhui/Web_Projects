<?php
include 'ModulKoneksi.php';

if (!isset($_GET['id_transaksi']) || !is_numeric($_GET['id_transaksi'])) {
    echo "Transaksi tidak valid.";
    exit;
}

$id_transaksi = (int) $_GET['id_transaksi'];

// Ambil data transaksi dan produk terkait
$sql = "SELECT t.*, p.metode_dana, p.metode_ovo, p.metode_bank 
        FROM transaksi t
        JOIN produk p ON t.id_produk = p.id
        WHERE t.id = $id_transaksi";
$result = mysqli_query($conn, $sql);

if (!$result || mysqli_num_rows($result) == 0) {
    echo "Transaksi tidak ditemukan.";
    exit;
}

$data = mysqli_fetch_assoc($result);

// Tentukan info metode pembayaran sesuai yg dipilih pembeli
$info_metode = "";
switch ($data['metode_pembayaran']) {
    case 'DANA':
        $info_metode = "Transfer via DANA: " . ($data['metode_dana'] ?: "-");
        break;
    case 'OVO':
        $info_metode = "Transfer via OVO: " . ($data['metode_ovo'] ?: "-");
        break;
    case 'Transfer Bank':
        $info_metode = "Transfer Bank: " . ($data['metode_bank'] ?: "-");
        break;
    case 'COD':
        $info_metode = "Pembayaran COD (Bayar di Tempat)";
        break;
    default:
        $info_metode = "Metode pembayaran tidak diketahui";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['bukti'])) {
    $fileName = $_FILES['bukti']['name'];
    $fileTmp = $_FILES['bukti']['tmp_name'];
    $fileSize = $_FILES['bukti']['size'];
    $fileError = $_FILES['bukti']['error'];

    $uploadDir = "bukti_tf/";
    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $allowedTypes = ['jpg', 'jpeg', 'png', 'pdf'];

    if (!in_array($fileExt, $allowedTypes)) {
        echo "Tipe file tidak diperbolehkan.";
        exit;
    }

    if ($fileError !== 0) {
        echo "Error saat upload file.";
        exit;
    }

    if ($fileSize > 5 * 1024 * 1024) {
        echo "Ukuran file terlalu besar (max 5MB).";
        exit;
    }

    $newFileName = uniqid('bukti_', true) . '.' . $fileExt;
    $newTargetFile = $uploadDir . $newFileName;

    if (move_uploaded_file($fileTmp, $newTargetFile)) {
        $update = mysqli_query($conn, "UPDATE transaksi SET bukti_tf='$newFileName', status='selesai', tanggal_upload_bukti=NOW() WHERE id=$id_transaksi");
        if ($update) {
            echo "<script>
                    alert('Pesanan selesai! Terima kasih.');
                    window.location.href = 'index.php';
                  </script>";
            exit;
        } else {
            echo "Gagal update data bukti transfer.";
        }
    } else {
        echo "Gagal upload file.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Upload Bukti Transfer</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f4ff;
            padding: 40px;
        }
        .container {
            max-width: 480px;
            margin: auto;
            background: #fff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 24px;
            color: #222;
        }
        .info-metode {
            background: #e3f2fd;
            border-left: 5px solid #2196f3;
            padding: 15px 20px;
            border-radius: 6px;
            margin-bottom: 25px;
            font-weight: 600;
            color: #0d47a1;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #333;
        }
        input[type="file"] {
            width: 100%;
            padding: 8px;
            border-radius: 6px;
            border: 1px solid #ccc;
            margin-bottom: 25px;
            cursor: pointer;
        }
        button {
            width: 100%;
            background-color: #2196f3;
            border: none;
            color: white;
            padding: 14px;
            font-weight: 700;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #1976d2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Upload Bukti Transfer</h2>
        <div class="info-metode">
            <?= htmlspecialchars($info_metode) ?>
        </div>
        <form method="POST" enctype="multipart/form-data">
            <label for="bukti">Pilih file bukti transfer (jpg, png, pdf max 5MB):</label>
            <input type="file" name="bukti" id="bukti" required />
            <button type="submit">Upload Bukti</button>
        </form>
    </div>
</body>
</html>
