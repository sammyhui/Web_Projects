<?php
include 'ModulKoneksi.php'; // koneksi database

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['gambar'])) {
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $harga = mysqli_real_escape_string($conn, $_POST['harga']);
    $penjual = mysqli_real_escape_string($conn, $_POST['penjual']);

    // Tangkap metode pembayaran
    $metode_dana = mysqli_real_escape_string($conn, $_POST['metode_dana']);
    $metode_ovo = mysqli_real_escape_string($conn, $_POST['metode_ovo']);
    $metode_bank = mysqli_real_escape_string($conn, $_POST['metode_bank']);

    $fileName = $_FILES['gambar']['name'];
    $fileTmp = $_FILES['gambar']['tmp_name'];
    $fileSize = $_FILES['gambar']['size'];
    $fileError = $_FILES['gambar']['error'];

    $uploadDir = "images/";
    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];

    if (in_array($fileExt, $allowedTypes)) {
        if ($fileError === 0) {
            if ($fileSize <= 5 * 1024 * 1024) {
                $newFileName = uniqid('', true) . "." . $fileExt;
                $newTargetFile = $uploadDir . $newFileName;

                if (move_uploaded_file($fileTmp, $newTargetFile)) {
                    // Tambahkan kolom pembayaran ke query INSERT
                    $sql = "INSERT INTO produk (nama, harga, penjual, gambar, metode_dana, metode_ovo, metode_bank) 
                            VALUES ('$nama', '$harga', '$penjual', '$newFileName', '$metode_dana', '$metode_ovo', '$metode_bank')";

                    if (mysqli_query($conn, $sql)) {
                        echo "Upload dan simpan data berhasil! <a href='upload.php'>Tambah Produk</a>";
                    } else {
                        echo "Error: " . mysqli_error($conn);
                    }
                } else {
                    echo "Gagal upload file.";
                }
            } else {
                echo "Ukuran file terlalu besar (max 5MB).";
            }
        } else {
            echo "Error saat upload file.";
        }
    } else {
        echo "Tipe file tidak diperbolehkan.";
    }
} else {
    echo "Tidak ada file yang diupload.";
}
?>
