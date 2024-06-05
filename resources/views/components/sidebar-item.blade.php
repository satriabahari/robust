@props(['href', 'icon' => null, 'active' => false])

<a href="{{ $href }}"
    class="{{ $active ? 'text-red-500 bg-red-50 rounded ' : 'text-gray-900' }} py-2 px-2 font-medium text-sm flex gap-x-1 items-center">
    <p>{{ $slot }}</p>
</a>
