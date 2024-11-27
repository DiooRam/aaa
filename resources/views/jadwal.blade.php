<html>
 <head>
  <title>
   Jadwal Konsultasi
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
 </head>
 <body class="bg-gray-100">
  <!-- Header -->
  <header class="bg-white shadow">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
      <!-- Gambar Medisin di sebelah kiri -->
      <img alt="medisin" src="{{ asset(path: '../images/medisin.png') }}" height="150" width="150" />

      <!-- Tombol Login dan Icon Pesan di sebelah kanan -->
      <div class="flex items-center space-x-4">
        <!-- Icon Pesan dan Hello -->
        <div class="flex items-center text-gray-700">
          <i class="fas fa-comment-dots text-blue-600"></i>
          <span class="ml-2">Hello, Dio Ramadhan</span>
        </div>
        <!-- Tombol Login -->
        <form action="{{ route('login-medisin') }}" method="post">
          @csrf <!-- Untuk melindungi dari CSRF -->
          <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
            Log Out
          </button>
        </form>
      </div>
    </div>

    <!-- Navbar Section -->
    <nav class="py-4 bg-gray-100">
      <div class="container mx-auto flex justify-center space-x-6">
        <a href="#home" class="text-blue-600 hover:text-blue-800">Home</a>
        <a href="#pelayanan" class="text-blue-600 hover:text-blue-800">Pelayanan</a>
        <a href="#kategori" class="text-blue-600 hover:text-blue-800">Kategori</a>
        <a href="#konsultasi" class="text-blue-600 hover:text-blue-800">Konsultasi</a>
        <a href="#lokasi" class="text-blue-600 hover:text-blue-800">Lokasi</a>
        <a href="#artikel" class="text-blue-600 hover:text-blue-800">Artikel</a>
        <a href="#tentang" class="text-blue-600 hover:text-blue-800">Tentang</a>
      </div>
    </nav>
  </header>

 <body class="bg-gray-100 flex flex-col items-center justify-center min-h-screen">
  <div class="w-full bg-white shadow-md p-4 flex justify-between items-center">
   <div>
   </div>
   <div class="flex items-center space-x-2">
    <i class="fas fa-comment-dots text-black">
    </i>
    <span class="text-black font-semibold">
     Hello, Dio Ramadhan
    </span>
   </div>
  </div>
  <div class="mt-8 text-center">
   <h1 class="text-2xl font-semibold">
    Jadwal Konsultasi
   </h1>
  </div>
  <div class="mt-8 bg-white shadow-md rounded-lg p-6 w-3/4 max-w-lg">
   <div class="flex items-center space-x-4">
    <img alt="Doctor's portrait" class="w-16 h-16 rounded-full" height="100" src="{{ asset(path: 'images/tirta.jpg') }}" width="100"/>
    <div>
     <h2 class="text-lg font-semibold">
      Dr. Tirta Handoko
     </h2>
     <p class="text-sm text-gray-600">
     Spesialis Penyakit Dalam
      <br/>
    </p>
    </div>
   </div>
   <div class="mt-4 bg-blue-50 p-4 rounded-lg flex justify-between items-center">
    <div class="flex items-center space-x-2">
     <i class="fas fa-calendar-alt text-blue-500">
     </i>
     <span class="text-sm text-gray-600">
      Tanggal 26 November, 2024
     </span>
    </div>
    <div class="flex items-center space-x-2">
     <i class="fas fa-clock text-blue-500">
     </i>
     <span class="text-sm text-gray-600">
      At 15:30 WIB
     </span>
    </div>
    <a class="text-sm text-blue-500" href="#">
     Ubah Tanggal &amp; Waktu
    </a>
   </div>
   <div class="mt-4 flex items-center space-x-2">
   </div>
   <div class="mt-6 flex justify-end space-x-4">
    <button class="bg-gray-200 text-gray-600 px-4 py-2 rounded-lg">
     Batalkan
    </button>
    <button class="bg-blue-600 text-white px-4 py-2 rounded-lg">
     Menunggu
    </button>
   </div>
  </div>
  
  <!-- Footer -->
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
