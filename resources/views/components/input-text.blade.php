{{--<input class="form-control" type="text" placeholder="Enter Card No" id="example-email-input">--}}

<div class="w-100">
       <input type="{{$type}}" {{ $readOnly }} name="{{ $name }}" @if ($type==='number' ) min="0"
              oninput="validity.valid||(value='');" @endif class="form-control @error($name) is-invalid @enderror" {{--
              id="{{$inputId}}" --}} value="{{ $value }}" placeholder="{{ $placeholder }}" {{$wireModel}} {{$required}}>
       @error($name)<span style="color: red">{{$message}}</span>@enderror
</div>