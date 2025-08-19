<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Jasa Profesional</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');
    /* Reset dan base */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', sans-serif;
      background:rgb(210, 228, 251);
      color: #2c3e50;
      /* Hapus padding ini supaya header nempel full ke kiri/kanan */
      /* padding: 20px; */
      margin: 0; /* Pastikan gak ada margin juga */
    }

    /* Header dengan gradient & layout modern */
    header {
      background: linear-gradient(90deg, #007ACC 0%, #009FE3 100%);
      color: white;
      /* Hapus padding agar full nempel */
      padding: 15px 20px; /* Bisa kamu sesuaikan kecil atau hilangkan juga */
      border-radius: 0; /* Hilangkan rounded corner */
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
      width: 100vw; /* pastikan selebar viewport */
      left: 0; /* pastikan posisi kiri nol */
      top: 0; /* menempel di atas */
     
    }

    /* Posisi tombol dan logo tetap di kiri */
    .left-header {
      display: flex;
      align-items: center;
      position: absolute;
      left: 20px; /* Sesuaikan */
      gap: 14px;
    }

    /* Tombol back dengan gaya minimalis */
   .back-button {
    width: 40px;
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    background: white;
    color: #007ACC;
    border: none;
    border-radius: 50%;
    font-size: 18px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
  }


    .back-button:hover {
      background-color: #e0f1ff;
    }

    /* Logo dibungkus dalam badge semi-transparan */
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
      margin-bottom: 2px;
      font-weight: 700;
    }

    .logo-text h2 {
      font-size: 12px;
      font-weight: 400;
      opacity: 0.9;
      margin: 0;
    }

    /* Judul TUTOR di tengah */
    .center-title {
      font-size: 26px;
      font-weight: 700;
      letter-spacing: 1px;
      text-align: center;
    }
    .profile-card {
      transition: all 0.3s ease;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 12px;
      background: #fff;
      cursor: pointer;
      will-change: transform, box-shadow;
      backface-visibility: hidden;
      transform-style: preserve-3d;
      -webkit-font-smoothing: antialiased;
      text-rendering: optimizeLegibility;
    }

    .profile-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 12px 24px rgba(0, 123, 255, 0.25);
      border: 2px solid #007BFF;
    }



    .btn-chat {
      border: 2px solid #3b82f6;
      background-color: #cce4ff; /* biru sangat terang */
      color: #000; /* teks hitam jelas */
      font-weight: 600;
      padding: 0.6em 1.6em;
      border-radius: 9999px;
      box-shadow: 0 4px 10px rgba(59, 130, 246, 0.4);
      transition: all 0.35s ease;
      cursor: pointer;
      user-select: none;
    }

    .btn-chat:hover,
    .btn-chat:focus,
    .btn-chat:active {
      background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
      box-shadow: 0 8px 20px rgba(37, 99, 235, 0.6);
      color: #fff; /* putih saat hover/fokus/klik */
      transform: scale(1.05);
      outline: none;
    }



  </style>
</head>
<body class="min-h-screen">

  <!-- Header -->
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

  <!-- Konten -->
  <main class="container mx-auto px-4 py-10 space-y-12">

    <!-- === PROFIL 1 === -->
    <section class="profile-card bg-white rounded-xl overflow-hidden shadow-sm">
      <div class="flex flex-col md:flex-row">
        <!-- Foto Profil -->
        <div class="md:w-1/3 p-6 flex justify-center items-center">
          <img class="w-40 h-40 rounded-full object-cover border-4 border-blue-100"
            src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/5da6723b-acd2-4d27-a536-181f7663f121.png"
            alt="Foto Andi Pratama" />
        </div>

        <!-- Info Profil -->
        <div class="md:w-2/3 p-6">
          <h2 class="text-2xl font-bold text-gray-800 mb-1">Andi Pratama</h2>
          <p class="text-blue-600 font-medium mb-3">Prodi: Teknik Informatika</p>
          <p class="text-gray-700 mb-4">
            Pengembang web dan mobile dengan lebih dari 5 tahun pengalaman dalam menciptakan solusi digital.
          </p>
          <button class="btn-chat text-blue-500 px-5 py-2 rounded-lg font-medium">Chat Sekarang</button>
        </div>
      </div>

      <!-- Layanan -->
      <div class="p-6 border-t border-gray-100">
        <h3 class="text-lg font-semibold mb-3 text-gray-800">Layanan:</h3>
        <ul class="grid grid-cols-1 md:grid-cols-2 gap-2 text-gray-600">
          <li class="border-l-4 border-blue-500 pl-3">Pembuatan Website</li>
          <li class="border-l-4 border-blue-500 pl-3">Perbaikan Laptop/HP</li>
          <li class="border-l-4 border-blue-500 pl-3">Desain PPT</li>
          <li class="border-l-4 border-blue-500 pl-3">Ketik Laporan</li>
        </ul>
      </div>

      <!-- Testimoni -->
      <div class="p-6 border-t border-gray-100">
        <h3 class="text-lg font-semibold mb-3 text-gray-800">Testimoni:</h3>
        <div class="space-y-4">
          <div class="bg-gray-50 p-4 rounded-lg">
            <p class="italic text-sm text-gray-700">“Trusted dan amanah! Hasilnya juga bagus, good Bro”</p>
            <p class="text-right text-sm font-medium text-blue-600 mt-2">– Rina A.</p>
          </div>
          <div class="bg-gray-50 p-4 rounded-lg">
            <p class="italic text-sm text-gray-700">“Desain PPTnya bagus bgtttt, makasih!”</p>
            <p class="text-right text-sm font-medium text-blue-600 mt-2">– Dedi R.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- === PROFIL 2 === -->
    <section class="profile-card bg-white rounded-xl overflow-hidden shadow-sm">
      <div class="flex flex-col md:flex-row">
        <!-- Foto Profil -->
        <div class="md:w-1/3 p-6 flex justify-center items-center">
          <img class="w-40 h-40 rounded-full object-cover border-4 border-blue-100"
            src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/1fb4770e-5ce0-40c9-9ca6-eb8de9453c91.png"
            alt="Foto Jane Doe" />
        </div>

        <!-- Info Profil -->
        <div class="md:w-2/3 p-6">
          <h2 class="text-2xl font-bold text-gray-800 mb-1">Reyhan Adi</h2>
          <p class="text-blue-600 font-medium mb-3">Prodi: Desain Komunikasi Visual</p>
          <p class="text-gray-700 mb-4">
            Desainer grafis fokus pada UI/UX dan branding dengan sentuhan estetika modern.
          </p>
          <button class="btn-chat text-blue-500 px-5 py-2 rounded-lg font-medium">Chat Sekarang</button>
        </div>
      </div>

      <!-- Layanan -->
      <div class="p-6 border-t border-gray-100">
        <h3 class="text-lg font-semibold mb-3 text-gray-800">Layanan:</h3>
        <ul class="grid grid-cols-1 md:grid-cols-2 gap-2 text-gray-600">
          <li class="border-l-4 border-blue-500 pl-3">Desain UI/UX Website & Aplikasi</li>
          <li class="border-l-4 border-blue-500 pl-3">Branding dan Identitas Visual</li>
          <li class="border-l-4 border-blue-500 pl-3">Desain Logo & Packaging</li>
          <li class="border-l-4 border-blue-500 pl-3">Photoshop, Canva, Poster</li>
        </ul>
      </div>

      <!-- Testimoni -->
      <div class="p-6 border-t border-gray-100">
        <h3 class="text-lg font-semibold mb-3 text-gray-800">Testimoni:</h3>
        <div class="space-y-4">
          <div class="bg-gray-50 p-4 rounded-lg">
            <p class="italic text-sm text-gray-700">“Hasil desain branding kami jadi sangat estetik dan memukau.”</p>
            <p class="text-right text-sm font-medium text-blue-600 mt-2">– Kevin S.</p>
          </div>
          <div class="bg-gray-50 p-4 rounded-lg">
            <p class="italic text-sm text-gray-700">“Sangat kreatif dan cepat dalam pengerjaan desain sosial media.”</p>
            <p class="text-right text-sm font-medium text-blue-600 mt-2">– Lia M.</p>
          </div>
        </div>
      </div>
    </section>

  </main>

  <script>
    document.querySelectorAll('.btn-chat').forEach(button => {
      button.addEventListener('click', () => {
        alert('Fitur chat akan segera dibuka...');
      });
    });
  </script>
<?php include 'template/footer.php'; ?>
</body>
</html>
