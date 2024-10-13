@props(['active' => false, 'titulo' => 'dropdown'])

<details class="dropdown">
    <summary
        class="{{ $active ? 'text-primary bg-secondary transition-colors' : 'text-primary-content hover:bg-gray-100' }} rounded-md px-3 py-2 text-sm font-medium cursor-pointer"
        aria-current="page" {{ $attributes }}>{{ $titulo }}</summary>
    <ul class="dropdown-content menu bg-gray-50 z-[1] w-52 p-3 gap-1 rounded-md shadow-sm">
        {{ $slot }}
    </ul>
</details>
