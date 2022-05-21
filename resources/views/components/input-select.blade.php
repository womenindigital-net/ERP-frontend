<div class="wrapper_{{$name}}">
    <select class="form-select @error($name) is-invalid @enderror" name="{{$name}}"
                                         id="{{$id}}" {{$required}} {{$multiple ? 'multiple' : ''}}">
        <option selected>Select</option>
        @foreach($records as $key => $record)
            @php($val = $record->id ?? $key)
            <option
                value="{{$val}}" {{ old($name) ? (old($name) == $val ? 'selected' : '') : ($isSelected($val) ? 'selected' : '')}}>
                {{$targetColumn ? $record->$targetColumn : ($record->name ?? $record)}}
            </option>
        @endforeach
    </select>
    @error($name)<span style="color: red">{{$message}}</span>@enderror
</div>