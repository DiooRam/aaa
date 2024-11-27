<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
    <title>Pesan</title>
</head>
<body class="bg-gray-100">
    <div class="max-w-4xl mx-auto mt-10 bg-white p-6 rounded-lg shadow-md">
        <!-- Header -->
        <h2 class="text-xl font-bold mb-6">Pesan</h2>

        <!-- Chat Area -->
        <div class="space-y-6">
            <!-- First Message -->
            <div class="flex items-start">
                <img alt="Dio" class="w-12 h-12 rounded-full mr-4" src="{{ asset(path: 'images/dio.jpg') }}" />
                <div>
                    <div class="flex items-center">
                        <span class="font-semibold">Dio Ramadhan</span>
                        <span class="text-gray-500 text-sm ml-2">21 min ago</span>
                    </div>
                    <div class="bg-gray-100 p-4 rounded-lg mt-2">
                        <p>
                            Halo dok, saya ingin melakukan konsultasi
                        </p>
                    </div>
                    <div class="flex items-center mt-2 space-x-2 text-gray-500">
                        <i class="fas fa-thumbs-up"></i>
                        <i class="fas fa-reply"></i>
                    </div>
                </div>
            </div>

            <!-- Second Message -->
            <div class="flex items-start justify-end">
                <div>
                    <div class="flex items-center justify-end">
                        <span class="font-semibold">Dr. Tirta Handoko</span>
                        <span class="text-gray-500 text-sm ml-2">15 min ago</span>
                    </div>
                    <div class="bg-blue-500 text-white p-4 rounded-lg mt-2">
                        <p>
                            Ya bisa silahkan, silahkan untuk melakukan pengajuan di website ya, agar bisa menyesuaikan jadwal
                        </p>
                    </div>
                    <div class="flex items-center mt-2 space-x-2 justify-end text-gray-500">
                        <i class="fas fa-thumbs-up text-yellow-500"></i>
                        <i class="fas fa-reply"></i>
                    </div>
                </div>
                <img alt="Tirta" class="w-12 h-12 rounded-full ml-4" src="{{ asset(path: 'images/tirta.jpg') }}" />
            </div>

                            <!-- Divider -->
                            <div class="flex justify-center">
                <span class="bg-gray-200 text-gray-500 text-sm px-3 py-1 rounded-full">Now</span>
            </div>

            <!-- Third Message -->
            <div class="flex items-start">
                <img alt="Dio" class="w-12 h-12 rounded-full mr-4" src="{{ asset(path: 'images/dio.jpg') }}" />
                <div>
                    <div class="flex items-center">
                        <span class="font-semibold">Dio Ramadhan</span>
                        <span class="text-gray-500 text-sm ml-2">2 min ago</span>
                    </div>
                    <div class="bg-gray-100 p-4 rounded-lg mt-2">
                        <p>
                            Sudah saya appointment , dok
                        </p>
                    </div>
                    <div class="flex items-center mt-2 space-x-2 text-gray-500">
                        <i class="fas fa-heart text-red-500"></i>
                        <i class="fas fa-reply"></i>
                    </div>
                </div>


            </div>
        </div>

        <!-- Input Area -->
        <div class="flex items-center border-t pt-4 mt-6">
            <input class="flex-grow p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Type a message..." type="text" />
            <div class="flex items-center space-x-2 ml-4">
                <i class="fas fa-paperclip text-gray-500"></i>
                <i class="fas fa-smile text-gray-500"></i>
                <i class="fas fa-microphone text-gray-500"></i>
                <i class="fas fa-camera text-gray-500"></i>
                <button class="bg-blue-500 text-white p-3 rounded-full">
                    <i class="fas fa-paper-plane"></i>
                </button>
            </div>
        </div>
    </div>
</body>
</html>
