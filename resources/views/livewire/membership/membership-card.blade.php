@php
    $durations = [1, 4, 12, 18];
@endphp

<div class="dark:bg-gray-800 text-center">
    <div class="space-y-1 bg-red-500 p-4 text-gray-50">
        <h3 class="text-lg font-bold">Best Value</h3>
        <h1 class="lg:text-3xl text-2xl font-bold">{{ $title }}</h1>
    </div>
    <div class="p-4 space-y-2 bg-white">
        <p class="dark:text-gray-50 font-bold">From as Low as</p>
        <h1 class="text-red-500 font-bold lg:text-4xl text-3xl">Rp {{ $price }} <span
                class="text-gray-900 text-sm">/mth</span></h1>
        <p class="text-sm font-extralight dark:text-gray-50">Access</p>
        <h3 class="font-bold dark:text-gray-50">Home Club Cibubur Junction</h3>
        <p class="dark:text-gray-50">{{ $description }}</p>
        <p class="text-sm font-extralight dark:text-gray-50">Commitment Length</p>
        <div>
            @foreach ($durations as $month)
                <p class="dark:text-gray-50">{{ $month }} Month{{ $month > 1 ? 's' : '' }}</p>
            @endforeach
        </div>
        <a href="{{ route('join-online.create') }}">Join Now</a>
    </div>
</div>
