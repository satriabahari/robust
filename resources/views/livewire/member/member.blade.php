<section>
    <div class="flex justify-between items-center mb-4">
        <form wire:submit='search' method="GET"
            class="flex items-center px-4 py-2 gap-x-2 bg-white rounded-lg dark:bg-neutral-700 ">
            <button type="submit" class="text-neutral-900 dark:text-neutral-50">
                <x-search-icon />
            </button>
            <input wire:model='query' type="text" name="search" id="search" placeholder="Search..."
                class="bg-white p-0 text-sm focus:ring-0 border-none dark:bg-neutral-700 dark:text-neutral-50" />
        </form>

        <livewire:dashboard.create-button title="Add New Member" />
    </div>
    <div class="bg-white dark:bg-neutral-700 p-2 rounded-lg  overflow-x-scroll">
        <table class="lg:table-fixed w-full">
            <thead class="bg-neutral-50 dark:bg-neutral-600">
                <tr>
                    <th
                        class="px-6 py-3 text-left text-xs font-medium text-neutral-500 dark:text-neutral-200 uppercase tracking-wider">
                        No.</th>
                    <th
                        class="px-6 py-3 text-left text-xs font-medium text-neutral-500 dark:text-neutral-200 uppercase tracking-wider">
                        First
                        Name
                    </th>
                    <th
                        class="px-6 py-3 text-left text-xs font-medium text-neutral-500 dark:text-neutral-200 uppercase tracking-wider">
                        Last Name
                    </th>
                    <th
                        class="px-6 py-3 text-left text-xs font-medium text-neutral-500 dark:text-neutral-200 uppercase tracking-wider">
                        Date
                        Birth
                    </th>
                    <th
                        class="px-6 py-3 text-left text-xs font-medium text-neutral-500 dark:text-neutral-200 uppercase tracking-wider">
                        Phone
                    </th>
                    <th
                        class="px-6 py-3 text-left text-xs font-medium text-neutral-500 dark:text-neutral-200 uppercase tracking-wider">
                        Membership
                    </th>
                    <th
                        class="px-6 py-3 text-left text-xs font-medium text-neutral-500 dark:text-neutral-200 uppercase tracking-wider">
                        Start Date
                    </th>
                    <th
                        class="px-6 py-3 text-left text-xs font-medium text-neutral-500 dark:text-neutral-200 uppercase tracking-wider">
                        End Date
                    </th>
                    <th
                        class="px-6 py-3 text-left text-xs font-medium text-neutral-500 dark:text-neutral-200 uppercase tracking-wider">
                        Duration
                    </th>
                    <th
                        class="px-6 py-3 text-left text-xs font-medium text-neutral-500 dark:text-neutral-200 uppercase tracking-wider">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white dark:bg-neutral-700 divide-y divide-gray-200">
                @forelse ($members as $member)
                    <tr wire:key='{{ $member->id }}'>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-neutral-500 dark:text-neutral-200">
                            {{ $member->id }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-neutral-500 dark:text-neutral-200">
                            {{ $member->first_name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-neutral-500 dark:text-neutral-200">
                            {{ $member->last_name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-neutral-500 dark:text-neutral-200">
                            {{ $member->date_birth }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-neutral-500 dark:text-neutral-200 text-wrap">
                            {{ $member->phone }}</td>
                        <td
                            class="px-6 py-4 whitespace-nowrap text-sm text-neutral-500 dark:text-neutral-200 text-wrap">
                            {{ $member->membership->title }}</td>
                        <td
                            class="px-6 py-4 whitespace-nowrap text-sm text-neutral-500 dark:text-neutral-200 text-wrap">
                            {{ $member->membership->created_at->format('Y-m-d') }}</td>
                        <td
                            class="px-6 py-4 whitespace-nowrap text-sm text-neutral-500 dark:text-neutral-200 text-wrap">
                            {{ $member->membership->created_at->addMonths($member->duration->title)->format('Y-m-d') }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-neutral-500 dark:text-neutral-200">
                            {{ $member->duration->title }}
                        </td>
                        <td
                            class="px-6 py-4 whitespace-nowrap text-sm text-neutral-500 dark:text-neutral-200 flex items-center gap-2">
                            <a href="{{ route('member.edit', $member->id) }}"
                                class="bg-green-500 p-2 rounded text-neutral-50 hover:bg-green-600 transition duration-300">
                                <x-edit-icon />
                            </a>

                            <a href="{{ route('member.destroy', $member->id) }}"
                                class="text-neutral-50 bg-red-500 rounded p-2 hover:bg-red-600 transition duration-300"
                                data-confirm-delete="true">
                                <x-trash-icon />
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr class="flex justify-center items-center">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-neutral-700 ">
                            No Data
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $members->links() }}
    </div>
</section>
