<div @class(['form-group'])>
    <label for="{{$name}}">{{$label}}</label>
    <select name="{{$name}}[]" id="{{$name}}" multiple>
        @foreach($tags as $key => $tag)
            <option @if($property && $selected->contains($key)) selected @endif value="{{$key}}">{{$tag->name}}</option>
        @endforeach
    </select>
    @error($name)
    <div class="invalid-feedback">
        {{$message}}
    </div>
    @enderror
</div>
