<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\ProducteController;

/* Route::get('/', function () {
    return view('welcome');// vaig a dins de la carpeta resources
}); */

Route::get('/', function () {
return view("productes/index");
}
);

Route::get ('/hello', function(){
    return 'Hello DAW2!!!'; //Directament poso un text
});

Route::get('/holamundo', function () {
return view("hello"); //Estic anant a un archiu concret dins de la carpeta resources/views
  }
);

Route::get('/producte/{id}', [PaginaController::class, 'producte'])->where('id', '[0-9]+');




Route::get('/info/{nom}/{cognom}/{edat}', [PaginaController::class, 'info'])->where([
    'nom' => '[A-Za-zÀ-ÿ]+',
    'cognom' => '[A-Za-zÀ-ÿ]+',
    'edat' => '[0-9]+'
]);

Route::get('/productes/create', [ProducteController::class, 'create'])->name('productes.create');

Route::post('/productes', [ProducteController::class, 'store'])->name('productes.store'); 

Route::get('/productes', [ProducteController::class, 'index']) ->name('productes.index');