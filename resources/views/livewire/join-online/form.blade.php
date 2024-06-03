<x-container>
    <form wire:submit="save" class="flex flex-col gap-4" action="{{ route('join-online.store') }}" method="POST">
        <x-input-field type="text" wire:model="first_name" placeholder="first name" />
        <x-input-field type="text" wire:model="last_name" placeholder="last name" />
        <x-input-field type="date" wire:model="date_birth" placeholder="date birth" />
        <x-input-field type="text" wire:model="phone" placeholder="phone" />
        {{-- {{ dd($memberships) }} --}}
        <x-select-field wire:model='membership_id' :items="$memberships" placeholder="Select Membership" />
        <x-select-field wire:model='duration_id' :items="$durations" placeholder="Select Duration" />
        <button type="submit">Save</button>
    </form>
</x-container>
