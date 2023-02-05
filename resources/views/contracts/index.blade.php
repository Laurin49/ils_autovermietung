<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verträge</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #ddd;
        }
        thead {
            font-style:italic;
            background-color: #b6bfda
        }
        th, td {
            text-align: left;
            padding: 16px;
        }
        tr:nth-child(even) {
            background-color: #e4e9b6;
        }
    </style>
</head>
<body>
    <h1>Verträge</h1>
    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Ausgabe</th>
            <th>Rückgabe</th>
            <th>Gesamtpreis</th>
            <th>Fahrzeug</th>
            <th>Kennzeichen</th>
            <th>Kunde</th>
            <th>Telefon</th>
        </tr>
        </thead>
        <tbody>
        @foreach ( $contracts as $contract )
            <tr>
                <td>{{$contract->id}}</td>
                <td>{{$contract->ausgabe}}</td>
                <td>{{$contract->rueckgabe}}</td>
                <td>{{$contract->gesamtpreis }}</td>
                <td>{{$contract->car->bezeichnung }}</td>
                <td>{{$contract->car->kennzeichen }}</td>
                <td>{{$contract->customer->name}}, {{$contract->customer->vorname}}</td>
                <td>{{$contract->customer->telefon1}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>
