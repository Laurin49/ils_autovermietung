<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mietfahrzeuge</title>
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
<h1>Unsere Fahrzeuge</h1>
<table>
    <thead>
    <tr>
        <th>Id</th>
        <th>Fahrzeug</th>
        <th>Kennzeichen</th>
        <th>Preis pro Tag</th>
        <th>Typ</th>
        <th>ausgeliehen</th>
    </tr>
    </thead>
    <tbody>
    @foreach ( $cars as $car )
        <tr>
            <td>{{$car->id}}</td>
            <td>{{$car->bezeichnung}}</td>
            <td>{{$car->kennzeichen}}</td>
            <td>{{$car->tagespreis}}</td>
            <td>{{$car->typ}}</td>
            <td>{{$car->ausgeliehen}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
