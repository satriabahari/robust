<select
    {{ $attributes->merge(['class' => 'rounded-md shadow-sm bg-white dark:bg-neutral-900 dark:text-neutral-50 focus:border-red-500 focus:ring-red-500']) }}>
    @foreach ($items as $item)
        <option value="{{ $item->id }}" @if ($item->id == 1) selected @endif>{{ $item->title }}
        </option>
    @endforeach
</select>
