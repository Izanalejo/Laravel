<?php
namespace App\Http\Controller;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

 // Ruta original de inicio
Route::get('/', function () {
    return view('inici');
});

// EXERCICI 1 — Ruta que retorna text directament
Route::get('/about', function () {
    return view('about');
});

// EXERCICI 2 — Passar una variable a una vista (10 serveis)
Route::get('/serveis', function () { 
    $serveis = [
        ['nom' => 'Classes de Salsa', 'descripcio' => 'Aprèn els moviments més sensuals i divertits de la salsa amb instructors experts'],
        ['nom' => 'Classes de Ballet', 'descripcio' => 'Desenvolupa força, flexibilitat i gràcia a través del ballet clàssic'],
        ['nom' => 'Classes de Hip-Hop', 'descripcio' => 'Expressa\'t amb estil i energia amb passos urbans i coreografies modernes'],
        ['nom' => 'Classes de Bachata', 'descripcio' => 'Descobreix el ritme sensual i romàntic de la bachata caribeny'],
        ['nom' => 'Classes de Contemporani', 'descripcio' => 'Explora la creativitat i l\'expressió corporal amb dansa contemporània'],
        ['nom' => 'Classes de Funky', 'descripcio' => 'Energia i diversió amb estils urbans plens de ritme i personalitat'],
        ['nom' => 'Classes de Ballroom', 'descripcio' => 'Vals, tango i fox-trot per a balls de saló elegants i clàssics'],
        ['nom' => 'Classes de Flamenco', 'descripcio' => 'Passió i força amb el ball tradicional espanyol ple de duende'],
        ['nom' => 'Classes de Zumba', 'descripcio' => 'Fitness i diversió combinats amb ritmes llatins i coreografies energètiques'],
        ['nom' => 'Classes Particulars', 'descripcio' => 'Atenció personalitzada per perfeccionar la teva tècnica en qualsevol estil']
    ];
    return view('serveis', ['serveis' => $serveis]);
}); 

// EXERCICI 3 — Paràmetre obligatori
Route::get('/producte/{id}', function ($id) {
    return "Has seleccionat el producte número $id.";
})->where('id', '[0-9]+');

// EXERCICI 4 — Paràmetre opcional
Route::get('/salutacio/{nom?}', function ($nom = null) {
    if ($nom) {
        return "Hola, $nom!";
    }
    return "Hola, convidat!";
})->where('nom', '[A-Za-zÀ-ÿ]+');

// EXERCICI 5 — Paràmetre amb restricció regex
Route::get('/client/{dni}', function ($dni) {
    return "Client amb DNI: $dni";
})->where('dni', '[0-9]{8}[A-Za-z]');

// EXERCICI 6 — Ruta amb nom
Route::get('/contacte', function () { 
    return view('contacte'); 
})->name('contacte.pagina');

// EXERCICI 7 — Redirecció entre rutes
Route::get('/suport', function () {
    return redirect('/contacte');
});

// EXERCICI 8 — Agrupació de rutes
Route::prefix('management')->group(function () {
    Route::get('/usuaris', function () {
        return 'Llista d\'usuaris';
    });
    
    Route::get('/estadistiques', function () {
        return view('estadistiques');
    });
});

// EXERCICI 9 — Ruta API bàsica
Route::get('/api/info', function () {
    return response()->json([
        'empresa' => 'La meva web',
        'any' => 2024
    ]);
});

// EXERCICI 10 — Ruta amb múltiples paràmetres
Route::get('/info/{nom}/{cognom}/{edat}', function ($nom, $cognom, $edat) {
    return view('info', [
        'nom' => $nom,
        'cognom' => $cognom,
        'edat' => $edat
    ]);
})->where([
    'nom' => '[A-Za-zÀ-ÿ]+',
    'cognom' => '[A-Za-zÀ-ÿ]+',
    'edat' => '[0-9]+'
]);
 
