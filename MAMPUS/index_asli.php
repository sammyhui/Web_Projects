<!DOCTYPE html>
<html lang="en" >
<head>
  
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>MamPus Marketplace Kampus</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Custom scrollbar for social media container */
    ::-webkit-scrollbar {
      width: 6px;
    }
    ::-webkit-scrollbar-thumb {
      background: #333;
      border-radius: 3px;
    }
  </style>
</head>
<body class="bg-sky-300 font-sans">
  <!-- Navbar -->
  <header class="bg-sky-900 px-6 py-3 flex items-center space-x-4 select-none">
    <div class="flex items-center space-x-2">
      <img src="images/logo.png" alt="MamPus Logo" class="w-10 h-10" />
      <div class="text-white">
        <h1 class="text-lg font-cursive font-semibold text-white">MamPus</h1>
        <p class="text-xs text-sky-400 font-light uppercase tracking-widest">MARKETPLACE KAMPUS</p>
      </div>
    </div>
    <div class="flex-grow text-center">
      <label for="search" class="text-white font-semibold text-xl mb-1 block">Search</label>
      <input
        id="search"
        type="search"
        placeholder="Get what you want!"
        class="w-3/4 max-w-xl rounded-md border border-gray-300 h-9 px-3 focus:outline-none focus:ring-2 focus:ring-sky-400"
      />
    </div>
      <div class="flex items-center gap-4 md:gap-6">
      <!-- Cart Icon - Modern -->
      <a href="checkout.php" aria-label="Keranjang" title="Keranjang"
        class="text-white hover:text-sky-300 transition-colors duration-200">
        <svg xmlns="http://www.w3.org/2000/svg"
            class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
          <path stroke-linecap="round" stroke-linejoin="round"
                d="M3 3h2l.4 2m.6 3h13l-1.5 6h-11L5 6zm1 13a1 1 0 100-2 1 1 0 000 2zm12 0a1 1 0 100-2 1 1 0 000 2z" />
        </svg>
      </a>
    <!-- Ikon profil bentuk badan -->
    <a href="upload.php" aria-label="Profil Pengguna" title="Profil Pengguna"
            class="w-10 h-10 bg-white rounded-full flex items-center justify-center hover:bg-sky-300 transition">
      <svg xmlns="http://www.w3.org/2000/svg"
          class="h-6 w-6 text-sky-900" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M16 14c1.656 0 3 .895 3 2v1a1 1 0 01-1 1H6a1 1 0 01-1-1v-1c0-1.105 1.344-2 3-2h8z" />
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M12 12a4 4 0 100-8 4 4 0 000 8z" />
      </svg>
  </a>

    </div>
  </header>

  <!-- Categories -->
<section class="mt-6 mx-auto max-w-7xl px-4">
  <div class="bg-sky-400 rounded-lg grid grid-cols-4 gap-10 p-6 shadow-inner shadow-sky-500/50">

    <a href="belanja.php" class="bg-white p-3 rounded-lg shadow flex flex-col items-center cursor-pointer hover:shadow-xl transition no-underline">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 text-sky-900 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3 9h18M9 9v12m6-12v12m-6-12V6a3 3 0 116 0v3" />
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 9v12m12-12v8" />
      </svg>
      <span class="mt-1 text-sm font-semibold text-sky-900 text-center">BELANJA</span>
    </a>

    <a href="jasa.php" class="bg-white p-3 rounded-lg shadow flex flex-col items-center cursor-pointer hover:shadow-xl transition no-underline">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 text-sky-900 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M8 9a3 3 0 116 0 3 3 0 01-6 0z" />
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 14v7m0 0H9m3 0h3" />
        <path stroke-linecap="round" stroke-linejoin="round" d="M16 11h4a2 2 0 012 2v4a2 2 0 01-2 2h-4" />
        <path stroke-linecap="round" stroke-linejoin="round" d="M8 11H4a2 2 0 00-2 2v4a2 2 0 002 2h4" />
      </svg>
      <span class="mt-1 text-sm font-semibold text-sky-900 text-center">JASA</span>
    </a>

    <a href="sewa.php" class="bg-white p-3 rounded-lg shadow flex flex-col items-center cursor-pointer hover:shadow-xl transition no-underline">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 text-sky-900 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h8m-8 4h8m4-8h2a2 2 0 012 2v8a2 2 0 01-2 2h-2" />
        <rect width="8" height="8" x="4" y="8" rx="1" ry="1" />
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 20v-4" />
      </svg>
      <span class="mt-1 text-sm font-semibold text-sky-900 text-center">SEWA</span>
    </a>

    <a href="event.php" class="bg-white p-3 rounded-lg shadow flex flex-col items-center cursor-pointer hover:shadow-xl transition no-underline">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 text-sky-900 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
        <line x1="16" y1="2" x2="16" y2="6" />
        <line x1="8" y1="2" x2="8" y2="6" />
        <line x1="3" y1="10" x2="21" y2="10" />
      </svg>
      <span class="mt-1 text-sm font-semibold text-sky-900 text-center">EVENTS</span>
    </a>

  </div>
</section>

  <!-- Main content -->
  <main class="max-w-7xl mx-auto mt-6 px-4 grid grid-cols-12 gap-6">

    <!-- Left: Event Hari Ini -->
    <section class="col-span-8 bg-sky-100 rounded-md p-4 shadow-lg">
      <div class="bg-yellow-400 inline-block px-3 py-1 rounded-md font-extrabold text-xs uppercase mb-3 tracking-wider select-none">EVENT HARI INI</div>
      <div class="rounded-md overflow-hidden shadow-md mb-4">
       <img src="images/event.png" alt="Live Event STIKOM Yos Sudarso" style="width: 100%; height: auto; display: block;" />


      </div>
      <div class="text-xs max-h-96 overflow-auto bg-white p-4 rounded-md border border-sky-300 text-sky-900 shadow-inner" style="font-family: 'Inter', sans-serif; line-height: 1.5;">
        <p><strong>JUDUL:</strong> WISUDA SARJANA DAN AHLI MADYA STIKOM YOS SUDARSO 21 Oktober 2024</p>
        <p><strong>Details:</strong></p>
        <ul class="list-disc list-inside mb-3">
          <li>Hari, tanggal: Senin, 21 Oktober 2024</li>
          <li>Tempat: Pusat Heritage Hotel Purwokerto</li>
          <li>Acara live streaming oleh kanal Youtube resmi STIKOM Yos Sudarso</li>
        </ul>
        <p><strong>Info kontak dan Sosial Media resmi:</strong></p>
        <ul class="list-disc list-inside">
          <li>Youtube: STIKOM Yos Sudarso</li>
          <li>Instagram: @stikomyossudarso</li>
        </ul>
        <p class="mt-3 text-sm text-sky-700 font-semibold">#Wisuda #STIKOMYosSudarso #Purwokerto #OnlineWisuda #LiveStreaming #EventKampus</p>
      </div>

    </section>

    <!-- Right: Upcoming Events -->
<section class="col-span-4">
  <h2 class="font-semibold text-sky-900 mb-3">UPCOMING EVENTS</h2>
  <div class="space-y-4">

    <div class="rounded-md overflow-hidden shadow-lg relative cursor-pointer group h-[320px]">
      <img src="images/p1.png" alt="Poster 1" class="w-full h-full object-contain bg-white" />
      <button class="absolute bottom-3 left-1/2 -translate-x-1/2 bg-red-600 px-5 py-1 text-sm font-bold text-white rounded-md shadow-lg opacity-90 hover:opacity-100 transition">
        VIEW
      </button>
    </div>


    <div class="rounded-md overflow-hidden shadow-lg relative cursor-pointer group h-[320px]">
      <img src="images/p2.png" alt="Poster 4" class="w-full h-full object-contain bg-white" />
      <div class="absolute left-2 top-1 bg-yellow-400 text-xs text-sky-900 font-bold px-2 py-0.5 rounded transform rotate-6 shadow-md">SENI & MAHASISWA</div>
      <button class="absolute bottom-3 left-1/2 -translate-x-1/2 bg-red-600 px-5 py-1 text-sm font-bold text-white rounded-md shadow-lg opacity-90 hover:opacity-100 transition">
        DAFTARKAN DINI SEKARANG
      </button>
    </div>

    <div class="rounded-md overflow-hidden shadow-lg relative cursor-pointer group h-[320px]">
      <img src="images/p3.png" alt="Poster 5" class="w-full h-full object-contain bg-white" />
      <button class="absolute bottom-3 left-1/2 -translate-x-1/2 bg-red-600 px-5 py-1 text-sm font-bold text-white rounded-md shadow-lg opacity-90 hover:opacity-100 transition">
        VIEW
      </button>
    </div>

  </div>
</section>


  </main>

  <!-- Bottom section with photo and social media -->
  <section class="max-w-7xl mx-auto mt-8 px-4 flex space-x-6 select-none">
    <!-- Image Left -->
    <div class="flex-1 max-w-xs rounded-lg overflow-hidden bg-white shadow-lg">
      <img src="images/p4.jpg" alt="Two young men official photo" class="w-full object-cover" />
    </div>
    <!-- Social Media Right -->
    <div class="w-60 flex flex-col space-y-2 bg-sky-100 rounded-lg p-4 shadow-lg">
      <div class="text-sky-900 uppercase text-xs font-bold tracking-widest mb-2 select-none border-b border-sky-400 pb-1">SOCIAL MEDIA</div>
      <div class="text-sm font-semibold text-sky-900 mb-1 text-center select-none">Ikuti Kami</div>

      <a href="https://wa.me/085734222225" target="_blank" rel="noopener" class="flex items-center bg-white shadow px-3 py-2 rounded-md space-x-3 hover:bg-sky-400 hover:text-white transition">
        <img src="https://cdn-icons-png.flaticon.com/512/5968/5968841.png" alt="WhatsApp" class="h-6 w-6" />
        <span>0857-3422-2225</span>
      </a>

      <a href="https://instagram.com/mamipuskampus" target="_blank" rel="noopener" class="flex items-center bg-white shadow px-3 py-2 rounded-md space-x-3 hover:bg-gradient-to-r hover:from-pink-500 hover:to-yellow-400 hover:text-white transition">
        <img src="https://cdn-icons-png.flaticon.com/512/174/174855.png" alt="Instagram" class="h-6 w-6 rounded-full" />
        <span>@mamipuskampus</span>
      </a>

      <a href="https://twitter.com/mamipuskampus" target="_blank" rel="noopener" class="flex items-center bg-white shadow px-3 py-2 rounded-md space-x-3 hover:bg-sky-500 hover:text-white transition">
        <img src="https://cdn-icons-png.flaticon.com/512/733/733579.png" alt="Twitter" class="h-6 w-6" />
        <span>Marketplace Kampus</span>
      </a>

      <a href="https://youtube.com/mampuskampus" target="_blank" rel="noopener" class="flex items-center bg-white shadow px-3 py-2 rounded-md space-x-3 hover:bg-red-600 hover:text-white transition">
        <img src="https://cdn-icons-png.flaticon.com/512/1384/1384060.png" alt="YouTube" class="h-6 w-6" />
        <span>MamPus</span>
      </a>
    </div>
  </section>
<?php include'template/footer.php'; ?>
</body>
</html>

