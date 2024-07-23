@extends('base')

@section('content')
    <div class="bg-light p-5 mb-5 text-center">
        <div class="container">
            <h1>LaravelImmo</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus aperiam aut culpa delectus distinctio expedita ipsa iste itaque natus neque officiis omnis, placeat provident sequi suscipit ut voluptatum. Esse.</p>
        </div>
    </div>

    <div class="container">
        <h2>Nos derniers biens</h2>
        <div class="row">
            @foreach($properties as $property)
            <div class="col">
                @include('property.card', $property)
            </div>
            @endforeach
        </div>
    </div>
@endsection
