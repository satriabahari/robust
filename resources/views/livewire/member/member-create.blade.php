<div class=" ">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg dark:bg-neutral-800">
        <div class="p-6 bg-white border-b border-neutral-200 dark:bg-neutral-800">
            <h2 class="text-2xl font-semibold mb-6 dark:text-neutral-50">Create Member</h2>
            <form action="{{ route('member.store') }}" method="POST">
                @csrf

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="first_name"
                            class="block text-sm font-medium text-neutral-700 dark:text-neutral-200">First Name</label>
                        <input type="text" name="first_name" id="first_name"
                            class="mt-1 focus:ring-red-500 focus:border-red-500 block w-full shadow-sm sm:text-sm border-neutral-300 rounded-md dark:bg-neutral-900 dark:text-neutral-50">
                    </div>
                    <div>
                        <label for="last_name"
                            class="block text-sm font-medium text-neutral-700 dark:text-neutral-200">Last Name</label>
                        <input type="text" name="last_name" id="last_name"
                            class="mt-1 focus:ring-red-500 focus:border-red-500 block w-full shadow-sm sm:text-sm border-neutral-300 rounded-md dark:bg-neutral-900 dark:text-neutral-50">
                    </div>
                </div>

                <div class="mt-6">
                    <label for="date_birth"
                        class="block text-sm font-medium text-neutral-700 dark:text-neutral-200">Date of Birth</label>
                    <input type="date" name="date_birth" id="date_birth"
                        class="mt-1 focus:ring-red-500 focus:border-red-500 block w-full shadow-sm sm:text-sm border-neutral-300 rounded-md dark:bg-neutral-900 dark:text-neutral-50">
                </div>

                <div class="mt-6">
                    <label for="phone"
                        class="block text-sm font-medium text-neutral-700 dark:text-neutral-200">Phone</label>
                    <input type="text" name="phone" id="phone"
                        class="mt-1 focus:ring-red-500 focus:border-red-500 block w-full shadow-sm sm:text-sm border-neutral-300 rounded-md dark:bg-neutral-900 dark:text-neutral-50">
                </div>

                <div class="mt-6">
                    <label for="membership_id"
                        class="block text-sm font-medium text-neutral-700 dark:text-neutral-200">Membership</label>
                    <select name="membership_id" id="membership_id"
                        class="mt-1 focus:ring-red-500 focus:border-red-500 block w-full shadow-sm sm:text-sm border-neutral-300 rounded-md dark:bg-neutral-900 dark:text-neutral-50">
                        @foreach ($memberships as $membership)
                            <option value="{{ $membership->id }}">{{ $membership->title }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mt-6">
                    <label for="duration_id"
                        class="block text-sm font-medium text-neutral-700 dark:text-neutral-200">Duration</label>
                    <select name="duration_id" id="duration_id"
                        class="mt-1 focus:ring-red-500 focus:border-red-500 block w-full shadow-sm sm:text-sm border-neutral-300 rounded-md dark:bg-neutral-900 dark:text-neutral-50">
                        @foreach ($durations as $duration)
                            <option value="{{ $duration->id }}">{{ $duration->title }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mt-6">
                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                        Create
                    </button>
                    <a href="{{ route('member.index') }}"
                        class="ml-4 inline-flex items-center px-4 py-2 border border-neutral-300 rounded-md shadow-sm text-sm font-medium text-neutral-700 dark:text-neutral-200 bg-white hover:bg-neutral-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 dark:bg-neutral-700">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
