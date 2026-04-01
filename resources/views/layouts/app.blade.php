<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Bezoekers Systeem</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @auth
        <nav>
            <div>
                <a href="{{ route('bezoekers.index') }}">📋 Overzicht</a>
                <a href="{{ route('bezoekers.create') }}">➕ Nieuwe Bezoeker</a>
            </div>
            <div>
                <span>Ingelogd als: {{ Auth::user()->naam }}</span>
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-danger">Uitloggen</button>
                </form>
            </div>
        </nav>
    @endauth

    <div class="container">
        @yield('content') {{-- Hier komt de inhoud van je andere paginas --}}
    </div>
</body>
</html>