<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HelloController extends Controller
{
    /** 
     * Mostrar saludo para un nombre específico.
     * 
     * @param $name Nombre de la persona a saludar.
     */
    public function show(string $name): view {
        return view('hello', ['name'=>$name]);
    }
}
