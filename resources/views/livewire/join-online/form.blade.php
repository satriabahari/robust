<x-container>
    <form wire:submit="save" class="flex flex-col gap-4">
        <x-input-field type="text" wire:model="first_name" placeholder="first name" />
        <x-input-field type="text" wire:model="last_name" placeholder="last name" />
        <x-input-field type="text" wire:model="date_birth" placeholder="date birth" />
        <x-input-field type="text" wire:model="phone" placeholder="phone" />
        <x-input-field type="text" wire:model="membership_name" placeholder="membership name" />
        <x-input-field type="text" wire:model="duration" placeholder="first name" />
        <button type="submit">Save</button>
    </form>
</x-container>
