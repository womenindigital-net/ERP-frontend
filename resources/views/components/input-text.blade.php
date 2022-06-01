{{--<input class="form-control" type="text" placeholder="Enter Card No" id="example-email-input">--}}

<div>
       <input type="{{$type}}" name="{{ $name }}" class="form-control @error($name) is-invalid @enderror" {{--
              id="{{$inputId}}" --}} value="{{ $value }}" placeholder="{{ $placeholder }}" {{$wireModel}} {{$required}}>

       @error($name)<span style="color: red">{{$message}}</span>@enderror
</div>