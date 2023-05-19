@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1  text-sm font-medium leading-5 text-black focus:outline-none  transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1  text-sm font-medium leading-5 text-black hover:text-black hover:border-gray-300  focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
