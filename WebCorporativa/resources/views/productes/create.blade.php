@extends('layouts.app')
@section('contingut')

    <h1 style="text-align: center; padding: 20px;">Afegir nou producte</h1>
<form style="padding: 40px " action="{{ route('productes.store') }}" method="POST">
    @csrf
    <div>
        <label for="nom">Nom del producte</label><br>
        <input type="text" name="nom" id="nom" class="form-control">
    </div>
    <br>
    <div>
        <label for="descripcio">Descripció</label><br>
        <textarea name="descripcio" id="descripcio" class="form-control"></textarea>
    </div>
    <br>
     <div>
        <label for="preu">Preu (€)</label><br>
        <input type="number" name="preu" id="preu" step="0.01" class="form-control">
    </div>
    <br>
    <button type="submit"  class="btn btn-primary">Guardar producte</button>
</form>
<br>
<a href="{{ route('productes.index') }}"  class="btn btn-warning">⬅ Tornar al llistat</a>

@endsection