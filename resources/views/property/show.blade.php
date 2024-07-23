@extends('base')

@section('title', $property->title)

@section('content')
<div class="container">

    <h1>{{$property->title}}</h1>
    <h2>{{$property->rooms}} pièces dans {{$property->surface}} m2</h2>
    <h2>{{$property->city}}</h2>

    <div class="text-primary fw-bold" style="font-size: 4rem">
        {{number_format($property->price, thousands_separator: ' ')}} €
    </div>

    <hr>

    <div class="mt-4">
        @include('shared.flash')
        <h4>Interessé ?</h4>
        <form action="{{route('property.contact', $property)}}" method="post" class="vstack gap-3">
            @csrf
            <div class="row">
                @include('shared.input', ['class' => 'col', 'name'=>'firstname'])
                @include('shared.input', ['class' => 'col', 'name'=>'lastname'])
            </div>
            <div class="row">
                @include('shared.input', ['class' => 'col', 'name'=>'tel'])
                @include('shared.input', ['type' => 'email', 'class' => 'col', 'name'=>'email'])
            </div>
            @include('shared.input', ['type' => 'textarea', 'class' => 'col', 'name'=>'message'])
            <div>
                <button class="btn btn-primary">Envoyer</button>
            </div>
        </form>
    </div>
    <div class="mt-4">
        <p>{!! nl2br($property->description) !!}</p>
        <div class="row">
            <div class="col-8">
                <h2>Caractéristiques</h2>
                <table class="table table-striped">
                    <tr>
                        <td>Surface habitable</td>
                        <td>{{$property->surface}}</td>
                    </tr>
                    <tr>
                        <td>Pièces</td>
                        <td>{{$property->rooms}}</td>
                    </tr>
                    <tr>
                        <td>Chambres</td>
                        <td>{{$property->bedrooms}}</td>
                    </tr>
                    <tr>
                        <td>Etage</td>
                        <td>{{$property->floor ?: 'RDC'}}</td>
                    </tr>
                </table>
            </div>
            <div class="col-4">
                <h2>
                    Spécificités
                </h2>
                <ul class="list-group">
                    @foreach($property->options as $option)
                        <li class="list-group-item">{{$option->name}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
