<div class="w-100" {{ $attributes->merge(['class' => 'form-group']) }}>
    {{-- <label>{{ $label }}</label> --}}
    <textarea class="form-control p-1 @error($name) is-invalid @enderror" {{$wireModel}} name="{{ $name }}"
        rows="{{$rows}}" cols="{{$cols}}" placeholder="{{ $placeholder }}" {{$required}}> {{ $value }}</textarea>
</div>