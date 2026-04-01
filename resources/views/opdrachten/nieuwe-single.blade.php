<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            color: #333;
        }

        .form-container {
            max-width: 400px;
        }

        h2 {
            font-weight: normal;
            font-style: italic;
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-size: 1.1rem;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #999;
            box-sizing: border-box; /* Zorgt dat padding de breedte niet beïnvloedt */
            font-size: 1rem;
        }

        /* Placeholder kleur lichter maken zoals in voorbeeld */
        input::placeholder {
            color: #aaa;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #20a69a; /* De groen/blauwe kleur van de knop */
            color: white;
            border: none;
            font-size: 1.1rem;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background-color: #1a8a80;
        }
    </style>
</head>
<body>
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('library') }}">Library</a>
    <a href="{{ route('songs') }}">Songs</a>
    <a href="{{ route('nieuwe-single') }}">Nieuwe Single</a>
        <div class="form-container">
        <h2>Voorbeeld van het "nieuwe single" formulier</h2>

       <form action="{{ route('songs.store') }}" method="POST">
            @csrf
            <div>
                <label>Naam van de single</label>
                <input type="text" name="title" placeholder="Naam van de single" required>
            </div>

            <div>
                <label>Artiest of Band</label>
                <input type="text" name="artist" placeholder="Auteur" required>
            </div>

            <div>
                <label>Release jaar</label>
                <input type="number" name="release_year" placeholder="Release jaar" required>
            </div>

    <button type="submit">Verstuur</button>
</form>
    </div>

</body>
</html>