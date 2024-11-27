<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Akun
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
                <a href="#akun" class="text-blue-600 hover:text-blue-800">Pengajuan</a>
            </div>
        </nav>
    </header>
    <!-- Body -->
    <main class="bg-gray-100 p-6">
        <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center space-x-4 mb-6">
                <div class="flex flex-col items-center">
                    <img alt="Profile picture" class="w-16 h-16 rounded-full mb-2" src="{{ asset(path: '../images/tirta.jpg') }}" />
                    <span>Tirta Handoko</span>
                </div>
            </div>
            <form>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <!-- Baris 1 -->
                    <div>
                        <label class="block text-gray-700 mb-1">ID</label>
                        <input class="w-full border border-gray-300 p-2 rounded bg-gray-100" type="text" placeholder="Masukkan ID" />
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-1">Nama Lengkap</label>
                        <input class="w-full border border-gray-300 p-2 rounded" type="text" placeholder="Masukkan Nama Lengkap" />
                    </div>
                    <!-- Baris 2 -->
                    <div>
                        <label class="block text-gray-700 mb-1">Email</label>
                        <input class="w-full border border-gray-300 p-2 rounded" type="email" placeholder="Masukkan Email" />
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-1">Alamat Praktik</label>
                        <input class="w-full border border-gray-300 p-2 rounded" type="text" placeholder="Masukkan Alamat Praktik" />
                    </div>
                    <!-- Baris 3 -->
                    <div>
                        <label class="block text-gray-700 mb-1">Spesialis</label>
                        <input class="w-full border border-gray-300 p-2 rounded" type="text" placeholder="Masukkan Spesialis" />
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-1">Pengalaman</label>
                        <input class="w-full border border-gray-300 p-2 rounded" type="text" placeholder="Masukkan Pengalaman" />
                    </div>
                    <!-- Baris 4 -->
                    <div>
                        <label class="block text-gray-700 mb-1">Pendidikan</label>
                        <input class="w-full border border-gray-300 p-2 rounded" type="text" placeholder="Masukkan Pendidikan" />
                    </div>
                </div>
                <div class="text-right">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded" type="submit">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-blue-500 shadow mt-6">
        <div class="container mx-auto py-4 px-6 text-center">
            <p class="text-gray-100 text-sm">&copy; 2024 Medisin. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
