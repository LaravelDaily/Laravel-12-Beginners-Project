<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900">
<header class="bg-white shadow-md py-4">
    <div class="container mx-auto flex justify-between items-center px-6">
        <a href="/"><h1 class="text-xl font-bold">Brand</h1></a>
        <nav>
            <ul class="flex space-x-6">
                <li><a href="/about" class="hover:text-blue-500">About Us</a></li>
                <li><a href="/contact" class="hover:text-blue-500">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>
<main class="container mx-auto mt-10 px-6 text-center">
    @yield('content')
</main>
<footer class="mt-10 py-6 bg-white text-center shadow-md">
    <p class="text-gray-600">&copy; 2025 Brand. All rights reserved.</p>
</footer>
</body>
</html>
