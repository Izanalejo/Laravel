<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar producte</h1>
    {{-- Formulario de edición --}}
    <form action="{{ route('productes.update', $producte->id) }}" method="POST">
        {{-- Seguridad --}}
        @csrf
        {{-- Laravel necesita este método para UPDATE --}}
        @method('PUT')
        <div>
            <label for="nom">Nom del producte</label><br>
            <input 
                type="text" 
                name="nom" 
                id="nom"
                value="{{ $producte->name }}"
                required
            >
        </div>
        <br>
        <div>
            <label for="preu">Preu (€)</label><br>
            <input 
                type="number" 
                name="preu" 
                id="preu"
                step="0.01"
                value="{{ $producte->price }}"
                required
            >
        </div>
        <br>
        <div>
            <label for="descripcio">Descripció</label><br>
            <textarea 
                name="descripcio" 
                id="descripcio"
                rows="4"
                required
            >{{ $producte->description }}</textarea>
        </div>
        <br>
        <button type="submit">Actualitzar producte</button>
    </form>
    <br>
    <a href="{{ route('productes.index') }}">⬅ Tornar al llistat</a>

</body>
</html>