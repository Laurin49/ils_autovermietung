<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customers</title>
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
<h1>Kunden</h1>
<table>
    <thead>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Vorname</th>
        <th>Strasse</th>
        <th>Plz</th>
        <th>Ort</th>
        <th>Telefon 1</th>
        <th>Telefon 2</th>
        <th>E-Mail</th>
        <th>Ändern</th>
        <th>Löschen</th>
    </tr>
    </thead>
    <tbody>
    @foreach ( $customers as $customer )
        <tr>
            <td>{{$customer->id}}</td>
            <td>{{$customer->name}}</td>
            <td>{{$customer->vorname}}</td>
            <td>{{$customer->strasse}}</td>
            <td>{{$customer->plz}}</td>
            <td>{{$customer->ort}}</td>
            <td>{{$customer->telefon1}}</td>
            <td>{{$customer->telefon2}}</td>
            <td>{{$customer->email}}</td>
            <td>
                <a href="/customers/{{$customer->id}}/edit">Ändern</a>
            </td>
            <td>
                <form action="/customers/{{$customer->id}}/" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="Löschen!">
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
