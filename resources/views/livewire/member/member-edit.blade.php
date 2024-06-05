<div class="">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
            <h2 class="text-2xl font-semibold mb-6">Edit Member</h2>
            <form action="{{ route('member.update', $member->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
                        <input type="text" name="first_name" id="first_name" value="{{ $member->first_name }}"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
                        <input type="text" name="last_name" id="last_name" value="{{ $member->last_name }}"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                </div>

                <div class="mt-6">
                    <label for="date_birth" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                    <input type="date" name="date_birth" id="date_birth" value="{{ $member->date_birth }}"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="mt-6">
                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                    <input type="text" name="phone" id="phone" value="{{ $member->phone }}"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="mt-6">
                    <label for="membership_id" class="block text-sm font-medium text-gray-700">Membership</label>
                    <select name="membership_id" id="membership_id"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        @foreach ($memberships as $membership)
                            <option value="{{ $membership->id }}"
                                {{ $member->membership_id == $membership->id ? 'selected' : '' }}>
                                {{ $membership->title }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mt-6">
                    <label for="duration_id" class="block text-sm font-medium text-gray-700">Duration</label>
                    <select name="duration_id" id="duration_id"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        @foreach ($durations as $duration)
                            <option value="{{ $duration->id }}"
                                {{ $member->duration_id == $duration->id ? 'selected' : '' }}>{{ $duration->title }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mt-6">
                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Update
                    </button>
                    <a href="{{ route('member.index') }}"
                        class="ml-4 inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
