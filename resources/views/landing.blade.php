<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>
      MedisIN
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  </head>
  <body class="bg-gray-100">
    <header class="bg-white shadow">
      <div class="container mx-auto flex justify-between items-center py-4 px-6">
        <!-- Gambar Medisin di sebelah kiri -->
        <img alt="medisin" height="150" src="{{ asset(path: '../images/medisin.png') }}" width="150"/>

        <!-- Tombol Login di sebelah kanan -->
        <form action="{{ route('login-medisin') }}" method="post" class="flex items-center">
          @csrf <!-- Untuk melindungi dari CSRF -->
          <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
            Log in
          </button>
        </form>
      </div>

      <!-- Navbar Section -->
      <nav class="py-4">
        <div class="container mx-auto flex justify-center space-x-6">
          <a href="#home" class="text-blue-600 hover:text-blue-800">Home</a>
          <a href="#pelayanan" class="text-blue-600 hover:text-blue-800">Pelayanan</a>
          <a href="#konsultasi" class="text-blue-600 hover:text-blue-800">Konsultasi</a>
          <a href="#lokasi" class="text-blue-600 hover:text-blue-800">Lokasi</a>
          <a href="#artikel" class="text-blue-600 hover:text-blue-800">Artikel</a>
          <a href="#tentang" class="text-blue-600 hover:text-blue-800">Tentang</a>
        </div>
      </nav>
    </header>

  <main class="container mx-auto mt-6 h-screen flex items-center justify-center">
  <div class="bg-white rounded-lg shadow-lg p-6 flex justify-center items-center w-full h-full">
    <img alt="MedisIN logo" class="object-contain" src="{{ asset(path: '../images/header.png') }}" />
  </div>
</main>

      <!-- Search Bar -->
      <div class="relative mt-4 w-full">
        <input
          class="w-full p-3 rounded-full border border-gray-300 shadow-sm"
          placeholder="Cari"
          type="text"
        />
        <button
          class="absolute right-0 top-0 mt-3 mr-3 bg-blue-600 text-white p-2 rounded-full"
        >
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>
  </main>
   <section class="mt-10 text-center">
    <h2 class="text-2xl font-semibold">
     Kami Melayani
    </h2>
    <div class="flex justify-center mt-6 space-x-4">
     <div class="flex flex-col items-center">
      <img alt="Ambulance icon" class="h-12" height="50" src="{{ asset(path: '../images/ambulance.png') }}" width="50"/>
      <span>
       AMBULANCE
      </span>
     </div>
     <div class="flex flex-col items-center">
      <img alt="Blood test icon" class="h-12" height="50" src="{{ asset(path: '../images/darah.png') }}" width="50"/>
      <span>
       TES DARAH
      </span>
     </div>
     <div class="flex flex-col items-center">
      <img alt="Consultation icon" class="h-12" height="50" src="{{ asset(path: '../images/konsul.png') }}" width="50"/>
      <span>
       KONSULTASI
      </span>
     </div>
     <div class="flex flex-col items-center">
      <img alt="Examination icon" class="h-12" height="50" src="{{ asset(path: '../images/lab.png') }}" width="50"/>
      <span>
       PEMERIKSAAN
      </span>
     </div>
     <div class="flex flex-col items-center">
      <img alt="Medicine icon" class="h-12" height="50" src="{{ asset(path: '../images/pil.png') }}" width="50"/>
      <span>
       OBAT
      </span>
     </div>
     <div class="flex flex-col items-center">
      <img alt="Nurse icon" class="h-12" height="50" src="{{ asset(path: '../images/suster.png') }}" width="50"/>
      <span>
       SUSTER
      </span>
     </div>
    </div>
   </section>
   <section class="mt-10">
    <h2 class="text-2xl font-semibold text-center">
     Konsultasikan Dengan Dokter Kami
    </h2>
    <div class="grid grid-cols-3 gap-4 mt-6">
     <div class="bg-white rounded-lg shadow-lg p-4 text-center">
      <img alt="Dr. Siti Kholis" class="rounded-full mx-auto" height="150" src="{{ asset(path: '../images/siti.png') }}" width="150"/>
      <h3 class="mt-2">
       Dr. Siti Kholis
      </h3>
      <button class="mt-2 bg-blue-600 text-white px-4 py-2 rounded">
       Info Lanjut
      </button>
     </div>
     <div class="bg-white rounded-lg shadow-lg p-4 text-center">
      <img alt="Dr. Udin Marudin" class="rounded-full mx-auto" height="150" src="{{ asset(path: '../images/udin.png') }}" width="150"/>
      <h3 class="mt-2">
       Dr. Udin Marudin
      </h3>
      <button class="mt-2 bg-blue-600 text-white px-4 py-2 rounded">
       Info Lanjut
      </button>
     </div>
     <div class="bg-white rounded-lg shadow-lg p-4 text-center">
      <img alt="Dr. Mustofa Jainul" class="rounded-full mx-auto" height="150" src="{{ asset(path: '../images/mustofa.png') }}" width="150"/>
      <h3 class="mt-2">
       Dr. Mustofa Jainul
      </h3>
      <button class="mt-2 bg-blue-600 text-white px-4 py-2 rounded">
       Info Lanjut
      </button>
     </div>
    </div>
   </section>
   <section class="mt-10">
    <h2 class="text-2xl font-semibold text-center">
     Lokasi Kami
    </h2>
    <div class="grid grid-cols-3 gap-4 mt-6">
  <div class="bg-white rounded-lg shadow-lg p-4 flex flex-col items-center justify-center text-center">
    <img alt="Surabaya location" class="rounded-lg" height="150" src="{{ asset('images/surabaya.png') }}" width="200"/>
    <h3 class="mt-2">
      Surabaya
    </h3>
  </div>
  <div class="bg-white rounded-lg shadow-lg p-4 flex flex-col items-center justify-center text-center">
    <img alt="Malang location" class="rounded-lg" height="150" src="{{ asset('images/malang.png') }}" width="200"/>
    <h3 class="mt-2">
      Malang
    </h3>
  </div>
  <div class="bg-white rounded-lg shadow-lg p-4 flex flex-col items-center justify-center text-center">
    <img alt="Semarang location" class="rounded-lg" height="150" src="{{ asset('images/semarang.png') }}" width="200"/>
    <h3 class="mt-2">
      Semarang
    </h3>
  </div>
  <div class="bg-white rounded-lg shadow-lg p-4 flex flex-col items-center justify-center text-center">
    <img alt="Yogyakarta location" class="rounded-lg" height="150" src="{{ asset('images/yogyakarta.png') }}" width="200"/>
    <h3 class="mt-2">
      Yogyakarta
    </h3>
  </div>
  <div class="bg-white rounded-lg shadow-lg p-4 flex flex-col items-center justify-center text-center">
    <img alt="Jakarta location" class="rounded-lg" height="150" src="{{ asset('images/jakarta.png') }}" width="200"/>
    <h3 class="mt-2">
      Jakarta
    </h3>
  </div>
  <div class="bg-white rounded-lg shadow-lg p-4 flex flex-col items-center justify-center text-center">
    <img alt="Bandung location" class="rounded-lg" height="150" src="{{ asset('images/bandung.png') }}" width="200"/>
    <h3 class="mt-2">
      Bandung
    </h3>
  </div>
</div>
   <section class="mt-10">
    <h2 class="text-2xl font-semibold text-center">
     Artikel
    </h2>
    <div class="grid grid-cols-3 gap-4 mt-6">
  <div class="bg-white rounded-lg shadow-lg p-4 text-center">
    <img alt="Article 1 image" class="rounded-lg w-full h-40 object-cover" src="{{ asset('images/1.png') }}"/>
  </div>
  <div class="bg-white rounded-lg shadow-lg p-4 text-center">
    <img alt="Article 2 image" class="rounded-lg w-full h-40 object-cover" src="{{ asset('images/2.png') }}"/>
  </div>
  <div class="bg-white rounded-lg shadow-lg p-4 text-center">
    <img alt="Article 3 image" class="rounded-lg w-full h-40 object-cover" src="{{ asset('images/3.png') }}"/>
  </div>
  <div class="bg-white rounded-lg shadow-lg p-4 text-center">
    <img alt="Article 4 image" class="rounded-lg w-full h-40 object-cover" src="{{ asset('images/4.png') }}"/>
  </div>
  <div class="bg-white rounded-lg shadow-lg p-4 text-center">
    <img alt="Article 5 image" class="rounded-lg w-full h-40 object-cover" src="{{ asset('images/5.jpg') }}"/>
  </div>
  <div class="bg-white rounded-lg shadow-lg p-4 text-center">
    <img alt="Article 6 image" class="rounded-lg w-full h-40 object-cover" src="{{ asset('images/6.jpg') }}"/>
  </div>
</div>
<footer class="bg-blue-600 text-white py-6 mt-10">
  <div class="container mx-auto flex items-center justify-between px-6">
    <!-- Gambar di kiri -->
    <div class="flex-shrink-0 mr-6">
      <img
        alt="medisin"
        class="rounded-full"
        height="150"
        src="{{ asset('images/medisin.png') }}"
        width="150"
      />
    </div>

    <!-- Teks di kanan, diberi padding tambahan -->
    <div class="text-right max-w-[60%]">
      <h3 class="text-xl font-semibold">MedisIN</h3>
      <p class="mt-2">
        Menjadi solusi kesehatan terpercaya Anda. Temukan berbagai produk medis
        dan kesehatan dengan mudah.
      </p>
      <div class="mt-4">
        <p>&copy; 2024 MedisIN. All rights reserved.</p>
        <p>Follow us on:</p>
        <ul class="flex justify-end space-x-4">
          <li>
            <a href="#" class="text-white hover:text-gray-200">Facebook</a>
          </li>
          <li>
            <a href="#" class="text-white hover:text-gray-200">Instagram</a>
          </li>
          <li>
            <a href="#" class="text-white hover:text-gray-200">Twitter</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>
 </body>
</html>
