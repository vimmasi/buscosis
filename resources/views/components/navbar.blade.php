<nav class="flex items-center justify-between w-full py-2 px-4 bg-gray-50">
    

    <div id="nav-links"
        class="md:static md:min-h-fit absolute bg-gray-50 min-h-[60vh] left-0 top-[-200%] w-full md:w-auto flex items-center px-5 py-4 md:py-0">
        <ul class="flex md:items-center gap-8 md:gap-[4vw] flex-col md:flex-row ">
            <x-nav-link href="/" :active="request()->is('/')">Início</x-nav-link>
            <x-nav-dropdown titulo='Secretaria '>
                <x-nav-link href="/alunos" :active="request()->is('alunos')">Alunos</x-nav-link>
                <x-nav-link href="/professores" :active="request()->is('professores')">Professores</x-nav-link>
            </x-nav-dropdown>
            <x-nav-link href="/financeiro" :active="request()->is('/financeiro')">Financeiro</x-nav-link>
        </ul>
    </div>

    {{-- <x-nav-link href="/alunos" :active="request()->is('alunos')">Alunos</x-nav-link>
                    <x-nav-link href="/professores" :active="request()->is('professores')">Professores</x-nav-link> --}}

    <div class="flex items-center gap-6">
        <button class="btn btn-primary">Entrar</button>

        {{-- Ícone menu mobile --}}
        <button id="menu-toggle" class="md:hidden">
            <div id="hamburger-icon">
                <x-svg-menu />
            </div>
            <div id="close-icon" class="hidden">
                <x-svg-menu-fechar />
            </div>
        </button>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuToggle = document.getElementById('menu-toggle');
        const hamburgerIcon = document.getElementById('hamburger-icon');
        const closeIcon = document.getElementById('close-icon');
        const navLinks = document.getElementById('nav-links');

        menuToggle.addEventListener('click', function() {
            hamburgerIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');

            if (navLinks.classList.contains('top-[-200%]')) {
                navLinks.classList.remove('top-[-200%]');
                navLinks.classList.add('top-14');
            } else {
                navLinks.classList.remove('top-14');
                navLinks.classList.add('top-[-200%]');
            }
        });
    });
</script>
