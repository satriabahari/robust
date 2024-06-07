@props(['href', 'icon' => null, 'active' => false])

<a href="{{ $href }}"
    class="{{ $active ? 'text-red-500 bg-red-100 dark:text-neutral-50 dark:bg-red-600' : 'text-gray-900' }} py-3 px-4 font-medium text-sm  flex gap-x-2 items-center rounded-lg dark:text-neutral-200 hover:bg-red-50 duration-300 transition dark:hover:bg-neutral-500 ">
    {{ $slot }}
</a>
