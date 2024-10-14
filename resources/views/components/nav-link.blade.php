@props(['active' => false])

<a class="{{ $active ? 'bg-black/5 transition-colors' : 'hover:bg-black/5' }} text-primary-content rounded-md px-3 py-2 text-sm font-medium flex items-center justify-between gap-2 min-h-full"
    aria-current="page" {{ $attributes }}>{{ $slot }}</a>
