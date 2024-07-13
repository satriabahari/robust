<div class="min-h-screen w-64 bg-white lg:flex flex-col justify-between dark:bg-neutral-800">
    <div class="flex flex-col">
        <a href="{{ route('home') }}">
            <div class="p-4 h-16 flex items-center">
                <img src="{{ '/images/logo-robust.png' }}" alt="logo robust" class=" h-6 ">
                <img src="{{ '/images/robust.png' }}" alt="logo robust" class=" h-6 ">
            </div>
        </a>

        <div class="p-4 space-y-2">
            <h5 class="uppercase text-sm font-semibold mb-4 text-neutral-900 dark:text-neutral-50">Main Menu</h5>
            <x-sidebar-item :href="route('dashboard.index')" :active="request()->routeIs('dashboard.index')">
                <x-dashboard-icon />
                <span>Dashboard</span>
            </x-sidebar-item>
            <x-sidebar-item :href="route('member.index')" :active="request()->routeIs('member.index')">
                <x-member-icon />
                <span>Members</span>
            </x-sidebar-item>
        </div>
    </div>

    {{-- <x-sidebar-item :href="route('settings')">Settings</x-sidebar-item> --}}
    <div class="p-4 space-y-2">
        <h5 class="uppercase text-sm font-semibold mb-4 text-neutral-900 dark:text-neutral-50">Others</h5>
        <x-sidebar-item :href="route('profile')">
            <x-gear-icon />
            <span>Setting</span>
        </x-sidebar-item>
        {{-- <button wire:click='logoutUser' type="submit">Logout</button> --}}
        {{-- <x-sidebar-item wire:click='logoutUser'>
            <x-out-icon />
            <span>Logout</span>
        </x-sidebar-item> --}}
        <a wire:click='logoutUser'
            class="text-gray-900 py-3 px-4 font-medium text-sm  flex gap-x-2 items-center rounded-lg dark:text-neutral-200 hover:bg-red-50 duration-300 transition dark:hover:bg-neutral-500 cursor-pointer">
            <x-out-icon />
            <span>Logout</span>
        </a>
    </div>
</div>
