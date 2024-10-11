@props(['texto' => 'botao', 'estilo' => '', 'link' => '#'])

<a href="{{ $link }}" class="{{ $estilo }} btn w-full mt-2 sm:w-32">
    {{ $texto }}
</a>
