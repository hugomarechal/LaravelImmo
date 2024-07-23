@extends('admin.admin')

@section('title', $option->exists ? "Editer un tag" : "Ajouter un tag")

@section('content')

    <h1>@yield('title')</h1>

    <form class="vstack gap-2" action="{{ route($option->exists ? 'admin.option.update' : 'admin.option.store', ['option' => $option]) }}" method="post">
        @csrf
        @method($option->exists ? 'put' : 'post')

        @include('shared.input', ['name'=>'name', 'value'=>$option->name])

        <div>
            <button class="btn btn-primary">
                @if($option->exists)
                    Modifier
                    @else
                        Créer
                @endif
            </button>
        </div>
    </form>

@endsection
