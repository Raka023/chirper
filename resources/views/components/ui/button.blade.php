@props([
    'variant' => 'primary',
    'type' => 'button',
    'size' => 'md',
])

@php
    $class = 'px-4 py-2 font-medium text-white transition rounded-md bg-zinc-800 hover:bg-zinc-950';

    $variant === 'secondary' && ($class = 'px-4 py-2 font-medium transition border rounded-md bg-zinc-50 text-zinc-900 border-zinc-200 hover:bg-zinc-100');
    $variant === 'danger' && ($class = 'px-4 py-2 font-medium text-white transition rounded-md bg-rose-600 hover:bg-rose-700');

    $size === 'sm' && ($class .= ' text-sm');
    $size === 'md' && ($class .= ' text-md');
    $size === 'lg' && ($class .= ' text-lg');
@endphp

@if ($attributes->has('href'))
    <a {{ $attributes->merge([
        'class' => $class,
    ]) }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge([
        'type' => $type,
        'class' => $class,
    ]) }}>
        {{ $slot }}
    </button>
@endif
