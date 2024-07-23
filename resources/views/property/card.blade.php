<div class="card">
    <div class="card-body">
        <h5 class="card-title">
            <a href="{{route('property.show', ['slug'=>$property->getSlug(), 'property' => $property])}}">{{$property->title}}</a>
        </h5>
        <p class="card-text">
            {{$property->surface}}m2 - {{$property->city}}
        </p>
        <div class="text-primary bold text-lg">
            {{number_format($property->price)}}€
        </div>
    </div>
</div>
