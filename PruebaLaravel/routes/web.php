<?php

use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');// vaig a dins de la carpeta resources
}); */

Route::get('/', function () {
return view("index");
}
);

Route::get ('/hello', function(){
    return 'Hello DAW2!!!'; //Directament poso un text
});

Route::get('/holamundo', function () {
return view("hello"); //Estic anant a un archiu concret dins de la carpeta resources/views
  }
);
