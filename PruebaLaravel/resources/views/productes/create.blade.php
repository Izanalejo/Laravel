<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Afegir nou producte</h1>
<form action="{{ route('productes.store') }}" method="POST">
    @csrf
    <div>
        <label for="nom">Nom del producte</label><br>
        <input type="text" name="nom" id="nom">
    </div>
    <br>

    <div>
        <label for="preu">Preu (€)</label><br>
        <input type="number" name="preu" id="preu" step="0.01">
    </div>
    <br>
    <div>
        <label for="descripcio">Descripció</label><br>
        <textarea name="descripcio" id="descripcio"></textarea>
    </div>
    <br>
    <button type="submit">Guardar producte</button>
</form>
<br>
<a href="{{ route('productes.index') }}">⬅ Tornar al llistat</a>

</body>
</html>