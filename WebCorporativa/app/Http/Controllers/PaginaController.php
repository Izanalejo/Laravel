<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function contacte()
    {
        return view('contacte');
    }
    public function inici()
    {
        return view('inici');
    }
    public function about()
    {
        return view('about');
    }

    public function producte($id)
    {
        return "Has seleccionat el producte número $id.";
    }
    public function saludo($nom = null)
    {
        if ($nom) {
            return "Hola, $nom!";
        }
        return "Hola, convidat!";
    }

    public function DNI($dni)
    {
        return "Client amb DNI: $dni";
    }

    public function redContacte()
    {
        return redirect('/contacte');
    }
    public function apiInfo()
    {
        return response()->json([
            'empresa' => 'La meva web',
            'any' => 2024
        ]);
    }

    public function info($nom, $cognom, $edat)
    {
        return view('info', [
            'nom' => $nom,
            'cognom' => $cognom,
            'edat' => $edat
        ]);
    }
}
