<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inici');
});

Route::get('/serveis', function () { 
    return view('serveis'); 
}); 

Route::get('/about', function () {
    return view('about'); 
}); 

Route::get('/contacte', function () { 
    return view('contacte'); 
});