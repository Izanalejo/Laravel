@extends('layouts.app')
@section('contingut')
    <h1 style="text-align: center; padding: 20px;">Editar producte</h1>
    {{-- Formulario de edición --}}
    <form style="padding: 20px" action="{{ route('productes.update', $producte->id) }}" method="POST">
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
            class="form-control">
        </div>
        <br>
        <div>
            <label for="descripcio">Descripció</label><br>
            <textarea 
                name="descripcio" 
                id="descripcio"
                rows="4"
                required
            class="form-control">{{ $producte->description }}</textarea>
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
            class="form-control">
        </div>
        <br>
        <button type="submit"  class="btn btn-warning">Actualitzar producte</button>
    </form>
    <br>
    <a href="{{ route('productes.index') }}"  class="btn btn-warning">⬅ Tornar al llistat</a>

    @endsection
