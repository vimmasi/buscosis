@props(['active' => false, 'titulo' => 'dropdown'])

<div class="dropdown dropdown-hover">
    <div tabindex="0" role="button"
        class="text-primary-content hover:bg-slate-200 rounded-t-md px-3 py-2 text-sm font-medium min-h-full flex items-center justify-between gap-2"
        aria-current="page" {{ $attributes }}>
        <p>{{ $titulo }}</p>
        <x-svg-down-arrow />
    </div>

    <ul tabindex="0"
        class="dropdown-content menu z-[1] w-52 p-3 gap-1 rounded-b-md rounded-tr-md bg-slate-200 border-b-2 border-r-2 border-slate-300">
        {{ $slot }}
    </ul>
</div>
