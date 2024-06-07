<div class="bg-white rounded-xl p-4 col-span-2 space-y-2 dark:bg-neutral-800">
    <div class="flex gap-2 items-center">
        <div class="bg-neutral-100 p-1 rounded dark:bg-neutral-500 dark:text-neutral-50">
            <x-database-icon />
        </div>
        <span class="text-sm font-medium dark:text-neutral-50">{{ $title }}</span>
    </div>
    <div class="flex gap-3 items-center">
        <span class="text-2xl font-bold dark:text-neutral-50">{{ $count }}</span>
        <div class="bg-cyan-100 text-cyan-500 dark:text-cyan-600 text-xs rounded-sm py-0.5 px-2 flex gap-x-1 items-center">
            <span>
                {{ $percentage }}%
            </span>
            <x-arrow-left-icon />
        </div>
    </div>
</div>
