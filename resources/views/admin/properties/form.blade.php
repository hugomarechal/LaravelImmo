@extends('admin.admin')

@section('title', $property->exists ? "Editer un bien" : "Ajouter un bien")

@section('content')

    <h1>@yield('title')</h1>

    <form class="vstack gap-2" action="{{ route($property->exists ? 'admin.property.update' : 'admin.property.store', ['property' => $property]) }}" method="post">
        @csrf
        @method($property->exists ? 'put' : 'post')

        <div class="row">
            @include('shared.input', ['class'=>'col', 'name'=>'title', 'value'=>$property->title])
            <div class="col row">
                @include('shared.input', ['class'=>'col', 'name'=>'surface', 'value'=>$property->surface])
                @include('shared.input', ['class'=>'col', 'name'=>'price', 'label'=>'Prix', 'value'=>$property->price])
            </div>
        </div>
        @include('shared.input', ['type' => 'textarea', 'name'=>'description', 'value'=>$property->description])
        <div class="row">
            @include('shared.input', ['class' => 'col', 'name'=>'rooms', 'value'=>$property->rooms])
            @include('shared.input', ['class' => 'col', 'name'=>'bedrooms', 'value'=>$property->bedrooms])
            @include('shared.input', ['class' => 'col', 'name'=>'floor', 'value'=>$property->floor])
        </div>
        <div class="row">
            @include('shared.input', ['class' => 'col', 'name'=>'address', 'value'=>$property->address])
            @include('shared.input', ['class' => 'col', 'name'=>'city', 'value'=>$property->city])
            @include('shared.input', ['class' => 'col', 'name'=>'postcode', 'value'=>$property->postcode])
        </div>
        @include('shared.select', ['name'=>'tags', 'label'=>'Tags', 'selected'=>$property->tags()->pluck('id'), 'multiple'=>true, 'tags' => $tags])
        @include('shared.checkbox', ['name'=>'sold', 'value'=>$property->sold])

        <div>
            <button class="btn btn-primary">
                @if($property->exists)
                    Modifier
                    @else
                        Créer
                @endif
            </button>
        </div>
    </form>

@endsection
