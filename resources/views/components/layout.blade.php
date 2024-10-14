<!DOCTYPE html>
<html lang="en" data-theme="custom">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
</head>

<body class="flex flex-col min-h-screen bg-gradient-to-r from-[#e9f0e4] to-[#c8d7eb]">
    <header class="z-50">
        <x-navbar-v2 />
    </header>

    <main class="flex-grow md:container mx-4 md:mx-auto mb-4 bg-white/20 rounded-lg px-4 py-2">
        {{ $slot }}
    </main>

    <footer class="footer p-10 sm:flex sm:justify-center sm:gap-20 bg-black/10">
        <x-footer />
    </footer>
</body>

</html>
