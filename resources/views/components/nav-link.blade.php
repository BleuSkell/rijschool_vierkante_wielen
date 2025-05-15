@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-[#B9A359] text-sm font-medium leading-5 text-gray-200 focus:outline-none focus:border-[#B9A359] transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-white hover:text-gray-300 hover:border-[#B9A359] focus:outline-none focus:text-gray-300 focus:border-[#B9A359] transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
