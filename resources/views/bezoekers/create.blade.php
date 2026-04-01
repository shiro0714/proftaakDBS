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
    <h1>Nieuwe Bezoeker</h1>
    <form action="{{ route('bezoekers.store') }}" method="POST">
        @csrf <div class="form-group">
            <label>Naam Bezoeker:</label>
            <input type="text" name="naam" required>
        </div>

        <div class="form-group">
            <label>Bedrijf:</label>
            <input type="text" name="bedrijf" required>
        </div>

        <div class="form-group">
            <label>Bezoekerspas Nummer:</label>
            <select name="idBezoekerspas" required>
                @foreach($vrijePassen as $pas)
                    <option value="{{ $pas->idBezoekerspas }}">Pas {{ $pas->nummer }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Receptionist (Ingelogd als):</label>
            <select name="idReceptionist" required>
                @foreach($receptionisten as $receptionist)
                    <option value="{{ $receptionist->idReceptionist }}">{{ $receptionist->naam }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit">Bezoeker Inchecken</button>
    </form>
</body>
</html>
