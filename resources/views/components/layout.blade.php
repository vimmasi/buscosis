<!DOCTYPE html>
<html lang="en" data-theme="custom">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class="flex flex-col min-h-screen">
    <header class="z-50">
        <x-navbar-v2 />
    </header>

    <main class="container mx-auto my-4">{{ $slot }}</main>

    <footer class="h-40 sm:h-20 flex items-center justify-center mb-0 bg-gray-50 border-t-2 mt-auto">
        <x-footer />
    </footer>

</body>

</html>
