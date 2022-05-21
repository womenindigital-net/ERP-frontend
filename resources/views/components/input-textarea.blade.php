<div {{ $attributes->merge(['class' => 'form-group']) }}>
    <label>{{ $label }}</label>
    <textarea class="form-control @error($name) is-invalid @enderror"
        name="{{ $name }}" rows="{{$rows}}" cols="{{$cols}}"
        placeholder="{{ $placeholder }}" {{$required}}>{{ $value }}</textarea>
</div>