<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Home')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen">
    <x-navbar-sidebar />

    <!-- Main content with proper padding -->
    <main class="pt-16 lg:ml-64">
        <div class="p-4">
            @yield('content')
        </div>
    </main>
</body>
</html>