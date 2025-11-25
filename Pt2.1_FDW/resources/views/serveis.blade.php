@extends('layouts.app')
@section('titol', 'Serveis')
@section('contingut')
    <div style="border-radius: 20px;" class="container">
        <h1 style="text-align: center; color: whitesmoke; text-shadow: 2px 2px 5px #056d71ec;" class="mb-4 text-center">Els nostres Serveis</h1><hr>
        
        <div class="row">
            @foreach($serveis as $servei)
                <div class="col-md-4 mb-4">
                    <div style="background-color: #056d71ec; color: whitesmoke;" class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title" style="font-weight: bold; font-size: 1.3em;">{{ $servei['nom'] }}</h5>
                            <p class="card-text">{{ $servei['descripcio'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection