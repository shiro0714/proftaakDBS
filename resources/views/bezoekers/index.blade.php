<!DOCTYPE html>
<html>
<head>
    <title>Bezoekersoverzicht</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
   @extends('layouts.app')

@section('content')
<div class="index-header">
    <h1>Bezoekersregistratie</h1>
    <a href="{{ route('bezoekers.create') }}" class="btn-submit" style="text-decoration: none;">
        ➕ Nieuwe Bezoeker
    </a>
</div>

<div class="table-container">
    <table>
        <thead>
            <tr>
                <th>Naam</th>
                <th>Bedrijf</th>
                <th>Aankomst</th>
                <th>Vertrek</th>
                <th>Pasnummer</th>
                <th>Receptionist</th>
                <th>Acties</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bezoekers as $bezoeker)
            <tr>
                <td><strong>{{ $bezoeker->naam }}</strong></td>
                <td>{{ $bezoeker->bedrijf }}</td>
                <td>{{ \Carbon\Carbon::parse($bezoeker->aankomst)->format('H:i') }}</td>
                <td>
                    @if($bezoeker->vertrek)
                        {{ \Carbon\Carbon::parse($bezoeker->vertrek)->format('H:i') }}
                    @else
                        <span class="status-badge">Aanwezig</span>
                    @endif
                </td>
                <td><span class="pas-tag">#{{ $bezoeker->pas->nummer ?? '?' }}</span></td>
                <td>{{ $bezoeker->receptionist->naam ?? 'Onbekend' }}</td>
                <td>
                    @if(!$bezoeker->vertrek)
                        <form action="{{ route('bezoekers.update', $bezoeker->idBezoeker) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn-success">
                                Afmelden
                            </button>
                        </form>
                    @else
                        <span class="text-muted">Ingeleverd</span>
                    @endif
                </td>
                <td class="actions-cell">
    {{-- Knop voor Afmelden --}}
    @if(!$bezoeker->vertrek)
        <form action="{{ route('bezoekers.update', $bezoeker->idBezoeker) }}" method="POST">
            @csrf
            @method('PUT')
            <button type="submit" class="btn-success">Afmelden</button>
        </form>
    @endif

    {{-- Knop voor Verwijderen --}}
    <form action="{{ route('bezoekers.destroy', $bezoeker->idBezoeker) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn-danger">verwijder</button>
    </form>
</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
</body>
</html>
