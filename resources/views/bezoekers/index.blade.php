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
    <h1>Bezoekersregistratie</h1>
    <table>
        <thead>
            <tr>
                <th>Naam</th>
                <th>Bedrijf</th>
                <th>Aankomst</th>
                <th>Vertrek</th>
                <th>Pasnummer</th>
                <th>Receptionist</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bezoekers as $bezoeker)
            <tr>
                <td>{{ $bezoeker->naam }}</td>
                <td>{{ $bezoeker->bedrijf }}</td>
                <td>{{ $bezoeker->aankomst }}</td>
                <td>{{ $bezoeker->vertrek ?? 'Nog aanwezig' }}</td>
                <td>{{ $bezoeker->pas->nummer ?? 'Geen pas' }}</td>
                <td>{{ $bezoeker->receptionist->naam ?? 'Onbekend' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
