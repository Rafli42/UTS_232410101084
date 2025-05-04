@props(['active' => false])

<a class="{{ $active ? 'border-b-2 border-b-red-500' : 'border-none'}} py-7 px-4" aria-current="{{ $active ? 'page' : false}}" {{ $attributes }} >{{ $slot }}</a>
