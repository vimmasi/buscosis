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
    {{-- navbar desktop --}}
    <div
        class="hidden bg-[#f7f7f7] sm:flex sm:flex-col sm:w-56 sm:fixed sm:top-0 sm:left-0 sm:h-screen sm:border-r sm:shadow-sm text-primary-content">
        <a href="/" class="bg-opacity-50 p-2 rounded-sm m-2"><x-logo /></a>
        <ul class="menu gap-1">
            <li>
                <x-nav-link href="/" :active="request()->is('/')">Início</x-nav-link>
            </li>
            <li>
                <details {{ request()->is('/') ? '' : 'open' }}>
                    <summary class="mb-1">
                        Cadastrar
                    </summary>
                    <ul class="flex flex-col gap-1">
                        <li><x-nav-link href="/alunos" :active="request()->is('alunos')">Alunos</x-nav-link></li>
                        <li><x-nav-link href="/professores" :active="request()->is('professores')">Professores</x-nav-link></li>
                    </ul>
                </details>
            </li>
        </ul>
    </div>
    {{-- end navbar desktop --}}

    {{-- Ícone de hamburguer --}}
    <div id="menu-toggle" class="sm:hidden cursor-pointer p-4 m-2">
        <svg id="hamburger-icon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </div>

    {{-- navbar mobile --}}
    <div id="mobile-menu" class="text-primary-content bg-gray-50 hidden">
        <div class="w-screen flex flex-col items-center">

            {{-- Ícone de fechar --}}
            <div id="menu-close" class="cursor-pointer p-3 self-end">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </div>

            <ul class="menu w-screen">
                <li>
                    <x-nav-link href="/" :active="request()->is('/')">Início</x-nav-link>
                </li>
                <li>
                    <details open>
                        <summary>
                            Cadastrar
                        </summary>
                        <ul class="flex flex-col gap-1">
                            <li><x-nav-link href="/alunos" :active="request()->is('alunos')">Alunos</x-nav-link></li>
                            <li><x-nav-link href="/professores" :active="request()->is('professores')">Professores</x-nav-link></li>
                        </ul>
                    </details>
                </li>
            </ul>
        </div>
    </div>
    {{-- end navbar mobile --}}

    {{-- titulo --}}
    <a id="logo" href="/" class="bg-opacity-50 rounded-sm"><x-logo /></a>
    @if (request()->is('/'))
        <x-titulo titulo="Página Inicial"></x-titulo>
    @elseif (request()->is('alunos'))
        <x-titulo titulo="Alunos"></x-titulo>
    @elseif (request()->is('professores'))
        <x-titulo titulo="Professores"></x-titulo>
    @endif
    {{-- end titulo --}}

    <div class="sm:ml-60 sm:mr-4 mx-4 my-4 flex-grow">{{ $slot }}</div>

    <footer class="h-40 sm:h-20 flex items-center justify-center mb-0 bg-gray-50 border-t-2">Footer
    </footer>

    {{-- Script menu mobile --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.getElementById('menu-toggle');
            const menuClose = document.getElementById('menu-close');
            const mobileMenu = document.getElementById('mobile-menu');
            const hamburgerIcon = document.getElementById('hamburger-icon');
            const logo = document.getElementById('logo');

            menuToggle.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
                hamburgerIcon.classList.toggle('hidden');
                logo.classList.toggle('hidden');
                menuToggle.classList.toggle('bg-gray-50');
            });

            menuClose.addEventListener('click', function() {
                mobileMenu.classList.add('hidden');
                hamburgerIcon.classList.remove('hidden');
                logo.classList.remove('hidden');
                menuToggle.classList.remove('bg-gray-50');
            });
        });
    </script>
</body>

</html>
