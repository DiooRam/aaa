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
            font-family: 'Inter', sans-serif;
        }
    </style>
    <title>Akun</title>
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-lg">
        <!-- Header -->
        <div class="flex items-center mb-6">
            <img alt="Doctor's portrait" class="w-24 h-24 rounded-full mr-4" src="{{ asset(path: '../images/tirta.jpg') }}" />
            <div>
                <h2 class="text-xl font-bold">Dr. Tirta Handoko</h2>
                <p class="text-gray-600">Spesialis Penyakit Dalam</p>
            </div>
        </div>

        <!-- Form -->
        <form>
            <div class="mb-4">
                <label class="block text-gray-700">Nama Pasien</label>
                <input class="w-full px-3 py-2 border rounded-lg" placeholder="Nama Pasien" type="text" />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Diagnosa</label>
                <input class="w-full px-3 py-2 border rounded-lg" placeholder="Diagnosa" type="text" />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Umur</label>
                <input class="w-full px-3 py-2 border rounded-lg" placeholder="Umur" type="number" />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Detail Diagnosis</label>
                <input class="w-full px-3 py-2 border rounded-lg" placeholder="Detail" type="text" />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Upload Hasil Konsultasi</label>
                <div class="flex items-center">
                    <input class="hidden" id="file-upload" type="file" />
                    <label class="w-full px-3 py-2 border rounded-lg cursor-pointer text-gray-600" for="file-upload">
                        No file selected
                    </label>
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex justify-between">
                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg" type="button">
                    Chat
                </button>
                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg" type="button">
                    Selesai
                </button>
            </div>
        </form>
    </div>
</body>
</html>
