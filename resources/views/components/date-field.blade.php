<select {{ $attributes->merge(['class' => 'rounded-md shadow-sm']) }}>
    {{-- {{ dd($items) }} --}}
    @foreach ($items as $item)
        <option value="{{ $item->id }}">{{ $item->title }}</option>
    @endforeach
</select>

<input></input>
