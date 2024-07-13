<x-container :isFullScreen="true" class="text-center">
    <x-page-heading>Choose Your Plan</x-page-heading>
    <p class="text-neutral-700 dark:text-neutral-400 pt-2 pb-12">Take charge of your membership and plan around your fitness goals.</p>
    <div class="grid lg:grid-cols-2 grid-cols-1 gap-8 ">
        @foreach ($memberships as $membership)
            <livewire:membership.membership-card :title="$membership->title" :description="$membership->description" :price="$membership->price" />
        @endforeach
    </div>
</x-container>
