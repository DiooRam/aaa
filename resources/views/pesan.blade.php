<html>
 <head>
  <title>
   Pesan Masuk
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Roboto', sans-serif;
        }
  </style>
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

 <body class="bg-gray-100">
  <div class="flex justify-between items-center p-4 border-b border-gray-300">
   <div>
   </div>
   <div class="flex items-center space-x-2">
    <i class="fas fa-comment-dots text-xl">
    </i>
    <span class="text-lg font-semibold">
     Hello, Dio Ramadhan
    </span>
   </div>
  </div>
  <div class="flex flex-col items-center mt-10">
   <h1 class="text-2xl font-bold mb-6">
    Pesan Masuk
   </h1>
   <div class="relative w-3/4 max-w-2xl">
    <input class="w-full p-4 pl-10 pr-20 rounded-full shadow-md focus:outline-none" placeholder="Cari" type="text"/>
    <button class="absolute right-0 top-0 h-full px-6 bg-blue-600 rounded-r-full text-white">
     <i class="fas fa-search">
     </i>
    </button>
   </div>
   <div class="mt-10 w-3/4 max-w-2xl bg-white p-4 rounded-lg shadow-md">
    <div class="flex items-center space-x-4">
     <img alt="Profile picture of Dr Tirta Handoko" class="w-10 h-10 rounded-full" height="40" src="{{ asset(path: 'images/tirta.jpg') }}"width="40"/>
     <div class="flex-1">
      <div class="flex justify-between items-center">
       <span class="font-bold">
        Dr Tirta Handoko
       </span>
       <span class="text-sm text-gray-500">
        5:41 AM
       </span>
      </div>
      <p class="text-sm text-gray-600">
       Baik
      </p>
     </div>
    </div>
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
