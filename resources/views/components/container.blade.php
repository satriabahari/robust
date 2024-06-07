@props(['isFullScreen'])

@php
    $classes = ($isFullScreen ?? false)
                ? 'min-h-screen w-full'
                : 'h-auto w-full'
@endphp

<section {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</section>
