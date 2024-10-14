<x-layout>
    @foreach ($alunos as $aluno)
        <ul>
            <li>{{ $aluno['nome'] }}</li>
        </ul>
    @endforeach
</x-layout>
