<x-container class="grid ls:grid-cols-2 grid-cols-1 gap-4 text-center">
    <x-page-heading>Choose Your Plan</x-page-heading>
    <p>Take charge of your membership and plan around your fitness goals.</p>
    @foreach ($memberships as $membership)
        <livewire:membership.membership-card :title="$membership->title" :description="$membership->description" :price="$membership->price" />
    @endforeach
</x-container>
