<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Homepage</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
<header class="bg-white shadow-md p-4 flex justify-between items-center container mx-auto mt-6 rounded-lg">
    <a href="{{ route('home') }}" class="text-2xl font-bold text-gray-800">My Blog</a>
    <nav>
        <ul class="flex space-x-4">
            <li><a href="{{ route('about') }}" class="text-gray-600 hover:text-gray-800">About Us</a></li>
            <li><a href="{{ route('contact') }}" class="text-gray-600 hover:text-gray-800">Contact</a></li>
        </ul>
    </nav>
</header>

@yield('content')

</body>
</html>
