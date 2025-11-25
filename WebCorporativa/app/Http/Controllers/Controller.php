<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

abstract class Controller
{
    public function inici(){
        //Lo que quieras hacer
        //Hacer una consulta a la BBDD

        $resultados=[1,4,57,8];
        return view ('serveis',compact($resultados));
    }
    
    public function contacte(){
        return view('contacte');
    }
}
