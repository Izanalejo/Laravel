<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inici');
});

Route::get('/serveis', function () { 
    $serveis = ['Webs corporatives', 'Botigues online', 'Aplicacions web'];
    return view('serveis', ['serveis' => $serveis]);
}); 

Route::get('/about', function () {
    return view('about'); 
}); 

Route::get('/contacte', function () { 
    return view('contacte'); 
});