<section>
    <livewire:merchandise.hero />
    <div class="grid lg:grid-cols-4 grid-cols-2 gap-6">
        @foreach ($merchandises as $merchandise)
            <div class="bg-white dark:bg-neutral-800 rounded-xl p-4 flex flex-col justify-between space-y-4 drop-shadow transition duration-300 hover:scale-105 hover:bg-neutral-100/90 dark:hover:bg-neutral-700">
                <img src="{{ $merchandise->image }}" alt="{{ $merchandise->title }}" class="rounded-md bg-neutral-200 h-60 object-cover overflow-hidden">
                <div class="space-y-1">
                    <h2 class=" font-semibold leading-tight text-neutral-700 dark:text-neutral-200">{{ $merchandise->title }}</h2>
                    <p class="text-sm text-neutral-500 dark:text-neutral-400">{{ $merchandise->description }}</p>
                    <p class="font-medium text-lg text-neutral-800 dark:text-neutral-200">Rp {{ $merchandise->price }}</p>
                    <p class="text-sm text-neutral-600 font-medium dark:text-neutral-400">stock: {{ $merchandise->stock }}</p>
                </div>
                <button class="py-1 px-4 rounded-full bg-red-600 text-neutral-50 hover:bg-red-700 transition duration-300">
                    Buy Now
                </button>
            </div>
        @endforeach
    </div>
</section>
