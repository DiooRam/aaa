<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
    <title>Akun</title>
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

    <!-- Body -->
    <main class="bg-gray-100 p-6">
        <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center space-x-4 mb-6">
                <div class="flex flex-col items-center">
                    <img alt="Profile picture" class="w-16 h-16 rounded-full mb-2" src="{{ asset(path: '../images/dio.jpg') }}" />
                    <span>Dio Ramadhan</span>
                </div>
            </div>
            <form>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <!-- Baris 1 -->
                    <div>
                        <label class="block text-gray-700 mb-1">ID</label>
                        <input class="w-full border border-gray-300 p-2 rounded bg-gray-100" type="text" value="878748IDV985" disabled />
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-1">Nama Lengkap</label>
                        <input class="w-full border border-gray-300 p-2 rounded" type="text" value="Raj Kumar" />
                    </div>
                    <!-- Baris 2 -->
                    <div>
                        <label class="block text-gray-700 mb-1">Jenis Kelamin</label>
                        <select class="w-full border border-gray-300 p-2 rounded">
                            <option selected>Pria</option>
                            <option>Wanita</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-1">Tanggal Lahir</label>
                        <input class="w-full border border-gray-300 p-2 rounded" type="text" value="13/02/2001" />
                    </div>
                    <!-- Baris 3 -->
                    <div>
                        <label class="block text-gray-700 mb-1">Email</label>
                        <input class="w-full border border-gray-300 p-2 rounded" type="email" value="raj.kumar@gmail.com" />
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-1">No HP</label>
                        <input class="w-full border border-gray-300 p-2 rounded" type="text" value="7787455155" />
                    </div>
                    <!-- Baris 4 -->
                    <div>
                        <label class="block text-gray-700 mb-1">Tinggi Badan</label>
                        <input class="w-full border border-gray-300 p-2 rounded" type="text" placeholder="(cm)" />
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-1">Berat Badan</label>
                        <input class="w-full border border-gray-300 p-2 rounded" type="text" placeholder="(kg)" />
                    </div>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Golongan Darah</label>
                    <div class="flex space-x-4">
                        <label class="flex items-center">
                            <input class="mr-2" name="blood_group" type="radio" /> O
                        </label>
                        <label class="flex items-center">
                            <input class="mr-2" name="blood_group" type="radio" /> A
                        </label>
                        <label class="flex items-center">
                            <input class="mr-2" name="blood_group" type="radio" /> B
                        </label>
                        <label class="flex items-center">
                            <input class="mr-2" name="blood_group" type="radio" /> AB
                        </label>
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
