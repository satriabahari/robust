<button x-on:click="darkMode = !darkMode" type="button"
    class="p-2 bg-neutral-100 rounded-full flex dark:bg-neutral-700 dark:text-neutral-50 hover:bg-neutral-200 dark:hover:bg-neutral-600 transition duration-300 active:scale-95">
    <x-sun-icon />
    <x-moon-icon />
    {{-- <x-plus-icon x-show="darkMode" />
    <x-gear-icon x-show="!darkMode" /> --}}
</button>
