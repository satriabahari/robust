<x-container isFullScreen class="text-center">
    <x-page-heading>Choose Your Plan</x-page-heading>
    <p>Take charge of your membership and plan around your fitness goals.</p>
    <div class="grid lg:grid-cols-2 grid-cols-2 gap-4 ">
        @foreach ($memberships as $membership)
            <livewire:membership.membership-card :title="$membership->title" :description="$membership->description" :price="$membership->price" />
        @endforeach
    </div>
</x-container>
