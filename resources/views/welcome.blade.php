<!-- laad codde is :php artisan serve -->
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Mijn Laravel Opdracht</title>
    <style>
        body { font-family: sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; background-color: #f3f4f6; }
        .card { background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); text-align: center; }
        h1 { color: #ff2d20; }
    </style>
</head>
<body>
    <div class="card">
    <a href="{{ route('bezoekers.index') }}">proftaak</a>

        <h1>Laravel Project van [Rachid]</h1>
        <p>De lokale MySQL database (poort 8889) is succesvol geconfigureerd.</p>
        <p>Datum: 5 februari 2026</p>
    </div>
</body>
</html>