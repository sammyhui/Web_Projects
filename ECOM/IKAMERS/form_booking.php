<?php
$tutor = isset($_GET['tutor']) ? htmlspecialchars($_GET['tutor']) : 'Nama Tutor';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Booking <?= $tutor ?> - MamPus</title>
  <link rel="stylesheet" href="home.css">
  <style>
    .booking-container {
      max-width: 600px;
      margin: 60px auto;
      background: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }
    .booking-container h2 {
      margin-bottom: 20px;
      color: #1a1f4d;
    }
    .booking-container label {
      font-weight: bold;
      display: block;
      margin-top: 15px;
      color: #333;
    }
    .booking-container input,
    .booking-container textarea {
      width: 100%;
      padding: 10px;
      margin-top: 6px;
      border-radius: 6px;
      border: 1px solid #ccc;
      font-size: 14px;
    }
    .booking-container button {
      margin-top: 20px;
      padding: 12px 20px;
      background-color: #1a1f4d;
      color: #fff;
      border: none;
      font-size: 15px;
      border-radius: 6px;
      cursor: pointer;
      transition: background 0.3s ease;
    }
    .booking-container button:hover {
      background-color: #32407c;
    }
  </style>
</head>
<body>

  <div class="booking-container">
    <h2>Form Booking untuk <?= $tutor ?></h2>
    <form action="submit_booking.php" method="post">
      <input type="hidden" name="tutor" value="<?= $tutor ?>">

      <label for="nama">Nama Anda:</label>
      <input type="text" id="nama" name="nama" required>

      <label for="email">Email Aktif:</label>
      <input type="email" id="email" name="email" required>

      <label for="kontak">No. HP / WhatsApp:</label>
      <input type="text" id="kontak" name="kontak" required>

      <label for="tanggal">Tanggal Bimbingan:</label>
      <input type="date" id="tanggal" name="tanggal" required>

      <label for="waktu">Jam Bimbingan:</label>
      <input type="time" id="waktu" name="waktu" required>

      <label for="catatan">Catatan / Permintaan Khusus:</label>
      <textarea id="catatan" name="catatan" rows="4" placeholder="Contoh: Saya ingin dibimbing soal UTS minggu depan."></textarea>

      <button type="submit">Kirim Booking</button>
    </form>
  </div>

</body>
</html>
