<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Clase Home.
 */
class HomeController extends Controller
{
    /**
     * Funcion __invoke para cuando la vista no tiene mas entradas.
     *
     * @return string
     */
    public function __invoke()
    {
        /* return "Bienvenido a tu pagina principal"; */
        return view('home');
    }
}
