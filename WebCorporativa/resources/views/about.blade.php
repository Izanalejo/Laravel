@extends('layouts.app')
@section('titol', 'Sobre nosaltres')
@section('contingut')
<section class="container py-5">
    <h1 style="text-align: center; color: whitesmoke; text-shadow: 2px 2px 5px #056d71ec;" class="mb-4 text-center">Horarios</h1><hr>
    <p style="color: whitesmoke; text-shadow: 2px 2px 5px #056d71ec;" class="text-center">Tenemos clases todos los días de lunes a sábado, en horarios adaptados para niños, jóvenes y adultos.</p>
    <ul class="list-group list-gr up-flush text-center">
        <li style="background-color: #056d71ec; color: whitesmoke" class="list-group-item">Lunes a Viernes: 16:00 - 21:00</li>
        <li style="background-color: #056d71ec; color: whitesmoke" class="list-group-item">Sábado: 10:00 - 14:00</li>
        <li style="background-color: #056d71ec; color: whitesmoke" class="list-group-item">Domingo: Cerrado</li>
    </ul>
</section>

<!-- Sección de eventos -->

    <div style="background-color: #056d71ec; border-radius: 20px; padding: 90px" class="container">
        <h2 style="color: whitesmoke;" class="mb-4 text-center">Eventos y actuaciones</h2>
        <p style="color: whitesmoke;" class="text-center">Organizamos exhibiciones, competiciones y talleres especiales donde nuestros alumnos pueden mostrar su talento y aprender de profesionales invitados.</p>
    </div>


@endsection
