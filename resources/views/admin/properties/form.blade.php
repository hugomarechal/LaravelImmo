@extends('admin.admin')

@section('title', $property ? "Editer un bien" : "Ajouter un bien")

@section('content')

    <h1>@yield('title')</h1>

    <form class="vstack gap-2" action="{{ route($property ? 'admin.property.update' : 'admin.property.store', ['property' => $property]) }}" method="post">
        @csrf
        @method($property ? 'put' : 'post')

        <div class="row">
            @include('shared.input', ['class'=>'col', 'name'=>'title', 'value'=>$property ? $property->title : ""])
            <div class="col row">
                @include('shared.input', ['class'=>'col', 'name'=>'surface', 'value'=>$property ? $property->surface : ""])
                @include('shared.input', ['class'=>'col', 'name'=>'price', 'label'=>'Prix', 'value'=>$property ? $property->price : ""])
            </div>
        </div>
        @include('shared.input', ['type' => 'textarea', 'name'=>'description', 'value'=>$property ? $property->description : ""])
        <div class="row">
            @include('shared.input', ['class' => 'col', 'name'=>'rooms', 'value'=>$property ? $property->rooms : ""])
            @include('shared.input', ['class' => 'col', 'name'=>'bedrooms', 'value'=>$property ? $property->bedrooms : ""])
            @include('shared.input', ['class' => 'col', 'name'=>'floor', 'value'=>$property ? $property->floor : ""])
        </div>
        <div class="row">
            @include('shared.input', ['class' => 'col', 'name'=>'address', 'value'=>$property ? $property->address : ""])
            @include('shared.input', ['class' => 'col', 'name'=>'city', 'value'=>$property ? $property->city : ""])
            @include('shared.input', ['class' => 'col', 'name'=>'postcode', 'value'=>$property ? $property->postcode : ""])
        </div>
        @include('shared.select', ['name'=>'tags', 'label'=>'Tags', 'property' => $property ?? null, 'selected'=>$property ? $property->tags : [], 'multiple'=>true, 'tags' => $tags])
        @include('shared.checkbox', ['name'=>'sold', 'value'=>$property ? $property->sold : false])

        <div>
            <button class="btn btn-primary">
                @if($property)
                    Modifier
                    @else
                        Créer
                @endif
            </button>
        </div>
    </form>

@endsection
