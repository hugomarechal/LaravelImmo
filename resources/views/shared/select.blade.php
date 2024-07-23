<div @class(['form-group'])>
    <label for="{{$name}}">{{$label}}</label>
    <select name="{{$name}}[]" id="{{$name}}" multiple>
        @foreach($tags as $key => $name)
            <option @if($selected->contains($key)) selected @endif value="{{$key}}">{{$name}}</option>
        @endforeach
    </select>
    @error($name)
    <div class="invalid-feedback">
        {{$message}}
    </div>
    @enderror
</div>
