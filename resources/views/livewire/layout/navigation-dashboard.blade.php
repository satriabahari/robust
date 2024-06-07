<nav class="w-full h-16 bg-white px-4 py-2 flex justify-end items-center dark:bg-neutral-800">
    <div class="flex gap-x-4 items-center">
        <div class="bg-gray-100 rounded-full p-2 cursor-pointer dark:bg-neutral-700 dark:text-neutral-50">
            <x-clarity-notification-outline-badged class="w-5 h-5" />
        </div>
        <x-dark-mode-toggle />
        @if (Auth::check())
            <h5 class="font-medium text-neutral-900 dark:text-neutral-50 capitalize">{{ Auth::user()->name }}</h5>
        @else
            <h5 class="font-medium text-neutral-900 dark:text-neutral-50 capitalize">Guest</h5>
        @endif
    </div>
</nav>
