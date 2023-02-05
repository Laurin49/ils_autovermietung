<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reservierungen</title>
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
<h1>Reservierungen</h1>
<table>
    <thead>
    <tr>
        <th>Id</th>
        <th>gültig bis</th>
        <th>Fahrzeug</th>
        <th>Kunde</th>
    </tr>
    </thead>
    <tbody>
    @foreach ( $reservations as $reservation )
        <tr>
            <td>{{$reservation->id}}</td>
            <td>{{$reservation->gueltig_bis}}</td>
            <td>{{$reservation->car->bezeichnung}}</td>
            <td>{{$reservation->customer->name}}, {{$reservation->customer->vorname}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>

