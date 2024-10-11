@props([
    'titulo' => 'titulo',
    'corpo' => 'corpo',
    'card_estilo' => 'bg-gray-300',
    'card_texto' => '',
    'botao' => false,
    'botao_texto' => 'botão',
    'botao_link' => '#',
])

<div class="card {{ $card_estilo }} w-full border">
    <div class="card-body">
        {{ $slot }}

        @if ($botao == true)
            <div class="flex justify-end">
                <a href="{{ $botao_link }}" class="btn btn-primary">{{ $botao_texto }}</a>
            </div>
        @endif
    </div>
</div>
