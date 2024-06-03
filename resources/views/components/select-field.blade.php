<select {{ $attributes->merge(['class' => 'rounded-md shadow-sm']) }}>
    @foreach ($items as $item)
        <option value="{{ $item->id }}" @if($item->id == 1) selected @endif>{{ $item->title }}</option>
    @endforeach
</select>
