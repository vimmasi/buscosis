@props(['active' => false])

<a class="{{ $active ? 'text-primary bg-secondary transition-colors' : 'text-primary-content' }} rounded-md px-3 py-2 text-sm font-medium hover:bg-secondary hover:text-primary"
    aria-current="page" {{ $attributes }}>{{ $slot }}</a>
