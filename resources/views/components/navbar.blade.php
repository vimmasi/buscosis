<nav class="flex items-center justify-between w-full py-2 px-4 bg-gray-50">
    <div class="w-16">
        <x-svg-logo></x-svg-logo>
    </div>
    <div id="nav-links"
        class="md:static md:min-h-fit absolute bg-gray-50 min-h-[60vh] left-0 top-[-100%] w-full md:w-auto flex items-center px-5">
        <ul class="flex md:items-center gap-8 md:gap-[4vw] flex-col md:flex-row">
            <li><x-nav-link href="/" :active="request()->is('/')">Início</x-nav-link></li>
            <li><x-nav-link href="/alunos" :active="request()->is('alunos')">Alunos</x-nav-link></li>
            <li><x-nav-link href="/professores" :active="request()->is('professores')">Professores</x-nav-link></li>
        </ul>
    </div>
    <div class="flex items-center gap-6">
        <button class="btn btn-primary">Entrar</button>
        <button name="menu" id="menu-toggle" class="md:hidden">
            <x-svg-menu id="hamburger-icon" />
            <x-svg-menu-fechar id="close-icon" class="hidden" />
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
            navLinks.classList.toggle('top-14')
        });
    });
</script>
