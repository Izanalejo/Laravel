@extends('layouts.app')
@section('titol', 'Estadístiques')
@section('contingut')
    <h1 style="text-align: center; color: whitesmoke; text-shadow: 2px 2px 5px #056d71ec;">Estadístiques de Management</h1><hr>
    
    <section class="container py-5" style="background-color: #056d71ec; color: whitesmoke; border-radius: 10px; padding: 40px;">
        <h2 class="text-center mb-4">Panel d'Estadístiques</h2>
        <p style="text-align: center; font-size: 18px;">
            Aquí es mostren les estadístiques del sistema de gestió.
        </p>
        
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card text-center" style="background-color: rgba(255,255,255,0.1); border: none;">
                    <div class="card-body">
                        <h3 style="color: white;">150</h3>
                        <p>Alumnes actius</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center" style="background-color: rgba(255,255,255,0.1); border: none;">
                    <div class="card-body">
                        <h3 style="color: white;">10</h3>
                        <p>Classes disponibles</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center" style="background-color: rgba(255,255,255,0.1); border: none;">
                    <div class="card-body">
                        <h3 style="color: white;">8</h3>
                        <p>Professors</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection