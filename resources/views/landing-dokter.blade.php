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
                <a href="#akun" class="text-blue-600 hover:text-blue-800">Akun</a>
                <a href="#akun" class="text-blue-600 hover:text-blue-800">Pengajuan</a>
            </div>
        </nav>
    </header>
   <!-- Main Content -->
   <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <!-- Left Column -->
    <div class="lg:col-span-2 space-y-6">
     <!-- Greeting and Stats -->
     <div class="bg-white p-6 rounded-lg shadow-sm flex items-center justify-between">
      <div>
       <h1 class="text-2xl font-semibold">
        Selamat Pagi
        <span class="text-blue-500">
         Dr. Tirta Handoko!
        </span>
       </h1>
       <div class="mt-4">
        <h2 class="text-4xl font-bold">
         5
        </h2>
        <p class="text-gray-500">
         Pasien Hari Ini
        </p>
       </div>
       <div class="flex space-x-4 mt-4">
        <div class="bg-teal-100 text-teal-600 p-4 rounded-lg">
         <h3 class="text-xl font-semibold">
          1
         </h3>
         <p>
          Pasien Baru
         </p>
         <p class="text-sm">
          20%
         </p>
        </div>
        <div class="bg-red-100 text-red-600 p-4 rounded-lg">
         <h3 class="text-xl font-semibold">
          4
         </h3>
         <p>
          Pasien Lama
         </p>
         <p class="text-sm">
          80%
         </p>
        </div>
       </div>
      </div>
      <img alt="Doctor image" class="rounded-lg" height="250" src="{{ asset(path: 'images/tirta.jpg') }}" width="250"/>
     </div>
     <!-- Patient List and Consultation -->
     <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <!-- Patient List -->
      <div class="bg-white p-6 rounded-lg shadow-sm">
       <h2 class="text-xl font-semibold mb-4">
        Daftar Pasien Hari Ini
       </h2>
       <div class="space-y-4">
        <div class="flex items-center justify-between">
         <div class="flex items-center space-x-4">
          <div class="w-10 h-10 bg-pink-100 text-pink-600 rounded-full flex items-center justify-center font-semibold">
           AS
          </div>
          <div>
           <h3 class="font-semibold">
            Amba Son
           </h3>
           <p class="text-gray-500 text-sm">
            Konsultasi Mingguan
           </p>
          </div>
         </div>
         <span class="text-pink-600">
          09:00 WIB
         </span>
        </div>
        <div class="flex items-center justify-between">
         <div class="flex items-center space-x-4">
          <div class="w-10 h-10 bg-green-100 text-green-600 rounded-full flex items-center justify-center font-semibold">
           RL
          </div>
          <div>
           <h3 class="font-semibold">
            Rusdi Lan
           </h3>
           <p class="text-gray-500 text-sm">
            Pemeriksaan Rutin
           </p>
          </div>
         </div>
         <span class="text-green-600">
          11:00 WIB
         </span>
        </div>
        <div class="flex items-center justify-between">
         <div class="flex items-center space-x-4">
          <div class="w-10 h-10 bg-purple-100 text-purple-600 rounded-full flex items-center justify-center font-semibold">
           NM
          </div>
          <div>
           <h3 class="font-semibold">
            Narji Mut
           </h3>
           <p class="text-gray-500 text-sm">
            Cek Kondisi
           </p>
          </div>
         </div>
         <span class="text-purple-600">
          13:00 WIB
         </span>
        </div>
        <div class="flex items-center justify-between">
         <div class="flex items-center space-x-4">
          <div class="w-10 h-10 bg-pink-100 text-pink-600 rounded-full flex items-center justify-center font-semibold">
           RA
          </div>
          <div>
           <h3 class="font-semibold">
            Rehan Andre
           </h3>
           <p class="text-gray-500 text-sm">
            Kontrol Harian
           </p>
          </div>
         </div>
         <span class="text-pink-600">
          14:00 WIB
         </span>
        </div>
       </div>
      </div>
      <!-- Consultation -->
      <div class="bg-white p-6 rounded-lg shadow-sm">
       <h2 class="text-xl font-semibold mb-4">
        Konsultasi
       </h2>
       <div class="space-y-4">
        <div class="flex items-center space-x-4">
         <div class="w-10 h-10 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center font-semibold">
          FK
         </div>
         <div>
          <h3 class="font-semibold">
           Fuad Ksatria
          </h3>
          <p class="text-gray-500 text-sm">
           Male - 30 Years 3 Months
          </p>
         </div>
        </div>
        <div class="flex space-x-4">
         <div class="flex items-center space-x-2">
          <i class="fas fa-thermometer-half text-blue-600">
          </i>
          <span>
           Suhu Tubuh
          </span>
         </div>
         <div class="flex items-center space-x-2">
          <i class="fas fa-cough text-blue-600">
          </i>
         </div>
         <div class="flex items-center space-x-2">
          <i class="fas fa-heartbeat text-blue-600">
          </i>
          <span>
           Detak Jantung
          </span>
         </div>
        </div>
        <div>
         <h4 class="font-semibold">
          Pemeriksaan Terakhir
         </h4>
         <p class="text-gray-500 text-sm">
            Dr. Tirta Handoko pada 20 November 2024
         </p>
        </div>
        <div>
         <h4 class="font-semibold">
          Observasi
         </h4>
         <p class="text-gray-500 text-sm">
          Kadar Gula Darah Tinggi
         </p>
        </div>
        <div>
         <h4 class="font-semibold">
          Resep Dari Dokter
         </h4>
         <p class="text-gray-500 text-sm">
          Ibuprofen - 2 Kali Sehari
         </p>
         <p class="text-gray-500 text-sm">
          Vitamin D - Pagi dan Malam Sebelum Makan
         </p>
        </div>
       </div>
      </div>
     </div>
    </div>
    <!-- Right Column -->
    <div class="space-y-6">
     <!-- Calendar -->
     <div class="bg-white p-6 rounded-lg shadow-sm">
      <div class="flex justify-between items-center mb-4">
       <h2 class="text-xl font-semibold">
        Kalender
       </h2>
       <i class="fas fa-ellipsis-h text-gray-500">
       </i>
      </div>
      <div class="text-center">
       <div class="text-gray-500">
        November 2024
       </div>
       <div class="grid grid-cols-7 gap-2 mt-2">
        <div>
         Min
        </div>
        <div>
         Sen
        </div>
        <div>
         Sel
        </div>
        <div>
         Rab
        </div>
        <div>
         Kam
        </div>
        <div>
         Jum
        </div>
        <div>
         Sat
        </div>
        <div class="text-gray-400">
         28
        </div>
        <div class="text-gray-400">
         29
        </div>
        <div class="text-gray-400">
         30
        </div>
        <div class="text-gray-400">
         31
        </div>
        <div>
         1
        </div>
        <div>
         2
        </div>
        <div>
         3
        </div>
        <div>
         4
        </div>
        <div>
         5
        </div>
        <div>
         6
        </div>
        <div>
         7
        </div>
        <div>
         8
        </div>
        <div>
         9
        </div>
        <div>
         10
        </div>
        <div>
         11
        </div>
        <div>
         12
        </div>
        <div>
         13
        </div>
        <div>
         14
        </div>
        <div>
         15
        </div>
        <div>
         16
        </div>
        <div>
         17
        </div>
        <div>
         18
        </div>
        <div>
         19
        </div>
        <div>
         20
        </div>
        <div>
         21
        </div>
        <div>
         22
        </div>
        <div>
         23
        </div>
        <div>
         24
        </div>
        <div>
         25
        </div>
        <div>
         26
        </div>
        <div>
         27
        </div>
        <div>
         28
        </div>
        <div>
         29
        </div>
        <div>
         30
        </div>
        <div class="text-gray-400">
         1
        </div>
        <div class="text-gray-400">
         2
        </div>
       </div>
      </div>
     </div>
     <!-- Upcoming -->
     <div class="bg-white p-6 rounded-lg shadow-sm">
      <h2 class="text-xl font-semibold mb-4">
       Jadwal Mendatang
      </h2>
      <div class="space-y-4">
       <div class="flex items-center space-x-4">
        <div class="w-10 h-10 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center font-semibold">
         M
        </div>
        <div>
         <h3 class="font-semibold">
          Rapat Bulanan Dokter
         </h3>
         <p class="text-gray-500 text-sm">
          30 November, 2024 | 19:00 WIB
         </p>
        </div>
       </div>
      </div>
     </div>
     <!-- Daily Read -->
     <div class="bg-white p-6 rounded-lg shadow-sm">
      <h2 class="text-xl font-semibold mb-4">
       Artikel
      </h2>
      <div class="flex items-center space-x-4">
       <img alt="Medical education image" class="w-24 h-24 rounded-lg" height="100" src="https://storage.googleapis.com/a1aa/image/WdLWHiv6HeVESyjaWlBCEVBuDtOyo6S16LXTdUvO9Pu1Hh6JA.jpg" width="100"/>
       <div>
        <h3 class="font-semibold">
         Perkembangan Sektor Telemedis di Indonesia Berkembang Cukup Pesat
        </h3>
       </div>
      </div>
     </div>
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
