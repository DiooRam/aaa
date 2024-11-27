<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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

<body class="bg-white">
    <div class="max-w-4xl mx-auto p-4">
        <div class="flex justify-end items-center mb-8">
            <div class="flex items-center space-x-2">
                <i class="fas fa-comment-dots text-black"></i>
                <span class="text-black font-semibold">Hello, Dio Ramadhan</span>
            </div>
        </div>
        <form class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Nama Depan</label>
                    <input type="text" placeholder="Enter your first name" class="mt-1 block w-full border border-blue-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Nama Belakang</label>
                    <input type="text" placeholder="Enter your last name" class="mt-1 block w-full border border-blue-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" placeholder="Enter your email" class="mt-1 block w-full border border-blue-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Nomor HP</label>
                    <input type="text" placeholder="Enter your phone number" class="mt-1 block w-full border border-blue-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Waktu Booking</label>
                <input type="text" placeholder="Type.." class="mt-1 block w-full border border-blue-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Keluhan</label>
                <textarea placeholder="Type your message..." class="mt-1 block w-full border border-blue-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm h-32"></textarea>
            </div>
            <div class="flex justify-center">
                <button type="submit" class="bg-blue-600 text-white font-semibold py-2 px-4 rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Booking</button>
            </div>
        </form>
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
