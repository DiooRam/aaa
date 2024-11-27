<html>
 <head>
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

  

 <body class="bg-gray-100">
  <div class="container mx-auto p-4">
   <div class="flex justify-end items-center mb-4">
    <i class="fas fa-comment-dots text-black mr-2">
    </i>
    <span class="text-black">
     Hello, Dio Ramadhan
    </span>
   </div>
   <h1 class="text-center text-2xl font-bold mb-8">
    Dokter Yang Tersedia
   </h1>
   <div class="space-y-4">
    <div class="flex justify-between items-center border border-blue-500 p-4 bg-white rounded-lg">
     <div class="flex items-center">
      <img alt="Doctor Tirta" class="rounded-full mr-4" height="50" src="{{ asset(path: 'images/tirta.jpg') }}" width="50"/>
      <div>
       <h2 class="font-bold">
        Dr. Tirta
       </h2>
       <p>
        Spesialis Penyakit Dalam
       </p>
      </div>
     </div>
     <button class="bg-blue-500 text-white px-4 py-2 rounded-lg">
      Info Lanjut
     </button>
    </div>
    <div class="flex justify-between items-center border border-blue-500 p-4 bg-white rounded-lg">
     <div class="flex items-center">
      <img alt="Doctor Deddy" class="rounded-full mr-4" height="50" src="https://storage.googleapis.com/a1aa/image/DTdsnrAYZIY6C9oEqKG6ResgZqumbp6dvC6W4fHdkybPE50TA.jpg" width="50"/>
      <div>
       <h2 class="font-bold">
        Dr. Deddy
       </h2>
       <p>
        Spesialis Ortopedi
       </p>
      </div>
     </div>
     <button class="bg-blue-500 text-white px-4 py-2 rounded-lg">
      Info Lanjut
     </button>
    </div>
    <div class="flex justify-between items-center border border-blue-500 p-4 bg-white rounded-lg">
     <div class="flex items-center">
      <img alt="Doctor Alex" class="rounded-full mr-4" height="50" src="https://storage.googleapis.com/a1aa/image/a1k3iiNH7kY3G1mKWoQnOGTTheA49YW2OFSq8JrL6UaFic6JA.jpg" width="50"/>
      <div>
       <h2 class="font-bold">
        Dr. Alex
       </h2>
       <p>
        Spesialis Mata
       </p>
      </div>
     </div>
     <button class="bg-blue-500 text-white px-4 py-2 rounded-lg">
      Info Lanjut
     </button>
    </div>
    <div class="flex justify-between items-center border border-blue-500 p-4 bg-white rounded-lg">
     <div class="flex items-center">
      <img alt="Doctor Brandon" class="rounded-full mr-4" height="50" src="https://storage.googleapis.com/a1aa/image/OlBz238y2QKHBpLTWcoeBzqMuMsQxS36FoeqbpapZeHWIypnA.jpg" width="50"/>
      <div>
       <h2 class="font-bold">
        Dr. Brandon
       </h2>
       <p>
        Spesialis Kulit dan Kelamin
       </p>
      </div>
     </div>
     <button class="bg-blue-500 text-white px-4 py-2 rounded-lg">
      Info Lanjut
     </button>
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
