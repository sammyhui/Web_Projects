<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MamPus - Marketplace Kampus</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: #eef7fa;
    }

    header {
      background: #cfe1f7;
      padding: 10px 20px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .logo {
      display: flex;
      align-items: center;
    }

    .logo img {
      height: 50px;
      margin-right: 10px;
    }

    .logo-text {
      font-size: 20px;
      font-weight: bold;
      font-family: 'Georgia', serif;
    }

    .search-container {
      flex: 1;
      text-align: center;
    }

    .search-container input[type="text"] {
      width: 50%;
      padding: 10px;
      border: 2px solid #800000;
      border-radius: 5px;
      font-weight: bold;
      text-align: center;
      color: maroon;
    }

    .icons {
      display: flex;
      gap: 15px;
    }

    .icons img {
      height: 30px;
      cursor: pointer;
    }

    .hero {
      background: linear-gradient(to right, #2e4a7c, #cfe1f7);
      padding: 40px 20px;
      text-align: center;
      position: relative;
      color: #000;
    }

    .hero h2 {
      font-family: 'Brush Script MT', cursive;
      font-size: 48px;
      color: #1d2540;
      margin: 10px 0;
    }

    .hero p {
      font-size: 16px;
      color: #fff;
      letter-spacing: 1px;
    }

    .hero .highlight {
      color: #e8ff62;
      letter-spacing: 3px;
      font-weight: bold;
    }

    .students-img {
      position: absolute;
      right: 40px;
      bottom: 0;
      max-height: 300px;
    }

    @media (max-width: 768px) {
      .search-container input[type="text"] {
        width: 80%;
      }

      .students-img {
        position: static;
        display: block;
        margin: 20px auto 0;
      }
    }
  </style>
</head>
<body>

  <header>
    <div class="logo">
      <img src="logo.png" alt="Logo">
      <div>
        <div class="logo-text">MamPus</div>
        <small>Marketplace Kampus</small>
      </div>
    </div>

    <div class="search-container">
      <input type="text" placeholder="CARI DISINI">
    </div>

    <div class="icons">
      <img src="cart.png" alt="Cart">
      <img src="profile.png" alt="Profile">
      <img src="menu.png" alt="Menu">
    </div>
  </header>

  <section class="hero">
    <div class="highlight">HALO CIVITAS AKADEMIK!</div>
    <h2>Selamat Datang</h2>
    <p>DI WEBSITE KOMUNITAS KAMPUS, AYO JOIN DAN TUNJUKAN BISNISMU!</p>
    <img src="students.png" alt="Mahasiswa" class="students-img">
  </section>

</body>
</html>