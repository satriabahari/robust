<nav class="w-full h-16 bg-white px-4 py-2 flex justify-between items-center">
    <form method="GET" class="flex items-center px-4 py-2 gap-x-2 bg-neutral-100 rounded-full">
        <button type="submit">
            <x-search-icon />
        </button>
        <input type="text" name="search" id="search" placeholder="Search..."
            class="bg-gray-100 p-0 text-sm focus:ring-0 border-none" />
    </form>
    <div class="flex gap-x-4 items-center">
        <div class="bg-gray-100 rounded-full p-2 cursor-pointer">
            <x-clarity-notification-outline-badged class="w-5 h-5" />
        </div>
        <x-dark-mode-toggle />
        <button class="bg-red-500 rounded-full text-white p-2">
            {{-- <a href="{{ route('profile') }}"> --}}
                <x-lineawesome-user-solid class="w-5 h-5" />
            {{-- </a> --}}
        </button>
        <h5 class="font-medium">Satria Bahari</h5>
    </div>
</nav>
