@props(['active' => false, 'titulo' => 'dropdown'])

<div class="dropdown dropdown-hover">
    <div tabindex="0" role="button"
        class="{{ $active ? 'text-primary bg-secondary transition-colors' : 'text-primary-content hover:bg-gray-100' }} rounded-md pl-3 py-2 text-sm font-medium"
        aria-current="page" {{ $attributes }}>{{ $titulo }} &#9662</div>
    <ul tabindex="0" class="dropdown-content menu bg-gray-50 z-[1] w-52 p-3 gap-1 rounded-md shadow-sm">
        {{ $slot }}
    </ul>
</div>