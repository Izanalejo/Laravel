@extends('layouts.app')
@section('titol', 'Serveis')
@section('contingut')
    <!-- Sección de clases -->
    <div style="border-radius: 20px;" class="container">
        <h1 style="text-align: center; color: whitesmoke; text-shadow: 2px 2px 5px #056d71ec;" class="mb-4 text-center">Nuestras Clases</h1><hr>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div style="background-color: #056d71ec;" class="card h-100">
                    <img src="{{URL::asset('img/salsa.png')}}" class="card-img-top" alt="Salsa" width="300" height="500">
                    <div class="card-body">
                        <h5 class="card-title">Salsa</h5>
                        <p class="card-text">Aprende los movimientos más sensuales y divertidos de la salsa con nuestros instructores expertos.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div style="background-color: #056d71ec;" class="card h-100">
                    <img src="{{URL::asset('img/ballet.png')}}" class="card-img-top" alt="Ballet" width="300" height="500">
                    <div class="card-body">
                        <h5 class="card-title">Ballet</h5>
                        <p class="card-text">Desarrolla fuerza, flexibilidad y gracia a través del ballet clásico, desde iniciación hasta avanzado.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div style="background-color: #056d71ec;" class="card h-100">
                    <img src="{{URL::asset('img/hiphop.png')}}" class="card-img-top" alt="Hip Hop" width="300" height="500">
                    <div class="card-body">
                        <h5 class="card-title">Hip-Hop</h5>
                        <p class="card-text">Exprésate con estilo y energía. Aprende pasos urbanos y coreografías modernas que te harán brillar.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

