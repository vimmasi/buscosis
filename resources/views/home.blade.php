<x-layout>
    <h1 class="text-2xl mb-4">Bem vindo, #FUNCIONÁRIO#!</h1>

    <div class="grid sm:grid-cols-2 sm:gap-8 gap-4">
        <div class="card bg-[#9ecebc]/50">
            <h2 class="card-title bg-[#9ecebc]">Ações Rápidas</h2>
            <div class="card-body p-0">
                <div class="menu menu-lg divide-y-2 divide-[#9ecebc] flex flex-col h-full text-lg transition-all">
                    <a href="#"
                        class="flex-1 flex items-center justify-between hover:text-xl hover:bg-black/5 px-6 rounded-t-lg">
                        <p>Cadastrar Aluno</p>
                        <x-svg-user />
                    </a>
                    <a href="#"
                        class="flex-1 flex items-center justify-between hover:text-xl hover:bg-black/5 px-6">
                        <p>Imprimir Boleto</p>
                        <x-svg-printer />
                    </a>
                    <a href="#"
                        class="flex-1 flex items-center justify-between hover:text-xl hover:bg-black/5 px-6 rounded-b-lg">
                        <p>Calendário de Aulas</p>
                        <x-svg-calendar />
                    </a>
                </div>
            </div>
        </div>
        <div class="card bg-[#4a91a8]/50">
            <h2 class="card-title bg-[#4a91a8]">Matrículas recentes</h2>
            <div class="card-body">
                <div class="overflow-x-auto">
                    <table class="table table-zebra table-xs">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nome</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Iterar sobre os alunos -->
                            @foreach ($alunos as $aluno)
                                <tr class="">
                                    <th>{{ $aluno['id'] }}</th>
                                    <th><a href="/aluno/{{ $aluno['id'] }}"
                                            class="link link-hover">{{ $aluno['nome'] }}</a></th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-actions justify-end">
                    <button class="btn"><a href="/alunos">Ver todos</a></button>
                </div>
            </div>
        </div>

        <div class="card bg-[#f2e983]/50 sm:col-span-2">
            <h2 class="card-title bg-[#f2e983]">Avisos</h2>
            <div class="card-body">
                tabela de avisos
            </div>
        </div>
    </div>
</x-layout>
