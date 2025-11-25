@extends('layouts.app')
@section('titol', 'Informació Personal')
@section('contingut')
    <h1 style="text-align: center; color: whitesmoke; text-shadow: 2px 2px 5px #056d71ec;">Informació Personal</h1><hr>
    
    <section class="container py-5">
        <div class="mx-auto" style="max-width: 600px; background-color: #056d71ec; color: whitesmoke; border-radius: 10px; padding: 40px;">
            <div class="info-item mb-4">
                <h4 style="color: #ffeb3b;">Nom:</h4>
                <p style="font-size: 20px;">{{ $nom }}</p>
            </div>
            
            <div class="info-item mb-4">
                <h4 style="color: #ffeb3b;">Cognom:</h4>
                <p style="font-size: 20px;">{{ $cognom }}</p>
            </div>
            
            <div class="info-item mb-4">
                <h4 style="color: #ffeb3b;">Edat:</h4>
                <p style="font-size: 20px;">{{ $edat }} anys</p>
            </div>
        </div>
    </section>
@endsection