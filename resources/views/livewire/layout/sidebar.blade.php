<div class="h-screen w-auto bg-white flex flex-col justify-between">
    <div class="flex flex-col">
        <div class="p-4 h-16 flex items-center justify-center">
            <img src="{{ ('/images/logo-robust.png') }}" alt="logo robust" class=" h-4 ">
            <img src="{{ ('/images/robust.png') }}" alt="logo robust" class=" h-4 ">
        </div>

        <div class="p-4 space-y-2">

            <x-sidebar-item :href="route('dashboard.index')" :active="request()->routeIs('dashboard.index')">Dashboard</x-sidebar-item>
            <x-sidebar-item :href="route('member.index')" :active="request()->routeIs('member.index')">Members</x-sidebar-item>
        </div>
    </div>

    {{-- <x-sidebar-item :href="route('settings')">Settings</x-sidebar-item> --}}
    <div class="p-4">
        <x-sidebar-item :href="route('home')">Logout</x-sidebar-item>
    </div>
</div>
