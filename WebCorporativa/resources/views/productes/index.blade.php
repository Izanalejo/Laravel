@extends('layouts.app')
@section('contingut')
<h1 style="margin-left: 20px; padding: 20px; ">Llista de productes</h1>
<ul>


<div style="border-radius: 20px;" class="container">
        <h1 style="text-align: center; color: whitesmoke; text-shadow: 2px 2px 5px #056d71ec;" class="mb-4 text-center">Els nostres Serveis</h1><hr>
        
        <div class="row">
            @foreach($productes as $producte)
                <div class="col-md-4 mb-4">
                    <div style="background-color: #056d71ec; color: whitesmoke;" class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title" style="font-weight: bold; font-size: 1.3em;">{{ $producte->name }}</h5>
                            <p class="card-text">{{ $producte->description}}</p>
                            <p class="card-text" style="font-weight: 20px"><cite>{{ $producte->price }}€</cite></p>
                        </div>
                        <a href="{{ route('productes.edit', $producte->id) }}" class="btn btn-warning" style="background-color:#05e5ecec; border: none;">Editar</a> 
                    </div>
                </div>
            @endforeach
        </div>
    </div>
<a href="{{ route('productes.create') }}" class="btn btn-warning" style=" border: none; padding: 10px 30px; font-size: 18px; display: flex; justify-self: center; max-width: 500px;">Nou producte</a><br><br>


@endsection