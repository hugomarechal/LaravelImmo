<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        @php
        $route = request()->route()->getName();
        @endphp
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a @class(['nav-link', 'active' => str_contains($route, 'property.')]) href="{{route('property.index')}}">Voir tous les biens</a>
                </li>
                <li class="nav-item">
                    <a @class(['nav-link', 'active' => str_contains($route, 'property.')]) href="{{route('admin.property.index')}}">Gérer les biens</a>
                </li>
                <li class="nav-item">
                    <a @class(['nav-link', 'active' => str_contains($route, 'options.')]) href="{{route('admin.option.index')}}">Gérer les tags</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
