<div class="drawer">
    <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content flex flex-col">
        <!-- Navbar -->
        <div class="navbar w-full">
            <div class="flex-none md:hidden">
                <label for="my-drawer-3" aria-label="open sidebar" class="btn btn-square btn-ghost">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        class="inline-block h-6 w-6 stroke-current">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </label>
            </div>

            <div class="mx-2 px-2 w-screen flex justify-center md:hidden"><a href="/"><x-svg-logo /></a></div>
            <div class="hidden flex-none md:flex md:justify-between w-full">
                {{-- Navbar Horizontal --}}
                <div class="mx-2 px-2"><a href="/"><x-svg-logo /></a></div>
                <ul class="menu menu-horizontal gap-8 p-0">
                    <x-nav-link href="/" :active="request()->is('/')">
                        <x-svg-home />
                        <p>Início</p>
                    </x-nav-link>
                    <x-nav-dropdown titulo='Secretaria'>
                        <x-nav-link href="/alunos" :active="request()->is('alunos')">Alunos</x-nav-link>
                        <x-nav-link href="/professores" :active="request()->is('professores')">Professores</x-nav-link>
                    </x-nav-dropdown>
                    <x-nav-link href="/financeiro" :active="request()->is('/financeiro')">
                        <x-svg-bill />
                        <p>Financeiro</p>
                    </x-nav-link>
                </ul>
                <button class="btn btn-primary">Entrar</button>
            </div>

        </div>
    </div>

    {{-- Navbar Vertical --}}
    <div class="drawer-side">
        <label for="my-drawer-3" aria-label="close sidebar" class="drawer-overlay"></label>
        <ul class="menu bg-slate-200 min-h-full w-80 p-4">
            <div class="flex flex-col gap-4">
                <x-nav-link href="/" :active="request()->is('/')">Início</x-nav-link>
                {{-- TODO: FAZER OS OUTROS ITENS DO MENU DESCEREM AO ABRIR O DROPDOWN --}}
                <x-nav-summary titulo='Secretaria'>
                    <x-nav-link href="/alunos" :active="request()->is('alunos')">Alunos</x-nav-link>
                    <x-nav-link href="/professores" :active="request()->is('professores')">Professores</x-nav-link>
                </x-nav-summary>
                <x-nav-link href="/financeiro" :active="request()->is('/financeiro')">Financeiro</x-nav-link>
            </div>
            <button class="btn btn-primary mt-4">Entrar</button>
        </ul>

    </div>
</div>
