@php
    $class ??= null;
    $name ??= '';
    $value ??= collect([]);
    $label ??= ucfirst($name);

@endphp
<div @class(['form-group', $class])>
    <label for="{{$name}}">{{$label}}</label>
    <select name="{{$name}}[]" id="{{$name}}" multiple>
        @foreach($options as $k => $v)
            <option @if(collect($value)->contains($k)) selected @endif value="{{$k}}">{{$v}}</option>
        @endforeach
    </select>
    @error($name)
    <div class="invalid-feedback">
        {{$message}}
    </div>
    @enderror
</div>
