<!DOCTYPE html>
<html lang="pt-BR" data-theme="custom">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
</head>

<body class="flex flex-col min-h-screen">
    <header>
        <x-navbar />
    </header>

    {{ $slot }}

</body>

</html>
