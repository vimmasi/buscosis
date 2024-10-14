@props(['active' => false, 'titulo' => 'dropdown'])

<details>
    <summary
        class="{{ $active ? 'text-primary bg-secondary transition-colors' : 'text-primary-content hover:bg-black/5' }} rounded-md px-3 py-2 text-sm font-medium cursor-pointer"
        aria-current="page" {{ $attributes }}>{{ $titulo }}
    </summary>

    <ul class="menu dropdown-content w-52 p-3 gap-2 border-l-2 border-primary-content ml-4">
        {{ $slot }}
    </ul>
</details>
