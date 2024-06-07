<div class="grid grid-cols-1 lg:grid-cols-6 gap-4">
    <livewire:dashboard.statistic-item title="Total User" :count="$users" percentage="100"/>
    <livewire:dashboard.statistic-item title="Total Member" :count="$members" percentage="70"/>
    <livewire:dashboard.statistic-item title="Total Merchandise" :count="$merchandises" percentage="77.7"/>
    <div class="bg-white dark:bg-neutral-800  rounded-xl p-4 w-full col-span-3">
        <canvas id="myChart"></canvas>
    </div>
    <div class="bg-white rounded-xl p-4 w-full col-span-3 dark:bg-neutral-800 ">
        <canvas id="barChart"></canvas>
    </div>
    <script src="{{ mix('/js/app.js') }}"></script>
</div>
