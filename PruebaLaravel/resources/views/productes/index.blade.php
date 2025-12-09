<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Llista de productes</h1>
<ul>
@foreach($productes as $producte)
    <li>
        {{ $producte->name }} - {{ $producte->price }} € (euros)
 @endforeach
</ul>

<a href="{{ route('productes.create') }}">Nou producte</a>


</body>
</html>