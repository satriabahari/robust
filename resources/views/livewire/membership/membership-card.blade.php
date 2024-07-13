<div class="text-center flex flex-col ">
    <div class="space-y-1 bg-red-600 p-4 text-neutral-50 rounded-t-xl">
        <h3 class="text-lg font-bold dark:text-neutral-200">Best Value</h3>
        <h1 class="lg:text-3xl text-2xl font-bold dark:text-neutral-100">{{ $title }}</h1>
    </div>
    <div class="p-4 space-y-2 bg-white flex flex-col items-center rounded-b-xl dark:bg-neutral-800">
        <p class="dark:text-neutral-50 font-bold">From as Low as</p>
        <h1 class="text-red-600 font-bold lg:text-4xl text-3xl">Rp {{ $price }} <span
                class="text-neutral-900 text-sm dark:text-neutral-300">/mth</span></h1>
        <p class="text-sm font-bold dark:text-neutral-50 py-2 border-t border-neutral-900 dark:border-neutral-300">Access
        </p>
        <h3 class="font-bold dark:text-neutral-50">Home Club Cibubur Junction</h3>
        <p class="dark:text-neutral-50 w-3/4">{{ $description }}</p>
        <p class="text-sm font-bold dark:text-neutral-50 py-2 border-t border-neutral-900 dark:border-neutral-300">
            Commitment Length</p>
        <div class="mb-4">
            @foreach ($durations as $duration)
                <p class="dark:text-neutral-50">{{ $duration->title }} Month</p>
            @endforeach
        </div>
        <a href="{{ route('join-online.create') }}"
            class="bg-red-600 py-2 px-4 rounded text-white w-fit duration-300 transition active:scale-95 hover:bg-red-700">Join
            Now</a>
    </div>
</div>
