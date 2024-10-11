<x-layout>
    @foreach ($alunos as $aluno)
        <div class="sm:flex sm:justify-between sm:items-center mb-8 sm:mb-0 lg:mx-24 text-sm">
            <div>
                <p><span class="font-light">Aluno:</span> {{ $aluno['nome'] }}</p>
                <p><span class="font-light">Matrícula:</span> {{ $aluno['matricula'] }}</p>
            </div>
            <a href="/alunos/{{ $aluno['id'] }}" class="btn" texto='+ Informações'>+
                Informações
            </a>
        </div>
        <hr class="my-2">
    @endforeach
</x-layout>
