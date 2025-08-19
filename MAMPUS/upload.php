<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Upload Produk</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f6f8;
      color: #333;
      padding: 40px;
    }

    .upload-container {
      max-width: 500px;
      margin: auto;
      background-color: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 6px 18px rgba(0,0,0,0.1);
    }

    .upload-container h2 {
      text-align: center;
      margin-bottom: 24px;
      color: #1e2a38;
    }

    form label {
      display: block;
      margin-bottom: 6px;
      font-weight: 600;
      color: #555;
    }

    form input[type="text"],
    form input[type="file"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 16px;
      border-radius: 6px;
      border: 1px solid #ccc;
      transition: border-color 0.2s;
    }

    form input[type="text"]:focus,
    form input[type="file"]:focus {
      border-color: #2196f3;
      outline: none;
    }

    form input[type="submit"] {
      width: 100%;
      padding: 12px;
      background-color: #ffd600;
      border: none;
      border-radius: 6px;
      font-weight: bold;
      color: #000;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    form input[type="submit"]:hover {
      background-color: #ffca28;
    }
  </style>
</head>
<body>

  <div class="upload-container">
    <h2>Upload Produk</h2>
    <form action="up.php" method="POST" enctype="multipart/form-data">
      <label>Nama Produk:</label>
      <input type="text" name="nama" required>

      <label>Harga:</label>
      <input type="text" name="harga" required>

      <label>Penjual:</label>
      <input type="text" name="penjual" required>

      <label>Gambar Produk:</label>
      <input type="file" name="gambar" accept="image/*" required>

      <h3 style="margin-top:20px;">Metode Pembayaran</h3>

      <label>Nomor DANA:</label>
      <input type="text" name="metode_dana" placeholder="08xxxxxxxxxx">

      <label>Nomor OVO:</label>
      <input type="text" name="metode_ovo" placeholder="08xxxxxxxxxx">

      <label>Transfer Bank:</label>
      <textarea name="metode_bank" rows="3" placeholder="Contoh: BCA - 1234567890 a.n Nama Anda"></textarea>

      <input type="submit" value="Upload">
    </form>

  </div>

</body>
</html>
