@props([
    'variant' => 'primary',
])

@php
    $class = 'px-4 py-2 font-medium text-white transition rounded-md bg-zinc-800 hover:bg-zinc-950';

    $variant === 'secondary' && ($class = 'px-4 py-2 font-medium transition border rounded-md bg-zinc-50 text-zinc-900 border-zinc-200 hover:bg-zinc-100');
@endphp

@if ($attributes->has('href'))
    <a {{ $attributes->merge([
        'type' => 'button',
        'class' => $class,
    ]) }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge([
        'type' => 'button',
        'class' => $class,
    ]) }}>
        {{ $slot }}
    </button>
@endif
