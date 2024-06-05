@props(['isFullScreen'])

@php
    $classes = ($isFullScreen ?? false)
                ? 'min-h-screen py-8 w-full'
                : 'h-auto py-8 w-full'
@endphp

<section {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</section>
