<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Doctor Dashboard
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Inter', sans-serif;
        }
  </style>
 </head>
 <body class="bg-gray-100 p-6">

   <!-- Header -->
   <div class="flex justify-between items-center mb-6">
    <div class="relative">
     <input class="pl-10 pr-4 py-2 rounded-full bg-white shadow-sm focus:outline-none" placeholder="Search" type="text"/>
     <i class="fas fa-search absolute left-3 top-3 text-gray-400">
     </i>
    </div>
    <div class="flex items-center space-x-4">
     <i class="fas fa-bell text-gray-500">
     </i>
     <i class="fas fa-cog text-gray-500">
     </i>
     <div class="flex items-center space-x-2">
      <img alt="Profile picture" class="w-10 h-10 rounded-full" height="40" src="{{ asset(path: 'images/tirta.jpg') }}" width="40"/>
      <span class="font-semibold">
       Dr. Tirta Handoko
      </span>
     </div>
    </div>
   </div>
    <!-- Navbar Section -->
    <nav class="py-4 bg-gray-100">
            <div class="container mx-auto flex justify-center space-x-6">
                <a href="#akun" class="text-blue-600 hover:text-blue-800">Dashboard</a>
                <a href="#akun" class="text-blue-600 hover:text-blue-800">Akun</a>
            </div>
        </nav>
    </header>
<body class="bg-gray-100 p-4">
  <div class="max-w-4xl mx-auto">
    <h1 class="text-2xl font-bold text-center mb-6">Daftar Pengajuan Booking</h1>

    <!-- Booking Card 1 -->
    <div class="bg-white rounded-lg shadow-md p-4 mb-4 flex items-center">
      <img
        alt="Patient Avatar"
        class="w-16 h-16 rounded-full"
        src="https://via.placeholder.com/80"
        width="80"
        height="80"
      />
      <div class="ml-4 flex-1">
        <h2 class="text-lg font-semibold">Nama Pasien: John Doe</h2>
        <p class="text-gray-600">Layanan: Konsultasi Jantung</p>
        <p class="text-gray-500 text-sm mt-1">Jadwal: Selasa, 28 Nov 2024, 10:00 AM</p>
        <p class="text-gray-500 text-sm mt-1">Catatan: Keluhan nyeri di dada selama 3 hari terakhir.</p>
      </div>
      <div class="flex flex-col items-end">
        <button class="bg-green-500 text-white px-4 py-2 rounded mb-2 hover:bg-green-600">
          Terima
        </button>
        <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
          Tolak
        </button>
      </div>
    </div>

    <!-- Booking Card 2 -->
    <div class="bg-white rounded-lg shadow-md p-4 mb-4 flex items-center">
      <img
        alt="Patient Avatar"
        class="w-16 h-16 rounded-full"
        src="https://via.placeholder.com/80"
        width="80"
        height="80"
      />
      <div class="ml-4 flex-1">
        <h2 class="text-lg font-semibold">Nama Pasien: Jane Smith</h2>
        <p class="text-gray-600">Layanan: Pemeriksaan Diabetes</p>
        <p class="text-gray-500 text-sm mt-1">Jadwal: Rabu, 29 Nov 2024, 2:00 PM</p>
        <p class="text-gray-500 text-sm mt-1">Catatan: Riwayat diabetes tipe 2, pemeriksaan rutin.</p>
      </div>
      <div class="flex flex-col items-end">
        <button class="bg-green-500 text-white px-4 py-2 rounded mb-2 hover:bg-green-600">
          Terima
        </button>
        <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
          Tolak
        </button>
      </div>
    </div>

    <!-- Booking Card 3 -->
    <div class="bg-white rounded-lg shadow-md p-4 mb-4 flex items-center">
      <img
        alt="Patient Avatar"
        class="w-16 h-16 rounded-full"
        src="https://via.placeholder.com/80"
        width="80"
        height="80"
      />
      <div class="ml-4 flex-1">
        <h2 class="text-lg font-semibold">Nama Pasien: Michael Lee</h2>
        <p class="text-gray-600">Layanan: Pemeriksaan EKG</p>
        <p class="text-gray-500 text-sm mt-1">Jadwal: Kamis, 30 Nov 2024, 11:00 AM</p>
        <p class="text-gray-500 text-sm mt-1">Catatan: Evaluasi kelainan irama jantung.</p>
      </div>
      <div class="flex flex-col items-end">
        <button class="bg-green-500 text-white px-4 py-2 rounded mb-2 hover:bg-green-600">
          Terima
        </button>
        <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
          Tolak
        </button>
      </div>
    </div>
  </div>
  <footer class="bg-blue-500 shadow mt-4">
    <div class="container mx-auto py-4 px-6 flex justify-between items-center">
      <!-- Icon Pesan -->


      <!-- Hak Cipta -->
      <div>
        <p class="text-gray-100 text-sm">&copy; 2024 Medisin. All Rights Reserved.</p>
      </div>
    </div>
  </footer>
</body>
</html>
