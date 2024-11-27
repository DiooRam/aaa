<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen flex">
    <!-- Left side with logo -->
    <div class="w-1/2 bg-green-600 flex items-center justify-center">
        <div class="bg-white p-10 rounded-full">
            <h1 class="text-6xl font-bold text-center">
                <img
                    alt="dokter-logo" height="150" src="{{ asset('images/group.png') }}" width="150" />
            </h1>
            <img
                alt="medisin-dokter" height="150" src="{{ asset('images/medisin.png') }}" width="150" />
        </div>
    </div>

    <!-- Right side with login form -->
    <div class="w-1/2 flex items-center justify-center bg-gray-100">
        <div class="w-1/2">
            <!-- Laravel Blade Form Login -->
            <form action="{{ route(name: 'login') }}" method="post">
                @csrf <!-- CSRF token for security -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="email" placeholder="Email" required>
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password" placeholder="Password" required>
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-green-600 hover:bg-green-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
