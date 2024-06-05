<section>
    <button class="p-2 bg-blue-500 rounded text-gray-50 mb-4">
        <a href="{{ route('member.create') }}" class="flex gap-1 items-center text-sm">
            <x-plus-icon />
            <p>Create</p>
        </a>
    </button>
    <input type="text" wire:model.live="search" />
    <table class="w-full">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No.</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">First Name
                </th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Last Name</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date Birth
                </th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phone</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Membership
                </th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Duration</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($members as $member)
                <tr wire:key='{{ $member->id }}'>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $member->id }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $member->first_name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $member->last_name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $member->date_birth }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $member->phone }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-wrap">
                        {{ $member->membership->title }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $member->duration->title }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 flex items-center gap-2">
                        <a href="{{ route('member.edit', $member->id) }}"
                            class="bg-green-500 p-2 rounded text-neutral-50">
                            <x-edit-icon />
                        </a>
                        <form action="{{ route('member.destroy', $member->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-neutral-50 bg-red-500 rounded p-2">
                                <x-trash-icon />
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $members->links() }}
    </div>
</section>
