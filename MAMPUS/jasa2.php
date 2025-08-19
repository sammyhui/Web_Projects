<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Marketplace Jasa</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', sans-serif;
      background: #f4f9ff;
      color: #2c3e50;
    }

    header {
      background: linear-gradient(90deg, #007ACC 0%, #009FE3 100%);
      color: white;
      padding: 15px 20px;
      display: flex;
      justify-content: center;
      align-items: center;
      position: sticky;
      top: 0;
      width: 100%;
      z-index: 1000;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
    }

    .left-header {
      display: flex;
      align-items: center;
      position: absolute;
      left: 20px;
      gap: 14px;
    }

    .back-button {
      background: white;
      color: #007ACC;
      border: none;
      border-radius: 50%;
      padding: 10px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    .back-button:hover {
      background-color: #e0f1ff;
    }

    .logo-container {
      display: flex;
      align-items: center;
      gap: 10px;
      background-color: rgba(255, 255, 255, 0.15);
      padding: 6px 12px;
      border-radius: 10px;
      backdrop-filter: blur(3px);
    }

    .logo-container img {
      height: 42px;
    }

    .logo-text h1 {
      font-size: 18px;
      font-weight: 700;
      margin-bottom: 2px;
    }

    .logo-text h2 {
      font-size: 12px;
      font-weight: 400;
      opacity: 0.9;
      margin: 0;
    }

    .center-title {
      font-size: 24px;
      font-weight: 700;
      letter-spacing: 1px;
    }

    main {
      max-width: 1200px;
      margin: 40px auto;
      padding: 0 20px;
    }

    .services-container {
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
      justify-content: center;
    }

    .service-column {
      flex: 1 1 300px;
      background-color: #fdfdfd;
      border-radius: 12px;
      padding: 20px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
      transition: transform 0.3s ease;
    }

    .service-column:hover {
      transform: translateY(-5px);
    }

    .pink {
      background-color: #ffeaea;
    }

    .blue {
      background-color: #e4f5ff;
    }

    .yellow {
      background-color: #fff8dc;
    }

    .service-card {
      margin-bottom: 15px;
      padding: 15px;
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
      transition: background-color 0.3s ease;
    }

    .service-card:hover {
      background-color: #f5faff;
    }

    .service-card h3 {
      font-size: 16px;
      font-weight: 700;
      margin-bottom: 6px;
    }

    .service-card p {
      font-size: 14px;
      color: #555;
    }

    footer {
      text-align: center;
      padding: 20px;
      font-size: 14px;
      color: #777;
      background-color: #eeeeee;
      margin-top: 40px;
    }

    @media (max-width: 768px) {
      .center-title {
        font-size: 18px;
      }

      .services-container {
        flex-direction: column;
        gap: 30px;
      }

      .left-header {
        position: absolute;
        left: 10px;
        top: 50%;
        transform: translateY(-50%);
      }
    }
  </style>
</head>

<body>

<header>
  <div class="left-header">
    <button class="back-button" onclick="history.back()">
      <i class="fas fa-arrow-left"></i>
    </button>
    <div class="logo-container">
      <img src="images/logo.png" alt="MamPus Logo"/>
      <div class="logo-text">
        <h1>MamPus</h1>
        <h2>Marketplace Kampus</h2>
      </div>
    </div>
  </div>
  <div class="center-title">JASA</div>
</header>

<main>
  <section class="services-container">
    <div class="service-column pink">
      <div class="service-card">
        <h3>JASA EDITING VIDEO</h3>
        <p>Nomor: 0820 3657 1842 (Owner)</p>
      </div>
      <div class="service-card">
        <h3>JASA EDITING PPT</h3>
        <p>Nomor: 0820 3657 1842 (Owner)</p>
      </div>
      <div class="service-card">
        <h3>JASA EDITING WORD</h3>
        <p>Nomor: 0820 3657 1842 (Owner)</p>
      </div>
    </div>

    <div class="service-column blue">
      <div class="service-card">
        <h3>JASA DESAIN CANVA</h3>
        <p>Nomor: 0820 3657 1842 (Owner)</p>
      </div>
      <div class="service-card">
        <h3>JASA POSTER DIGITAL</h3>
        <p>Nomor: 0820 3657 1842 (Owner)</p>
      </div>
      <div class="service-card">
        <h3>JASA EDIT PDF</h3>
        <p>Nomor: 0820 3657 1842 (Owner)</p>
      </div>
    </div>

    <div class="service-column yellow">
      <div class="service-card">
        <h3>JASA KETIK ULANG</h3>
        <p>Nomor: 0820 3657 1842 (Owner)</p>
      </div>
      <div class="service-card">
        <h3>JASA CV PROFESIONAL</h3>
        <p>Nomor: 0820 3657 1842 (Owner)</p>
      </div>
      <div class="service-card">
        <h3>JASA PEMBUATAN PROPOSAL</h3>
        <p>Nomor: 0820 3657 1842 (Owner)</p>
      </div>
    </div>
  </section>
</main>

<?php include 'template/footer.php'; ?>

</body>
</html>
