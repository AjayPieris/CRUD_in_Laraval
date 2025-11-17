<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'My Website' }}</title>

    {{-- Tailwind CSS CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

{{-- NAVBAR --}}
<nav class="bg-white shadow-md fixed w-full top-0 z-50">
    <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">

        <h2 class="text-2xl font-bold text-blue-600">MyWebsite</h2>

        <div class="space-x-6">
            <a href="/" class="hover:text-blue-600 transition">Home</a>
            <a href="/about" class="hover:text-blue-600 transition">About</a>
            <a href="/services" class="hover:text-blue-600 transition">Services</a>
            <a href="/about" class="hover:text-blue-600 transition">Contact</a>
        </div>
        <div class="space-x-4">
            @auth
        <form action="/logout" method="POST" class="inline">
            @csrf
            <button type="submit" class="hover:text-red-600 transition font-semibold">
                Logout
            </button>
        </form>
    @else
        <a href="/login" class="hover:text-blue-600 transition">Login</a>
        <a href="/register" class="hover:text-blue-600 transition">Register</a>
    @endauth
        </div>
    </div>
</nav>

{{-- PAGE CONTENT --}}
<div class="pt-10"> {{-- Padding to fix navbar overlap --}}
    @yield('content')
</div>

{{--about section--}}
<div class="pt-1"> {{-- Padding to fix navbar overlap --}}
    @yield('about')
</div>

{{--services section--}}
<div class="pt-10"> {{-- Padding to fix navbar overlap --}}
    @yield('service')
</div>

{{--login section--}}
<div class="pt-1"> {{-- Padding to fix navbar overlap --}}
    @yield('login')
</div>

{{--signup section--}}
<div class="pt-1"> {{-- Padding to fix navbar overlap --}}
    @yield('signup')
</div>

{{-- FOOTER --}}
<footer class="bg-gray-900 text-white text-center py-5 mt-5">
    © {{ date('Y') }} MyWebsite — All Rights Reserved.
</footer>

</body>
</html>
