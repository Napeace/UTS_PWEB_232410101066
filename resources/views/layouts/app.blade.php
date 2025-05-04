<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', '')</title>
    @vite('resources/css/app.css')

    @yield('styles')
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">
    @if(!request()->is('login'))
        <x-navbar />
    @endif

    <main class="flex-grow py-6">
        <div class="container mx-auto px-4">
            @yield('content')
        </div>
    </main>

    @if(!request()->is('login'))
        <x-footer />
    @endif

    @yield('scripts')
</body>
</html>
