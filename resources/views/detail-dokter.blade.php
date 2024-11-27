<!DOCTYPE html>
<html>
<head>
  <title>Doctor Appointment</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
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

  <!-- Main Content -->
  <main class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="w-full max-w-4xl bg-white rounded-lg shadow-lg p-8">
      <!-- Content Section -->
      <div class="border-2 border-blue-500 rounded-lg p-8 flex">
        <!-- Gambar Dokter -->
        <div class="w-1/3 flex justify-center items-center">
          <img alt="Doctor's portrait" src="{{ asset(path: 'images/tirta.jpg') }}" height="200" width="200" class="rounded-lg" />
        </div>

        <!-- Informasi Dokter -->
        <div class="w-2/3 pl-8">
          <h2 class="text-2xl font-bold">Dr. Tirta Handoko</h2>
          <p class="text-gray-600 mb-4">Spesialis Penyakit Dalam</p>

          <!-- Slot Waktu -->
          <div class="bg-gray-100 p-4 rounded-lg">
            <!-- Slot Hari -->
            <div class="flex justify-between mb-2">
              <div class="text-sm">
                <p class="font-bold">Hari Ini</p>
                <p class="text-blue-500">3 Slot Tersedia</p>
              </div>
              <div class="text-sm">
                <p class="font-bold">Besok</p>
                <p class="text-blue-500">5 Slot Tersedia</p>
              </div>
              <div class="text-sm">
                <p class="font-bold">Jum'at, 29 Nov</p>
                <p class="text-blue-500">7 Slot Tersedia</p>
              </div>
            </div>

            <!-- Slot Pagi -->
            <div class="text-sm mb-2">
              <p class="font-bold text-red-500">Pagi Ini</p>
              <p class="text-gray-500">Slot Tidak Tersedia</p>
            </div>

            <!-- Slot Sore -->
            <div class="text-sm mb-2">
              <p class="font-bold text-blue-500">Sore Ini</p>
              <button class="bg-white border border-gray-300 rounded px-2 py-1">15:30 WIB</button>
            </div>

            <!-- Slot Malam -->
            <div class="text-sm mb-4">
              <p class="font-bold text-green-500">Malam Ini</p>
              <div class="flex space-x-2">
                <button class="bg-white border border-gray-300 rounded px-2 py-1">19:00 WIB</button>
                <button class="bg-white border border-gray-300 rounded px-2 py-1">20:00 WIB</button>
              </div>
            </div>

            <!-- Tombol Booking -->
            <button class="bg-blue-500 text-white rounded px-4 py-2">
              Booking Konsultasi
            </button>
          </div>
        </div>
      </div>
    </div>
  </main>

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
