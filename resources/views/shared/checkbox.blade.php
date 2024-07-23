@php
$class ??= null;
@endphp
<div @class(['form-check form-switch', $class])>
    <input type="hidden" name="{{$name}}" value="0">
    <input @if(old($name, $value ?? false)) checked @endif type="checkbox" name="{{$name}}" id="{{$name}}" class="form-check-input @error($name) is-invalid @enderror" role="switch" value="1">
    <label for="{{$name}}" class="form-check-label">Vendu</label>
    @error($name)
    <div class="invalid-feedback">
        {{$message}}
    </div>
    @enderror
</div>
