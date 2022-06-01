<div {{ $attributes->merge(['class' => 'form-group']) }}>
    <textarea class="form-control @error($name) is-invalid @enderror" name="{{ $name }}" rows="{{$rows}}"
        cols="{{$cols}}" placeholder="{{ $placeholder }}" {{$required}} {{$wireModel}}>{{ $value }}</textarea>
    @error($name)<span style="color: red">{{$message}}</span>@enderror
</div>
