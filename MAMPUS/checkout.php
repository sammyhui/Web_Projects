<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Checkout</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f3f4f6;
      padding: 40px;
    }

    .checkout-container {
      max-width: 500px;
      margin: auto;
      background-color: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      position: relative;
    }

    h2 {
      text-align: center;
      color: #1c2340;
    }

    .back-button {
      position: absolute;
      top: 20px;
      left: 20px;
      text-decoration: none;
      background-color: #ddd;
      color: #333;
      padding: 6px 12px;
      border-radius: 5px;
      font-weight: bold;
    }

    .back-button:hover {
      background-color: #bbb;
    }

    label {
      display: block;
      margin-top: 20px;
      margin-bottom: 5px;
      font-weight: bold;
    }

    select {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    .summary {
      margin-top: 20px;
      border-top: 1px solid #ddd;
      padding-top: 20px;
    }

    .summary-item {
      display: flex;
      justify-content: space-between;
      margin-bottom: 10px;
    }

    .summary-total {
      font-weight: bold;
      font-size: 18px;
      border-top: 1px solid #ccc;
      padding-top: 10px;
    }

    button {
      margin-top: 30px;
      width: 100%;
      padding: 12px;
      background-color: #1c2340;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }

    button:hover {
      background-color: #2e3b6b;
    }

    /* Modal pop-up */
    .modal {
      display: none;
      position: fixed;
      z-index: 10;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0,0,0,0.5);
      justify-content: center;
      align-items: center;
    }

    .modal-content {
      background-color: white;
      padding: 30px;
      border-radius: 10px;
      text-align: center;
    }

    .modal-content h3 {
      color: green;
      margin: 0;
    }
  </style>
</head>
<body>

<div class="checkout-container">
  <!-- Tombol Kembali -->
  <a href="index.php" class="back-button">&larr; Kembali</a>

  <h2>Checkout</h2>

  <!-- Ringkasan Belanja -->
  <div class="summary">
    <div class="summary-item">
      <span>Produk:</span>
      <span>Gantungan Kunci</span>
    </div>
    <div class="summary-item">
      <span>Jumlah:</span>
      <span>2 pcs</span>
    </div>
    <div class="summary-item">
      <span>Harga Satuan:</span>
      <span>Rp10.000</span>
    </div>
    <div class="summary-total">
      <span>Total:</span>
      <span>Rp20.000</span>
    </div>
  </div>

  <!-- Pilih Metode Pembayaran -->
  <label for="metode">Metode Pembayaran:</label>
  <select id="metode">
    <option value="transfer">Transfer Bank</option>
    <option value="dana">Dana</option>
    <option value="ovo">OVO</option>
    <option value="gopay">GoPay</option>
    <option value="cod">COD (Bayar di Tempat)</option>
  </select>

  <!-- Tombol Bayar -->
  <button onclick="bayar()">Bayar</button>
</div>

<!-- Modal pop-up -->
<div class="modal" id="popup">
  <div class="modal-content">
    <h3>Pembayaran Berhasil!</h3>
  </div>
</div>

<script>
  function bayar() {
    document.getElementById('popup').style.display = 'flex';
    setTimeout(() => {
      document.getElementById('popup').style.display = 'none';
      // Optional redirect setelah bayar
      // window.location.href = "berhasil.php";
    }, 3000);
  }
</script>

</body>
</html>
