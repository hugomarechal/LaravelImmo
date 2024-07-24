@extends('admin.admin')

@section('title', $tag->exists ? "Editer un tag" : "Ajouter un tag")

@section('content')

    <h1>@yield('title')</h1>

    <form class="vstack gap-2" action="{{ route($tag->exists ? 'admin.tags.update' : 'admin.tags.store', ['tag' => $tag]) }}" method="post">
        @csrf
        @method($tag->exists ? 'put' : 'post')

        @include('shared.input', ['name'=>'name', 'value'=>$tag->name])

        <div>
            <button class="btn btn-primary">
                @if($tag->exists)
                    Modifier
                    @else
                        Créer
                @endif
            </button>
        </div>
    </form>

@endsection
