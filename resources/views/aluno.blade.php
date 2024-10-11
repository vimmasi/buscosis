<x-layout>
    <div class="flex flex-col sm:justify-between border-b-2 sm:py-2">
        <h2 class="sm:text-4xl sm:h-full sm:w-full"><span class="font-thin">Matrícula:</span> {{ $aluno['matricula'] }}
        </h2>
    </div>
    <x-card-aluno card_estilo='bg-gray-50 mt-4' card_texto=''>
        Nome completo:<p class="font-thin text-2xl">{{ $aluno['nome'] }}</p>
    </x-card-aluno>
    <div class="flex gap-2 justify-end">
        <a href="/alunos" class="btn btn-primary mt-2">Voltar aos alunos</a>
        <button class="btn btn-error mt-2">Deletar matrícula</button> {{-- todo --}}
    </div>
</x-layout>
