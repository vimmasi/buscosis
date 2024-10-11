@props([
    'titulo' => 'titulo',
    'card_estilo' => 'bg-gray-300',
    'botao' => false,
    'botao_texto' => 'botão',
    'botao_link' => '#',
    'imagem' => '#',
])

<div class="card sm:card-side {{ $card_estilo }} w-full border">
    <figure>
        <img class="sm:h-56" src="{{ $imagem }}" alt="" />
    </figure>
    <div class="card-body">
        <h2 class="card-title md:text-base lg:text-xl">{{ $titulo }}</h2>
        <p>{{ $slot }}</p>

        @if ($botao == true)
            <div class="flex justify-end">
                <a href="{{ $botao_link }}" class="btn btn-primary">{{ $botao_texto }}</a>
            </div>
        @endif
    </div>
</div>
