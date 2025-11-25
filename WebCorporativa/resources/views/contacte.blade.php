@extends('layouts.app')
@section('titol', 'Contacte')
@section('contingut') <h1 style="text-align: center; color: whitesmoke; text-shadow: 2px 2px 5px #056d71ec;">Contacta amb nosaltres</h1><hr>
<section class="container py-5">
    <h2 class="mb-4 text-center">Contacto</h2>
    <p class="text-center">¿Quieres unirte a nuestras clases o necesitas más información? Contáctanos y te responderemos lo antes posible.</p>
    <form class="mx-auto" style="max-width:600px;">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" id="email" required>
        </div>
        <div class="mb-3">
            <label for="mensaje" class="form-label">Mensaje</label>
            <textarea class="form-control" id="mensaje" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</section>

@endsection


