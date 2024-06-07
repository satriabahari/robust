<button class="py-2 text-sm px-4 rounded-lg bg-blue-500 text-white hover:bg-blue-600 transition duration-300">
    <a href="{{ route('member.create') }}" class="flex gap-x-2 items-center">
        <x-plus-icon />
        <span>
            {{ $title }}
        </span>
    </a>
</button>
