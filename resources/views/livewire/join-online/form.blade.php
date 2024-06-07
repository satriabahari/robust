<x-container isFullScreen class="grid grid-cols-2 pt-16 gap-x-8 items-center justify-center">
    <div class="bg-red-500 h-full">
        tets
    </div>
    <div class="text-center space-y-8">
        <h3 class="text-neutral-900 dark:text-neutral-50 font-semibold text-4xl">Join Online</h3>
        <form wire:submit="save" class="flex flex-col gap-4 " action="{{ route('join-online.store') }}" method="POST">
            <div class="bg-white dark:bg-neutral-800 p-4 rounded-xl flex flex-col gap-4">
                <x-input-field type="text" wire:model="first_name" placeholder="first name" />
                <x-input-field type="text" wire:model="last_name" placeholder="last name" />
                <x-input-field type="date" wire:model="date_birth" placeholder="date birth" />
                <x-input-field type="text" wire:model="phone" placeholder="phone" />
                {{-- {{ dd($memberships) }} --}}
                <x-select-field wire:model='membership_id' :items="$memberships" placeholder="Select Membership" />
                <x-select-field wire:model='duration_id' :items="$durations" placeholder="Select Duration" />
            </div>
            <button type="submit" class="bg-red-500 text-neutral-50 rounded-lg py-2 px-4 hover:bg-red-600 transition duration-300 active:scale-95">Join</button>
        </form>
    </div>
</x-container>
