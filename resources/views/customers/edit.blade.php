<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>Customers Edit</title>
</head>
<body>
<h1>Kundendaten ändern</h1>
<form action="/customers/{{$customer->id}}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Name: </label><br>
    <input
        type="text"
        name="name"
        id="name"
        value="{{$customer->name}}"><br>
    <label for="vorname">Vorname: </label><br>
    <input
        type="text"
        name="vorname"
        id="vorname"
        value="{{$customer->vorname}}"><br>
    <label for="strasse">Straße: </label><br>
    <input
        type="text"
        name="strasse"
        id="strasse"
        value="{{$customer->strasse}}"><br>
    <label for="plz">Plz: </label><br>
    <input
        type="text"
        name="plz"
        id="plz"
        value="{{$customer->plz}}"><br>
    <label for="ort">Ort: </label><br>
    <input
        type="text"
        name="ort"
        id="ort"
        value="{{$customer->ort}}"><br>
    <label for="telefon1">Telefon 1: </label><br>
    <input
        type="text"
        name="telefon1"
        id="telefon1"
        value="{{$customer->telefon1}}"><br>
    <label for="telefon2">Telefon 2:</label><br>
    <input
        type="text"
        name="telefon2"
        id="telefon2"
        value="{{$customer->telefon2}}"><br>
    <label for="email">E-Mail: </label><br>
    <input
        type="email"
        name="email"
        id="email"
        value="{{$customer->email}}"><br>
    <input
        type="submit"
        name="submit"
        id="submit"
        value="Kundendaten ändern">
</form>
</body>
</html>
