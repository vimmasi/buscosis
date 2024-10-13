@props(['active' => false])

<a class="{{ $active ? 'text-primary bg-secondary transition-colors' : 'text-primary-content hover:bg-gray-100' }} rounded-md px-3 py-2 text-sm font-medium"
    aria-current="page" {{ $attributes }}>{{ $slot }}</a>
