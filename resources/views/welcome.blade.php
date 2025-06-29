<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<body class="bg-gray-100 min-h-screen flex flex-col justify-center items-center">
    <div class="bg-white rounded-xl shadow-lg p-10 max-w-lg w-full">
        <h1 class="text-4xl font-bold text-gray-800 mb-4 text-center">Welcome</h1>
        <p class="text-gray-600 text-lg text-center mb-8">
            Selamat datang di aplikasi Laravel Anda! Blade ini sudah menggunakan Tailwind CSS.
        </p>
        <div class="flex justify-center">
            <a href="{{ url('/dashboard') }}"
               class="px-6 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition">
                Mulai
            </a>
        </div>
    </div>
    <footer class="mt-10 text-gray-500 text-sm">
        &copy; {{ date('Y') }} YourAppName. All rights reserved.
    </footer>
</body>
</html>