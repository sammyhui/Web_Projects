<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Chat Dulu - MamPus</title>
  <link rel="stylesheet" href="home.css">
  <style>
    body {
      background-color: #e3f2fd;
      font-family: 'Segoe UI', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .chat-box {
      background: white;
      padding: 30px 40px;
      border-radius: 16px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
      text-align: center;
      max-width: 400px;
    }

    .chat-box h2 {
      margin-bottom: 10px;
      font-size: 22px;
      color: #2c3e50;
    }

    .chat-box p {
      font-size: 16px;
      color: #555;
      margin-bottom: 25px;
    }

    .btn-chatwa {
      background-color: #25D366;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 10px;
      text-decoration: none;
      font-weight: 600;
      font-size: 16px;
      transition: background 0.3s ease;
      display: inline-block;
    }

    .btn-chatwa:hover {
      background-color: #1ebe5b;
    }
  </style>
</head>
<body>
  <div class="chat-box">
    <?php
      $nama = isset($_GET['tutor']) ? htmlspecialchars($_GET['tutor']) : 'Tutor';
      $kontak = isset($_GET['kontak']) ? preg_replace('/\D/', '', $_GET['kontak']) : '089612345678';
      $waNumber = '62' . ltrim($kontak, '0'); // format internasional

      $pesan = urlencode("Halo Kak $nama, saya mau tanya dulu sebelum booking 😊");
      $waLink = "https://wa.me/$waNumber?text=$pesan";
    ?>

    <h2>Chat dengan <?= $nama ?></h2>
    <p>Klik tombol di bawah untuk mulai chat via WhatsApp.</p>
    <a href="<?= $waLink ?>" class="btn-chatwa" target="_blank">Chat via WhatsApp</a>
  </div>
</body>
</html>
