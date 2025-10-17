@props([
    'width' => 'default',
])

@php
    $class = 'w-full pb-2 text-3xl font-bold tracking-tight scroll-m-20 first:mt-0 xl:w-1/2';

    $width === 'small' && ($class = 'w-full pb-2 text-3xl font-bold tracking-tight scroll-m-20 first:mt-0 sm:w-1/2');
    $width === 'medium' && ($class = 'w-full pb-2 text-3xl font-bold tracking-tight scroll-m-20 first:mt-0 md:w-1/2');
    $width === 'large' && ($class = 'w-full pb-2 text-2xl font-bold tracking-tight scroll-m-20 first:mt-0 lg:w-1/2');
@endphp

<h2 class="{{ $class }}">{{ $slot }}</h2>
