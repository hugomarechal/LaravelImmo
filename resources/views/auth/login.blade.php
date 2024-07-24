@extends('base')

@section('title', 'Connexion')

@section('content')
    <div class="mt-4 container">
        <h1>@yield('title')</h1>

        <form action="{{route('login')}}" method="post" class="vstack gap-3">
            @csrf
            @include('shared.flash')
            @include('shared.input', ['type' => 'email', 'class' => 'col', 'name'=>'email'])
            @include('shared.input', ['type' => 'password', 'class' => 'col', 'name'=>'password'])
            <div class="">
                <button class="btn btn-primary">
                    Se connecter
                </button>
            </div>
        </form>
    </div>
@endsection
