<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Nieuwe Bezoeker Registreren</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input, select { width: 300px; padding: 8px; }
        button { padding: 10px 20px; background: #2d3748; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    @extends('layouts.app')

@section('content')
<div class="form-container">
    <div class="form-card">
        <div class="form-header">
            <h1>Nieuwe Bezoeker</h1>
            <p>Registreer een gast in het systeem</p>
        </div>

        <form action="{{ route('bezoekers.store') }}" method="POST">
            @csrf 

            <div class="form-group">
                <label for="naam">Naam Bezoeker</label>
                <input type="text" name="naam" id="naam" placeholder="Volledige naam" required>
            </div>

            <div class="form-group">
                <label for="bedrijf">Bedrijf</label>
                <input type="text" name="bedrijf" id="bedrijf" placeholder="Bedrijfsnaam" required>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="idBezoekerspas">Bezoekerspas</label>
                    <select name="idBezoekerspas" id="idBezoekerspas" required>
                        <option value="" disabled selected>Kies een pas...</option>
                        @foreach($vrijePassen as $pas)
                            <option value="{{ $pas->idBezoekerspas }}">Pas {{ $pas->nummer }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="idReceptionist">Receptionist</label>
                    <select name="idReceptionist" id="idReceptionist" required>
                        {{-- We selecteren automatisch de ingelogde persoon --}}
                        @foreach($receptionisten as $receptionist)
                            <option value="{{ $receptionist->idReceptionist }}" 
                                {{ Auth::id() == $receptionist->idReceptionist ? 'selected' : '' }}>
                                {{ $receptionist->naam }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-actions">
                <a href="{{ route('bezoekers.index') }}" class="btn-secondary">Annuleren</a>
                <button type="submit" class="btn-submit">Bezoeker Inchecken</button>
            </div>
        </form>
    </div>
</div>
@endsection
</body>
</html>
