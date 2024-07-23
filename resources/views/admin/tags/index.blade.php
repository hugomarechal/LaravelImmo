@extends('admin.admin')

@section('title', 'Toutes les tags')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>@yield('title')</h1>
        <a href="{{ route('admin.tags.create') }}" class="btn btn-primary">Ajouter un tag</a>
    </div>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Nom</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tags as $tag)
            <tr>
                <td>{{$tag->name}}</td>
                <td>
                    <div class="d-flex gap-2 w-100 justify-content-end">
                        <a href="{{route('admin.tags.edit', $tag)}}" class="btn btn-primary">Modifier</a>
                        <form action="{{route('admin.tags.destroy', $tag)}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Supprimer</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $tags->links() }}
@endsection
