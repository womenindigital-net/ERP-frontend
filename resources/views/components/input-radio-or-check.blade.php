<div class="row border-top py-2">
    <div class="col-xl-12 col-sm-12">
        <div class="mb-2">
            <h5 class="">{!! $label !!}</h5>
            <div class="form-check {{$isVertical}}">
                @foreach($records as $key => $record)
                    <div class="mb-2 me-5">
                        <input class="form-check-input" name="{{$name}}" type="{{$type}}" value="{{$key}}" {{$wireModel}}>
                        <label class="form-check-label">
                            {{$record}}
                        </label>
                    </div>
                @endforeach
            </div>
            @if($secondaryInputLabel)
                <label for="basicpill-firstname-input">{{$secondaryInputLabel}}</label>
                <div class="input-group" id="datepicker2">
                    <input type="text" class="form-control" name="{{$name}}_other" {{$secondaryInputWire}}>
                </div>
            @endif
        </div>
    </div>
</div>
