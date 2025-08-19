<?php
$tutorPrices = [
    'Kak Rina' => 50000,
    'Kak Sammy' => 90000,
    'Kak Tari' => 85000,
    'Kak Salwa' => 65000,
    'Kak Davin' => 45000,
];

$success = false;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tutor = htmlspecialchars($_POST['tutor'] ?? '');
    $namaPemesan = htmlspecialchars(trim($_POST['nama_pemesan'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $tanggal = htmlspecialchars(trim($_POST['tanggal'] ?? ''));
    $waktu = htmlspecialchars(trim($_POST['waktu'] ?? ''));
    $durasi = intval($_POST['durasi'] ?? 1);
    $pesan = htmlspecialchars(trim($_POST['pesan'] ?? ''));

    if (!$tutor || !$namaPemesan || !$email || !$tanggal || !$waktu || $durasi < 1) {
        $error = 'Mohon isi semua field yang wajib dengan benar.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Email tidak valid.';
    } elseif (!isset($tutorPrices[$tutor])) {
        $error = 'Tutor tidak valid.';
    } else {
        $pricePerHour = $tutorPrices[$tutor];
        $totalHarga = $pricePerHour * $durasi;
        $success = true;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Booking Tutor</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Inter', sans-serif;
    }

    body {
      margin: 0;
      background-color:rgb(172, 223, 234);
    }

    .modal {
      display: block;
      position: fixed;
      z-index: 100;
      left: 0; top: 0;
      width: 100%; height: 100%;
      background: rgba(0, 0, 0, 0.3);
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .modal-content {
      background: white;
      padding: 32px;
      border-radius: 16px;
      width: 90%;
      max-width: 500px;
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
      position: relative;
      animation: fadeIn 0.3s ease-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .modal-content h3 {
      margin-top: 0;
      margin-bottom: 20px;
      font-size: 22px;
      color: #111827;
    }

    .modal-content label {
      display: block;
      font-weight: 600;
      margin-top: 12px;
      margin-bottom: 6px;
      color: #374151;
    }

    .modal-content input,
    .modal-content select,
    .modal-content textarea {
      width: 100%;
      padding: 10px 14px;
      border: 1px solidrgb(177, 205, 247);
      border-radius: 8px;
      background:rgb(233, 255, 240);
      transition: 0.2s;
    }

    .modal-content input:focus,
    .modal-content select:focus,
    .modal-content textarea:focus {
      border-color: #3b82f6;
      outline: none;
      background: #fff;
    }

    .modal-content button[type="submit"] {
      margin-top: 20px;
      background-color: #3b82f6;
      color: white;
      padding: 12px;
      width: 100%;
      border: none;
      border-radius: 8px;
      font-weight: 600;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.2s;
    }

    .modal-content button:hover {
      background-color: #2563eb;
    }

    .close {
      position: absolute;
      top: 14px;
      right: 18px;
      font-size: 24px;
      color: #6b7280;
      cursor: pointer;
    }

    .close:hover { color: #111827; }

    .success, .error {
      margin: 20px auto;
      padding: 12px;
      width: 90%;
      max-width: 500px;
      border-radius: 8px;
      text-align: center;
    }

    .success {
      background-color: #dcfce7;
      color: #166534;
    }

    .error {
      background-color:rgb(191, 211, 245);
      color: #991b1b;
    }
  </style>
</head>
<body>

<?php if ($success): ?>
  <div class="success">✅ Booking berhasil! Kami akan menghubungi Anda segera.</div>
<?php elseif ($error): ?>
  <div class="error">❌ <?= $error ?></div>
<?php endif; ?>

<div class="modal" id="bookingModal">
  <div class="modal-content">
    <span class="close" onclick="history.back()">&times;</span>

    <h3>Booking Tutor</h3>
    <form method="POST" action="">
      <label for="tutorSelect">Pilih Tutor *</label>
      <select name="tutor" id="tutorSelect" required>
        <option value="">-- Pilih Tutor --</option>
        <?php foreach ($tutorPrices as $name => $price): ?>
          <option value="<?= $name ?>"><?= $name ?></option>
        <?php endforeach; ?>
      </select>

      <label>Harga per Jam</label>
      <input type="text" id="hargaPerJam" disabled>

      <label>Nama Lengkap *</label>
      <input type="text" name="nama_pemesan" required>

      <label>Email *</label>
      <input type="email" name="email" required>

      <label>Tanggal Booking *</label>
      <input type="date" name="tanggal" required>

      <label>Waktu Booking *</label>
      <input type="time" name="waktu" required>

      <label>Durasi (jam) *</label>
      <input type="number" id="durasi" name="durasi" min="1" max="8" value="1" required>

      <label>Total Harga</label>
      <input type="text" id="totalHarga" disabled>

      <label>Pesan Tambahan</label>
      <textarea name="pesan" rows="3" placeholder="Contoh: Belajar Struktur Data."></textarea>

      <button type="submit">Kirim Booking</button>
    </form>
  </div>
</div>

<script>
  const tutorPrices = <?= json_encode($tutorPrices) ?>;
  const tutorSelect = document.getElementById('tutorSelect');
  const hargaPerJam = document.getElementById('hargaPerJam');
  const durasiInput = document.getElementById('durasi');
  const totalHarga = document.getElementById('totalHarga');

  function updateHarga() {
    const tutor = tutorSelect.value;
    const durasi = parseInt(durasiInput.value || 1);
    const harga = tutorPrices[tutor] || 0;
    hargaPerJam.value = harga ? 'Rp ' + harga.toLocaleString('id-ID') : '-';
    totalHarga.value = harga ? 'Rp ' + (harga * durasi).toLocaleString('id-ID') : '-';
  }

  tutorSelect.addEventListener('change', updateHarga);
  durasiInput.addEventListener('input', updateHarga);
</script>

</body>
</html>
