<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>Customers Create</title>
</head>
<body>
<form action="/customers" method="POST">
    @csrf
    <label for="name">Name: </label><br>
    <input
        type="text"
        name="name"
        id="name"
        placeholder="Name ..."><br>
    <label for="vorname">Vorname: </label><br>
    <input
        type="text"
        name="vorname"
        id="vorname"
        placeholder="Vorname ..."><br>
    <label for="strasse">Straße: </label><br>
    <input
        type="text"
        name="strasse"
        id="strasse"
        placeholder="Straße ..."><br>
    <label for="plz">Plz: </label><br>
    <input type="text"
           name="plz"
           id="plz"
           placeholder="Plz ..."><br>
    <label for="ort">Ort: </label><br>
    <input
        type="text"
        name="ort"
        id="ort"
        placeholder="Ort ..."><br>
    <label for="telefon1">Telefon 1: </label><br>
    <input
        type="text"
        name="telefon1"
        id="telefon1"
        placeholder="Telefon 1 ..."><br>
    <label for="telefon2">Telefon 2:</label><br>
    <input
        type="text"
        name="telefon2"
        id="telefon2"
        placeholder="Telefon 2 ..."><br>
    <label for="email">E-Mail: </label><br>
    <input
        type="email"
        name="email"
        id="email"
        placeholder="E-Mail ..."><br>
    <input
        type="submit"
        name="submit"
        id="submit"
        value="Kunde speichern">
</form>
</body>
</html>

